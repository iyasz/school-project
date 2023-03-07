<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        $totalAdmin = User::all()->where('role_id', 1)->count();
        $totalTeachers = User::all()->where('role_id', 2)->count();
        $totalStudents = User::all()->where('role_id', 3)->count();
        return view('admin.dashboard', ['CountAdm' => $totalAdmin, 'CountTeacher' => $totalTeachers, 'CountStudent' => $totalStudents]);
    }
}
