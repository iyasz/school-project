<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\classroom;
use App\Models\jurusan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = User::where('role_id', 2)->paginate(50);
        return view('admin.teacher.index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = classroom::all();
        $jurusan = jurusan::all();
        return view('admin.teacher.create', ['kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|max:150',
            'no_telp' => 'required|numeric|digits_between:7,15',
            'gender' => 'required',
            'birthday' => 'required',
            'hometown' => 'required',
            'address' => 'required',
            'is_hometeacher' => 'required|in:1,2',
            'password' => 'required|confirmed',
        ];

        //your message
        $message = [
            // 'name.required' => '',
            // 'email.required' => '',
        ];
        
        if($request->is_hometeacher != 2){
            $request['jurusan_id'] = NULL;
            $request['classroom_id'] = NULL;
        }else{
            $rules['jurusan_id'] = 'required';
            $rules['classroom_id'] = 'required';
        }

        
        $validate =  $request->validate($rules, $message);

        $request['password'] = password_hash($request->password, PASSWORD_DEFAULT, ['cost' => 8]);
        $request['point'] = 100;
        $request['role_id'] = 2;
        $request['created_at'] = Carbon::now();
        User::create($request->except('_token', 'password_confirmation'));

        return redirect('/users/teacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = User::withTrashed()->with(['classroom', 'jurusan'])->findOrFail($id);
        if($teacher->role_id != 2){
            abort(404);
        }
        return view('admin.teacher.detail', ['teacher' => $teacher]);
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
        //
    }

    public function deleted()
    {
        $teacher = User::withTrashed()->where('role_id', 2);
        $count = User::onlyTrashed()->where('role_id', 2)->count();
        $tch = User::withTrashed()->where('role_id', 2)->take(3);
        return view('admin.teacher.softdelete', ['teacher' => $teacher, 'tch' => $tch, 'count' => $count]);
    }

    public function daerah()
    {
        $provinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json();
        // dd($provinsi);
        return response()->json($provinsi);

    }
}
