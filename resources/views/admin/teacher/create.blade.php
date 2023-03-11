@extends('layout.admin.app')

@section('tch-nav-create', 'active')
@section('tch-nav', 'active')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Teacher Create</h1>
            </div>
            <div class="section-body">
                <div id="output-status"></div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header">
                        <h4>Your Teacher</h4>
                      </div>
                      <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                          <li class="nav-item"><a href="#" class="nav-link active">Create</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Example</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Email</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">System</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Security</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Automation</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <form method="POST" action="/users/teacher">
                      @csrf
                      <div class="card" id="settings-card">
                        <div class="card-header">
                          <h4>Create Teacher</h4>
                        </div>
                        <div class="card-body">
                          <p class="text-muted">Perhatikan dalam pembuatan data teacher.</p>
                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Name</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="text" name="name" class="form-control">
                               @error('name')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>  
                          </div>
                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Email</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="text" name="email" class="form-control">
                              @error('email')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>
                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Username</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="text" name="username" class="form-control">
                              @error('username')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>
                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Phone Number</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="number" name="no_telp" class="form-control">
                              @error('no_telp')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>
                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Birthday</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="date" value="" name="birthday" class="form-control ">
                              @error('birthday')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>
                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Birthplace</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="text" id="birthplaceSearch" name="hometown" class="form-control">
                              @error('hometown')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                              <ul class="position-absolute bottom-0 " id="valueDaerah" style="z-index: 5">
                                <li>anime</li>
                                <li>anime</li>
                                <li>anime</li>
                              </ul>
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Hometeacher</label>
                            <div class="col-sm-6 col-md-9">
                                <select name="is_hometeacher" id="hometeacherValue" class=" form-control">
                                    <option disabled selected>Choose one</option>
                                    <option value="2">Benar</option>
                                    <option value="1">Bukan</option>
                                </select>
                              @error('is_hometeacher')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>
                          <div class="form-group row align-items-center hometeacherValid">
                            <label  class="form-control-label col-sm-3 text-md-right">Kelas</label>
                            <div class="col-sm-6 col-md-9">
                                <select name="classroom_id" class=" form-control">
                                    <option disabled selected>Choose one</option>
                                    @foreach ($kelas as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                              @error('classroom_id')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>
                          <div class="form-group row align-items-center hometeacherValid">
                            <label  class="form-control-label col-sm-3 text-md-right">Jurusan</label>
                            <div class="col-sm-6 col-md-9">
                                <select name="jurusan_id" class=" form-control">
                                    <option disabled selected>Choose one</option>
                                    @foreach ($jurusan as $jur)
                                    <option value="{{$jur->id}}">{{$jur->name}}</option>
                                    @endforeach
                                </select>
                              @error('jurusan_id')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="form-control-label col-sm-3 text-md-right">Gender</label>
                            <div class="col-sm-6 col-md-9">
                              <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                  <input type="radio" name="gender" value="1" class="selectgroup-input" >
                                  <span class="selectgroup-button selectgroup-button-icon"><i class='fas fa-male'></i></span>
                                </label>
                                <label class="selectgroup-item">
                                  <input type="radio" name="gender" value="2" class="selectgroup-input">
                                  <span class="selectgroup-button selectgroup-button-icon"><i class='fas fa-female'></i></span>
                                </label>
                              </div>
                              @error('gender')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>

                          {{-- <div class="form-group row align-items-center">
                            <label class="form-control-label col-sm-3 text-md-right">Select2 Multiple</label>
                            <div class="col-sm-6 col-md-9">
                              <select class="form-control select2" multiple="">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                                <option>Option 6</option>
                              </select>
                            </div>
                          </div> --}}
                          <div class="form-group row align-items-center ">
                            <label  class="form-control-label col-sm-3 text-md-right">Alamat</label>
                            <div class="col-sm-6 col-md-9">
                                <textarea name="address" class="form-control" ></textarea>
                              @error('address')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Password</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="text" name="password" class="form-control">
                              @error('password')<div class="invalid-feedback d-block"> {{$message}} </div>@enderror
                            </div>
                          </div>
                          <div class="form-group row align-items-center">
                            <label  class="form-control-label col-sm-3 text-md-right">Confirm Password</label>
                            <div class="col-sm-6 col-md-9">
                              <input type="text" name="password_confirmation" class="form-control">
                              {{-- <div class="invalid-feedback d-block"> Please fill the field </div> --}}
                            </div>
                          </div>
                        </div>
                        <div class="card-footer bg-whitesmoke text-md-right">
                          <button class="btn btn-primary" id="save-btn">Save Draft</button>
                          <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </section>
    </div>
@endsection
