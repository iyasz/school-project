@extends('layout.main')
@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card mx-1">
                    <form action="/login" method="post">
                        @csrf
                        <div class="card-body mx-2">
                            <div class="mb-3">
                                <label class="mb-2">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="">
                                <button class="btn btn-primary w-100">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
    