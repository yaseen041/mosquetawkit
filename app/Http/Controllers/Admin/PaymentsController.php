<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Payments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash, Session, Validator, DB, DateTime;

class PaymentsController extends Controller
{
    public function index(Request $request)
    {
        $query = Payments::query()
        ->join('admin_users', 'payments.created_by', '=', 'admin_users.id')
        ->join('users', 'payments.user_id', '=', 'users.id')
        ->select('payments.*', 'admin_users.username as created_by', 'users.full_name as user_name');

        if ($request->filled('created_by')) {
            $query->where('payments.created_by', $request->input('created_by'));
        }

        if ($request->filled('user')) {
            $query->where('payments.user_id', $request->input('user'));
        }

        if ($request->filled('status')) {
            $query->where('payments.status', $request->input('status'));
        }

        if ($request->filled('date')) {
            $query->whereDate('payments.created_at', $request->input('date'));
        }

        if ($request->filled('search_query')) {
            $query->where('payments.trx_id', 'like', '%' . $request->input('search_query') . '%');
        }

        $data['payments'] = $query->orderBy('payments.id', 'DESC')->paginate(50);
        $data['users'] = User::select('id', 'full_name', 'email')->orderBy('id', 'DESC')->get();

        $data['filters'] = $request->only(['created_by', 'user', 'status', 'date', 'search_query']);
        return view('admin.payments.manage_payments', $data);
    }

    public function create()
    {
    }

    public function store(Request $request)
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

    public function view_details(Request $request) {
        $balance = Payments::find($request->id);

        if ($balance) {
            $htmlresult = view('admin/users/view_balance_ajax', compact('balance'))->render();
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

    public function show(Request $request) {
        $balance = Payments::find($request->id);

        if ($balance) {
            $htmlresult = view('admin/users/edit_balance_ajax', compact('balance'))->render();
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

    public function edit(Request $request) {
        $users = User::select('id', 'full_name', 'email')->orderBy('id', 'DESC')->get();

        $balance = Payments::find($request->id);

        if ($balance) {
            $htmlresult = view('admin/payments/edit_balance_ajax', compact('balance', 'users'))->render();
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

    public function update_balance(Request $request)
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

        if ($request->filled('balance_id')) {
            $balance = Payments::find($request->balance_id);
            if (!$balance) {
                return response()->json([
                    'msg' => 'error',
                    'response' => 'Payment record not found.',
                ]);
            }
        } else {
            $balance = new Payments();
            $balance->user_id = $request->user_id;
            $balance->updated_by = Auth::user()->id;
            $balance->updated_at = now();
        }

        $balance->amount = $request->balance;
        $balance->description = $request->title;

        if ($balance->save()) {
            return response()->json([
                'msg' => 'success',
                'response' => 'Balance updated successfully!' ,
            ]);
        } else {
            return response()->json([
                'msg' => 'error',
                'response' => 'Something went wrong.',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $status = Payments::find($data['id'])->delete();
        if($status > 0) {
            return response()->json(['msg' => 'success', 'response'=>'Balance successfully deleted.']);
        } else {
            return response()->json(['msg' => 'error', 'response'=>'Something went wrong!']);
        }
    }



}