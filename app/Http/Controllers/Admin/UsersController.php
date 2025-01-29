<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin\Documents;
use App\Models\Admin\Payments;
use Illuminate\Support\Facades\Auth;
use Hash, Storage,Session, Validator, DB, DateTime;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }
        if ($request->filled('search_query')) {
            $searchQuery = $request->input('search_query');
            $query->where(function ($query) use ($searchQuery) {
                $query->where('full_name', 'like', '%' . $searchQuery . '%')
                ->orWhere('email', 'like', '%' . $searchQuery . '%');
            });
        }

        $data['users'] = $query->orderBy('id', 'DESC')->paginate(50);
        $data['filters'] = $request->only([ 'status', 'search_query']);
        return view('admin/users/manage_users', $data);
    }

    public function manage_user(Request $request, $id)
    {
        $data['user'] = User::where('id', $id)->first();

        $query = Documents::query()
        ->where('documents.user_id', $id);
        if ($request->filled('created_by')) {
            $query->where('documents.created_by', $request->input('created_by'));
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

        $data['documents'] = $query->orderBy('documents.id', 'DESC')->get();

        $query2 = Payments::query()
        ->where('payments.user_id', $id);

        if ($request->filled('created_by')) {
            $query2->where('payments.created_by', $request->input('created_by'));
        }

        if ($request->filled('date')) {
            $query2->whereDate('payments.created_at', $request->input('date'));
        }
        if ($request->filled('status')) {
            $query2->where('payments.status', $request->input('status'));
        }
        if ($request->filled('search_query')) {
            $query2->where('payments.trx_id', 'like', '%' . $request->input('search_query') . '%');
        }

        $data['payments'] = $query2->orderBy('payments.id', 'DESC')->get();



        $data['filters'] = $request->only(['created_by', 'user', 'status', 'category', 'date', 'search_query']);

        return view('admin/users/manage_user', $data);

    }

    public function show_documents(Request $request, $id)
    {
        $data['user'] = User::where('id', $id)->first();

        $query = Documents::query()
        ->join('admin_users', 'documents.created_by', '=', 'admin_users.id')
        ->select('documents.*', 'admin_users.username as created_by')
        ->where('documents.user_id', $id);

        if ($request->filled('created_by')) {
            $query->where('documents.created_by', $request->input('created_by'));
        }

        if ($request->filled('date')) {
            $query->whereDate('documents.created_at', $request->input('date'));
        }
        if ($request->filled('search_query')) {
            $query->where('documents.file_name', 'like', '%' . $request->input('search_query') . '%');
        }

        $data['documents'] = $query->orderBy('documents.id', 'DESC')->paginate(50);
        $data['filters'] = $request->only(['created_by', 'user', 'status', 'date', 'search_query']);

        return view('admin/users/user_documents', $data);
    }

    public function show_payments(Request $request, $id)
    {
        $data['user'] = User::where('id', $id)->first();

        $query = Payments::query()
        ->join('admin_users', 'payments.created_by', '=', 'admin_users.id')
        ->select('payments.*', 'admin_users.username as created_by')
        ->where('payments.user_id', $id);

        if ($request->filled('created_by')) {
            $query->where('payments.created_by', $request->input('created_by'));
        }

        if ($request->filled('date')) {
            $query->whereDate('payments.created_at', $request->input('date'));
        }
        if ($request->filled('status')) {
            $query->where('payments.status', $request->input('status'));
        }
        if ($request->filled('search_query')) {
            $query->where('payments.trx_id', 'like', '%' . $request->input('search_query') . '%');
        }

        $data['payments'] = $query->orderBy('payments.id', 'DESC')->paginate(50);
        $data['filters'] = $request->only(['created_by', 'status', 'date', 'search_query']);

        return view('admin/users/user_payments', $data);
    }


    public function store_document(Request $request)
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
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/documents/'), $fileName);
            $filePath = "uploads/documents/{$fileName}";
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

     public function store_balance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'balance' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'msg' => 'lvl_error',
                'response' => $validator->errors()->all(),
            ]);
        }

        $balance = new Payments();
        $balance->user_id = $request->user_id;
        $balance->amount = $request->balance;
        $balance->description = $request->title;
        $balance->created_by = Auth::user()->id;
        $balance->created_date = now();

        if ($balance->save()) {

            return response()->json([
                'msg' => 'success',
                'response' => 'Balance added successfully!',
            ]);
        } else {
            return response()->json([
                'msg' => 'error',
                'response' => 'Something went wrong.',
            ]);
        }
    }



    public function create()
    {
    }

    public function store(Request $request)
    {
    }
    public function edit($id, Request $request)
    {
    }
    public function update(Request $request)
    {
    }
    public function suspend(Request $request)
    {
        $data = $request->all();
        $user = User::find($data['id']);

        if ($user) {
            $user->status = ($user->status == 1) ? 0 : 1;
            $user->save();
            return response()->json(['msg' => 'success', 'response' => 'User status successfully updated.']);
        } else {
            return response()->json(['msg' => 'error', 'response' => 'User not found.']);
        }
    }

    public function destroy(Request $request)
    {
        $data = $request->all();

        $documents = DB::table('documents')->where('user_id', $data['id'])->count();
        $payments = DB::table('payments')->where('user_id', $data['id'])->count();

        if ($documents > 0 || $payments > 0) {
            return response()->json(['msg' => 'error', 'response' => 'User cannot be deleted because the user has documents or payments.']);
        }
        $user = User::find($data['id']);

        if ($user) {
            $userDeleted = $user->delete();

            if ($userDeleted) {
                return response()->json(['msg' => 'success', 'response' => 'User successfully deleted.']);
            } else {
                return response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
            }
        } else {
            return response()->json(['msg' => 'error', 'response' => 'User not found.']);
        }
    }

    private function uploadFiles(Request $request, $fieldName, $folder)
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