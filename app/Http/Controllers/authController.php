<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $userFind = User::find(Auth::user()->id);
            
            $userFind->last_login = Carbon::now();
            $userFind->save();

            if(Auth::user()->role_id == 1){
                return redirect('/app');
            }elseif(Auth::user() == 2){
                return redirect('/dashboard/teacher');
            }else{
                return redirect('/dashboard');
            }
        }


        return back()->withErrors([
            'username' => 'username tidak ditemukan'
        ])->onlyInput('username');
    }

    public function username()
    {
        return 'username';
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    }
    
}
