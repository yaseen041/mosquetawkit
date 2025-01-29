<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Documents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    public function get_my_documents(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $documents = Documents::where('user_id', $user->id)
        ->where('status', 1)
        ->orderBy('id', 'DESC')
        ->get();

        if ($documents->isEmpty()) {
            return response()->json(['msg' => 'No documents found', 'documents' => $documents]);
        }
        return response()->json([
            'msg' => 'success',
            'response' => 'success',
            'documents' => $documents
        ]);
    }

    public function get_user_projects(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $submissions = DB::table('submissions')
        ->leftJoin('affiliations', 'submissions.affiliation_id', '=', 'affiliations.id')
        ->join('users', 'submissions.user_id', '=', 'users.id')
        ->select(
            'submissions.id as submission_id',
            'submissions.entrytype as entrytype',
            'submissions.title as submission_title',
            'submissions.affiliation_id as affiliation_id',
            'submissions.orc_id as orc_id',
            'submissions.doi as doi',
            'submissions.description as description',
            'submissions.post_image as post_image',
            'submissions.post_youtube_link as post_youtube_link',
            'submissions.institution_id as institution_id',
            'submissions.video_abstract as video_abstract',
            'submissions.visual_abstract as visual_abstract',
            'submissions.status as status',
            'submissions.visibility_status as visibility_status',
            'submissions.created_at as created_at',
            'submissions.updated_at as updated_at',
            DB::raw('COALESCE(affiliations.title, NULL) as affiliation_name'),
            'users.first_name as first_name',
            'users.last_name as last_name'
        )
        ->where('submissions.user_id', $user->id)
        ->where('submissions.entrytype', 1)
        ->where('submissions.under_review', 0)
        ->where('submissions.status', 1)
        ->orderBy('submissions.id', 'DESC')
        ->get();
        if ($submissions->isEmpty()) {
            return response()->json(['msg' => 'No submissions found', 'submissions' => $submissions]);
        }
        return response()->json([
            'msg' => 'success',
            'response' => 'success',
            'submissions' => $submissions
        ]);
    }

    public function review_my_submission(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $review = DB::table('review_requests')->insert([
            'user_id' => $user->id,
            'submission_id' => $request->project_id,
            'created_at' => now(),
        ]);
        if ($review) {
            return response()->json([
                'msg' => 'success',
                'response' => 'Review request submitted successfully',
            ]);
        } else {
            return response()->json([
                'msg' => 'Failed to submit review request',
                'response' => 'error',
            ]);
        }
    }

    public function update_visibility(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $projectId = $request->project_id;
        if (!$projectId) {
            return response()->json(['error' => 'Project ID is missing'], 400);
        }
        $status = DB::table('submissions')
        ->where('id', $projectId)
        ->where('user_id', $user->id)
        ->update([
            'visibility_status' => $request->visibility_status,
            'updated_at' => now(),
        ]);
        if ($status) {
            if($request->visibility_status == 1){
                $new_status = 0;
            }else{
                $new_status = 1;
            }
            return response()->json([
                'msg' => 'success',
                'response' => 'Discover page visibility status changed successfully.',
                'data' => $new_status,
            ]);
        } else {
            return response()->json([
                'msg' => 'No changes were made or record not found.',
                'response' => 'error',
            ]);
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'post_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'visual_abstract' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'institution_id' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'video_abstract' => 'nullable|mimes:mp4,avi,mkv,flv,webm',
            'post_youtube_link' => 'nullable',
            'project_id' => $request->entrytype == 2 ? 'required' : 'nullable',
        ])->after(function ($validator) use ($request) {
            if (!$request->hasFile('video_abstract') && !$request->hasFile('visual_abstract')) {
                $validator->errors()->add(
                    'visual_abstract',
                    'You must provide at least one visual item (video or image).'
                );
            }
        });
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $collaborations = json_decode($request->collaborations, true);
        foreach ($collaborations as $key => $collab) {
            if(!empty($collab['collaboratortype'])) {
                if(empty($collab['collaboratoraffiliation']) || empty($collab['collaborator_name']) || empty($collab['collaborator_email'])) {
                    return response()->json(['msg' => 'error', 'response' => "Please fill all required fields for all collaborators #".($key + 1)."."], 400);
                }
                if (!filter_var($collab['collaborator_email'], FILTER_VALIDATE_EMAIL)) {
                    return response()->json(['msg' => 'error', 'response' => "Please provide a valid email address for collaborator #".($key + 1)."." ], 400);
                }
            }
        }
        $user = JWTAuth::parseToken()->authenticate();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();
        $post_image_url = $this->uploadFile($request, 'post_image', 'post_image');
        $institution_image_url = $this->uploadFile($request, 'institution_id', 'institutions_id');
        $video_abstract_url = $this->uploadFile($request, 'video_abstract', 'video_abstract');
        $visual_abstract_url = $this->uploadFile($request, 'visual_abstract', 'visual_abstract');
        $formSubmission = Submissions::create([
            'user_id' => $user->id,
            'project_id' => $request->project_id,
            'affiliation_id' => $request->affiliation_id,
            'orc_id' => $request->orc_id,
            'title' => $request->title,
            'description' => $request->description,
            'entrytype' => $request->entrytype,
            'doi' => $request->doi,
            'institution_id' => $institution_image_url,
            'post_image' => $post_image_url,
            'post_youtube_link' => $request->post_youtube_link,
            'video_abstract' => $video_abstract_url,
            'visual_abstract' => $visual_abstract_url,
            'created_at' => now(),
        ]);
        send_notification_email($user->id, $request->title, $request->entrytype);
        if($formSubmission->id){
            $collaborations = json_decode($request->collaborations, true);
            foreach ($collaborations as $collab) {
                if(!empty($collab['collaboratortype'])) {
                    $collabo = SubmissionCollaborators::create([
                        'submission_id' => $formSubmission->id,
                        'collaboration_type_id' => $collab['collaboratortype'],
                        'collaborator_affiliation_id' => $collab['collaboratoraffiliation'],
                        'collaborator_name' => $collab['collaborator_name'],
                        'collaborator_email' => $collab['collaborator_email'],
                        'created_at' => now(),
                    ]);
                    send_notification_email_to_collaborator($user->id, $collab['collaborator_email'], $collab['collaborator_name'], $request->title, $request->entrytype);
                }
            }
            return response()->json([
                'msg' => 'success',
                'response' => 'Your project/paper has been created successfully and is currently under review. Thank you!',
                'data' => $formSubmission,
            ], 201);
        }else{
            return response()->json(['msg' => 'error', 'response' => 'Something went wrongeeee'], 400);
        }
    }

    public function edit_submission_old(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $submission = DB::table('submissions')
        ->leftJoin('affiliations', 'submissions.affiliation_id', '=', 'affiliations.id')
        ->leftJoin('collaborators', 'submissions.id', '=', 'collaborators.submission_id')
        ->leftJoin('collaborator_affiliations', 'collaborators.collaborator_affiliation_id', '=', 'collaborator_affiliations.id')
        ->leftJoin('collaborator_types', 'collaborators.collaboration_type_id', '=', 'collaborator_types.id')
        ->join('users', 'submissions.user_id', '=', 'users.id')
        ->select(
            'submissions.id as submission_id',
            'submissions.entrytype as submission_entrytype',
            'submissions.project_id as project_id',
            'submissions.title as submission_title',
            'submissions.affiliation_id as affiliation_id',
            'submissions.orc_id as orc_id',
            'submissions.doi as doi',
            'submissions.description as description',
            'submissions.post_image as post_image',
            'submissions.post_youtube_link as post_youtube_link',
            'submissions.institution_id as institution_id',
            'submissions.video_abstract as video_abstract',
            'submissions.visual_abstract as visual_abstract',
            'submissions.status as status',
            'submissions.created_at as created_at',
            'submissions.updated_at as updated_at',
            DB::raw('COALESCE(affiliations.title, NULL) as affiliation_name'),
            'users.first_name as first_name',
            'users.last_name as last_name',
            'collaborators.id as collaborator_id',
            'collaborators.collaborator_name as collaborator_name',
            'collaborators.collaborator_email as collaborator_email',
            'collaborator_affiliations.id as collaborator_affiliation_id',
            'collaborator_affiliations.title as collaborator_affiliation',
            'collaborator_types.title as collaborator_type'
        )
        ->where('submissions.id', $request->project_id)
        ->where('submissions.user_id', $user->id)
        ->first();
        if (!$submission) {
            return response()->json(['msg' => 'Submission not found'], 404);
        }
        return response()->json([
            'msg' => 'success',
            'response' => 'success',
            'submission' => $submission
        ]);
    }

    public function edit_submission(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $submission = DB::table('submissions')
        ->leftJoin('affiliations', 'submissions.affiliation_id', '=', 'affiliations.id')
        ->join('users', 'submissions.user_id', '=', 'users.id')
        ->select(
            'submissions.id as submission_id',
            'submissions.entrytype as submission_entrytype',
            'submissions.project_id as project_id',
            'submissions.title as submission_title',
            'submissions.affiliation_id as affiliation_id',
            'submissions.orc_id as orc_id',
            'submissions.doi as doi',
            'submissions.description as description',
            'submissions.post_image as post_image',
            'submissions.post_youtube_link as post_youtube_link',
            'submissions.institution_id as institution_id',
            'submissions.video_abstract as video_abstract',
            'submissions.visual_abstract as visual_abstract',
            'submissions.status as status',
            'submissions.created_at as created_at',
            'submissions.updated_at as updated_at',
            DB::raw('COALESCE(affiliations.title, NULL) as affiliation_name'),
            'users.first_name as first_name',
            'users.last_name as last_name'
        )
        ->where('submissions.id', $request->project_id)
        ->where('submissions.user_id', $user->id)
        ->first();
        if (!$submission) {
            return response()->json(['msg' => 'Submission not found'], 404);
        }
        $collaborators = DB::table('collaborators')
        ->leftJoin('collaborator_affiliations', 'collaborators.collaborator_affiliation_id', '=', 'collaborator_affiliations.id')
        ->leftJoin('collaborator_types', 'collaborators.collaboration_type_id', '=', 'collaborator_types.id')
        ->select(
            'collaborators.id as collaborator_id',
            'collaborators.collaborator_name as collaborator_name',
            'collaborators.collaborator_email as collaborator_email',
            'collaborator_affiliations.id as collaboratoraffiliation',
            'collaborator_affiliations.title as collaborator_affiliation',
            'collaborator_types.id as collaboratortype',
            'collaborator_types.title as collaborator_type'
        )
        ->where('collaborators.submission_id', $request->project_id)
        ->orderBy('collaborators.id', 'ASC')->get();
        $response = [
            'msg' => 'success',
            'response' => 'success',
            'submission' => [
                'submission_id' => $submission->submission_id,
                'submission_entrytype' => $submission->submission_entrytype,
                'project_id' => $submission->project_id,
                'submission_title' => $submission->submission_title,
                'affiliation_id' => $submission->affiliation_id,
                'affiliation_name' => $submission->affiliation_name,
                'orc_id' => $submission->orc_id,
                'doi' => $submission->doi,
                'description' => $submission->description,
                'post_image' => $submission->post_image,
                'post_youtube_link' => $submission->post_youtube_link,
                'institution_id' => $submission->institution_id,
                'video_abstract' => $submission->video_abstract,
                'visual_abstract' => $submission->visual_abstract,
                'status' => $submission->status,
                'created_at' => $submission->created_at,
                'updated_at' => $submission->updated_at,
                'first_name' => $submission->first_name,
                'last_name' => $submission->last_name,
                'collaborators' => $collaborators,
            ],
        ];
        return response()->json($response);
    }

    public function update_submission(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'institution_id' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'post_youtube_link' => 'nullable',
            'project_id' => $request->entrytype == 2 ? 'required' : 'nullable',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $collaborations = json_decode($request->collaborations, true);
        foreach ($collaborations as $key => $collab) {
            if(!empty($collab['collaboratortype'])) {
                if(empty($collab['collaboratoraffiliation']) || empty($collab['collaborator_name']) || empty($collab['collaborator_email'])) {
                    return response()->json(['msg' => 'error', 'response' => "Please fill all required fields for all collaborators #".($key + 1)."."], 400);
                }
                if (!filter_var($collab['collaborator_email'], FILTER_VALIDATE_EMAIL)) {
                    return response()->json(['msg' => 'error', 'response' => "Please provide a valid email address for collaborator #".($key + 1)."." ], 400);
                }
            }
        }
        $user = JWTAuth::parseToken()->authenticate();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();
        $submission = Submissions::find($request->submission_id);
        if (!$submission) {
            return response()->json(['msg' => 'error', 'response' => 'Submission not found'], 404);
        }
        if ($request->post_image) {
            $submission->post_image = $this->uploadFile($request, 'post_image', 'post_image');
        }
        if ($request->institution_id) {
            $submission->institution_id = $this->uploadFile($request, 'institution_id', 'institutions_id');
        }
        if ($request->video_abstract) {
            $submission->video_abstract = $this->uploadFile($request, 'video_abstract', 'video_abstract');
        }
        if ($request->visual_abstract) {
            $submission->visual_abstract = $this->uploadFile($request, 'visual_abstract', 'visual_abstract');
        }
        if($submission->status == 1) {
            $submission->under_review = '1';
            $submission->status = '0';
        }else{
            $submission->status = '0';
        }
        $submission->affiliation_id = $request->affiliation_id;
        $submission->orc_id = $request->orc_id;
        $submission->title = $request->title;
        $submission->project_id = $request->project_id;
        $submission->description = $request->description;
        $submission->entrytype = $request->entrytype;
        $submission->doi = $request->doi;
        $submission->post_youtube_link = $request->post_youtube_link;
        $submission->updated_at = now();
        $updated = $submission->save();
        send_notification_email($user->id, $request->title, $request->entrytype);
        if($updated){
            SubmissionCollaborators::where('submission_id', $request->submission_id)->delete();
            $collaborations = json_decode($request->collaborations, true);
            foreach ($collaborations as $collab) {
                if(!empty($collab['collaboratortype'])) {
                    $collabo = SubmissionCollaborators::create([
                        'submission_id' => $request->submission_id,
                        'collaboration_type_id' => $collab['collaboratortype'],
                        'collaborator_affiliation_id' => $collab['collaboratoraffiliation'],
                        'collaborator_name' => $collab['collaborator_name'],
                        'collaborator_email' => $collab['collaborator_email'],
                        'created_at' => now(),
                    ]);
                    send_notification_email_to_collaborator($user->id, $collab['collaborator_email'], $collab['collaborator_name'], $request->title, $request->entrytype);
                }
            }
            $review = DB::table('review_requests')->where('submission_id', $request->submission_id)->first();
            if(empty($review->id)){
                $review = DB::table('review_requests')->insert([
                    'user_id' => $user->id,
                    'submission_id' => $request->submission_id,
                    'created_at' => now(),
                ]);
            }
            return response()->json([
                'msg' => 'success',
                'response' => 'Your project/paper has been updated successfully.',
                'data' => $submission,
            ], 200);
        }else{
            return response()->json(['msg' => 'error', 'response' => 'Something went wrong'], 400);
        }
    }

    private function uploadFile(Request $request, $fieldName, $folder)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path("uploads/{$folder}/"), $fileName);
            return url("uploads/{$folder}/{$fileName}");
        }
        return null;
    }
}