<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Documents;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash, Session, Storage, Validator, DB, DateTime;

class DocumentsController extends Controller
{
    public function index(Request $request)
    {
        $query = Documents::query();

        if ($request->filled('created_by')) {
            $query->where('documents.created_by', $request->input('created_by'));
        }

        if ($request->filled('user')) {
            $query->where('documents.user_id', $request->input('user'));
        }

        if ($request->filled('category')) {
            $query->where('documents.category_id', $request->input('category'));
        }

        if ($request->filled('date')) {
            $query->whereDate('documents.created_at', $request->input('date'));
        }

        if ($request->filled('search_query')) {
            $query->where('documents.file_name', 'like', '%' . $request->input('search_query') . '%');
        }

        $data['documents'] = $query->orderBy('documents.id', 'DESC')->paginate(50);
        $data['filters'] = $request->only(['created_by', 'user', 'date', 'category', 'search_query']);
        $data['users'] = User::select('id', 'full_name', 'email')->orderBy('id', 'DESC')->get();

        return view('admin.documents.manage_documents', $data);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx,txt|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'msg' => 'lvl_error',
                'response' => $validator->errors()->all(),
            ]);
        }

        if ($request->hasFile('file')) {
        // Handle file upload
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/documents/'), $fileName);
            $filePath = "uploads/documents/{$fileName}";

        // Save document details to the database
            $document = new Documents();
            $document->user_id = $request->user_id;
            $document->category_id = $request->category;
            $document->file_title = $request->title;
            $document->description = $request->description;
            $document->file_name = $fileName;
            $document->created_by = Auth::user()->id;
            $document->created_at = now();

            if ($document->save()) {
                return response()->json([
                    'msg' => 'success',
                    'response' => 'Document uploaded successfully!',
                ]);
            }
        }

        return response()->json([
            'msg' => 'error',
            'response' => 'File upload failed.',
        ]);
    }


    public function show(Request $request) {

        $document = Documents::find($request->id);

        if ($document) {
            $htmlresult = view('admin/users/edit_document_ajax', compact('document'))->render();
            return response()->json([
                'msg' => 'success',
                'response' => $htmlresult
            ]);
        } else {
            return response()->json([
                'msg' => 'error',
                'response' => 'Document not found.'
            ], 404);
        }
    }


    public function update_document(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,docx,txt|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'msg' => 'lvl_error',
                'response' => $validator->errors()->all(),
            ]);
        }

        $document = Documents::find($request->id);
        if (!$document) {
            return response()->json([
                'msg' => 'error',
                'response' => 'Document not found.',
            ]);
        }

        $document->file_title = $request->title;
        $document->description = $request->description;

        if ($request->hasFile('file')) {
            if ($document->file_name && file_exists(public_path($document->file_name))) {
                unlink(public_path($document->file_name));
            }
            $document->file_name = $this->uploadFiles($request, 'file', 'documents');
        }

        if ($request->user_id) {
            $document->user_id = $request->user_id;
        }
        $document->category_id = $request->category;

        $document->created_by = Auth::user()->id;
        $document->updated_at = now();

        if ($document->save()) {
            return response()->json([
                'msg' => 'success',
                'response' => 'Document updated successfully!',
            ]);
        }

        return response()->json([
            'msg' => 'error',
            'response' => 'Failed to update document.',
        ]);
    }



    public function edit(Request $request) {
        $users = User::select('id', 'full_name', 'email')->orderBy('id', 'DESC')->get();
        $document = Documents::find($request->id);
        if ($document) {
            $htmlresult = view('admin/documents/edit_document_ajax', compact('document', 'users'))->render();
            return response()->json([
                'msg' => 'success',
                'response' => $htmlresult
            ]);
        } else {
            return response()->json([
                'msg' => 'error',
                'response' => 'Document not found.'
            ], 404);
        }
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $status = Documents::find($data['id'])->delete();
        if($status > 0) {
            return response()->json(['msg' => 'success', 'response'=>'Document successfully deleted.']);
        } else {
            return response()->json(['msg' => 'error', 'response'=>'Something went wrong!']);
        }
    }

    private function uploadFiles(Request $request, $fieldName, $folder)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path("uploads/{$folder}/"), $fileName);
            return $fileName;
        }
        return null;
    }
}