<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Mosques;
use Illuminate\Support\Facades\Auth;
use Hash, Storage,Session, Validator, DB, DateTime;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class MosquesController extends Controller
{
    public function index(Request $request)
    {
        $query = Mosques::query();
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }
        if ($request->filled('search_query')) {
            $searchQuery = $request->input('search_query');
            $query->where(function ($query) use ($searchQuery) {
                $query->where('mosque_name', 'like', '%' . $searchQuery . '%')
                ->orWhere('app_name', 'like', '%' . $searchQuery . '%')
                ->orWhere('country', 'like', '%' . $searchQuery . '%')
                ->orWhere('city', 'like', '%' . $searchQuery . '%')
                ->orWhere('email', 'like', '%' . $searchQuery . '%');
            });
        }
        $data['mosques'] = $query->orderBy('id', 'DESC')->paginate(50);
        $data['filters'] = $request->only([ 'status', 'search_query']);
        return view('admin/mosques/manage_mosques', $data);
    }

    public function update_status(Request $request)
    {
        $data = $request->all();
        $ext_data = Mosques::find($data['id']);
        if ($ext_data) {
            $ext_data->status = ($ext_data->status == 1) ? 0 : 1;
            $ext_data->save();
            return response()->json(['msg' => 'success', 'response' => 'Status successfully updated.']);
        } else {
            return response()->json(['msg' => 'error', 'response' => 'Record not found.']);
        }
    }

    public function destroy(Request $request)
    {
        $data = $request->all();

        // $documents = DB::table('documents')->where('user_id', $data['id'])->count();
        // if ($documents > 0 || $payments > 0) {
            // return response()->json(['msg' => 'error', 'response' => 'Cannot delete this record because it is associated with other records.']);
        // }
        $ext_data = Mosques::find($data['id']);
        if ($ext_data) {
            $deleted = $ext_data->delete();
            if ($deleted) {
                return response()->json(['msg' => 'success', 'response' => 'Mosque successfully deleted.']);
            } else {
                return response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
            }
        } else {
            return response()->json(['msg' => 'error', 'response' => 'Record not found.']);
        }
    }

    public function manage_mosque(Request $request, $id)
    {
        $data['mosque'] = Mosques::where('id', $id)->first();
        return view('admin/mosques/manage_mosque', $data);
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