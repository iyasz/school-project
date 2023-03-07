<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = User::all()->where('role_id', 1);
        return view('admin.admin.index', ['admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect('/users/admin');
    }
    
    public function deleted()
    {
        $admin = User::onlyTrashed()->where('role_id', 1)->get();
        $adminCount = User::onlyTrashed()->where('role_id', 1)->get()->count();
        return view('admin.admin.softdelete', ['admin' => $admin, 'count' => $adminCount]);
    }

    public function restore($id)
    {
        $find = User::withTrashed()->where('id', $id)->restore();
        return redirect('/users/admin/view/deleted');
    }
}
