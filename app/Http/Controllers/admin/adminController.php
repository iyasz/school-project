<?php

namespace App\Http\Controllers\admin;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function paginate($page)
    {
        $admin = User::where('role_id', 1)->paginate($page);

        return $admin;
    }

    public function index(Request $request)
    {

        $admin = User::where('role_id', 1)->paginate(50);
        return view('admin.admin.index', ['admin' => $admin]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|max:150|unique:users',
            'no_telp' => 'required|numeric|digits_between:7,15|unique:users',
            'gender' => 'required',
            'password' => 'required|confirmed',
        ];

        //your message
        $message = [
            // 'name.required' => '',
            // 'email.required' => '',
        ];
        $validate =  $request->validate($rules, $message);
        
        $request['role_id'] = 1;
        $request['password'] = password_hash($request->password, PASSWORD_DEFAULT, ['cost' => 10]);

        User::create($request->except('_token', 'password_confirmation'));

        return redirect('/users/admin/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = User::withTrashed()->findOrFail($id);
        if($admin->role_id != 1){
            abort(404);
        }
        return view('admin.admin.detail', ['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($admin)
    {
        $q = User::find($admin);
        
        if (!$q) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        $q->delete();
        return response()->json(['message' => 'Item deleted']);
    }
    
    public function deleted()
    {
        $admin = User::onlyTrashed()->where('role_id', 1)->get()->take(10);
        $adm = User::onlyTrashed()->where('role_id', 1)->get()->take(3);
        $adminCount = User::onlyTrashed()->where('role_id', 1)->get()->count();
        return view('admin.admin.softdelete', ['admin' => $admin, 'count' => $adminCount, 'adm' => $adm]);
    }

    public function restore($id)
    {
        $find = User::withTrashed()->where('id', $id)->restore();
        return redirect('/users/admin/view/deleted');
    }
}
