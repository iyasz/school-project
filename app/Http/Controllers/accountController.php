<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    public function profile()
    {
        return view('admin.account.profile');
    }
}
