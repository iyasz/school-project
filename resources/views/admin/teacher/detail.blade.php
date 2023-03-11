@extends('layout.admin.app')

@section('tch-nav-index', 'active')
@section('tch-nav', 'active')

@section('content')

<div class="main-content">
  <section class="section">
  <div class="section-header">
      <h1>Profile : {{$teacher->name}} </h1>  
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/users/teacher">teacher</a></div>
        <div class="breadcrumb-item"> Detail </div>
      </div>
  </div>
  <div class="section-body">

    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-header">
            <img alt="image" src="@if($teacher->profil_img == NULL) /admin/assets/img/avatar/avatar-1.png @else {{$teacher->profil_img}} @endif" class="rounded-circle profile-widget-picture">
            <div class="profile-widget-items">
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Posts</div>
                <div class="profile-widget-item-value"></div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Created at</div>
                <div class="profile-widget-item-value">{{date('d M', strtotime($teacher->created_at))}}</div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Gender</div>
                <div class="profile-widget-item-value">@if($teacher->gender == 1) M @else W @endif</div>
              </div>
            </div>
          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">{{$teacher->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> teacher</div></div>
            Hi!, I Am <b>{{$teacher->name}}</b>, I am the teacher of SMK Bina Mandiri Multimedia school. I have been teaching at this school since <b>{{date('d M Y', strtotime($teacher->created_at))}}</b>.
          </div>
          <div class="card-footer text-center bg-whitesmoke"></div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
          <form method="post" class="needs-validation" novalidate="">
            <div class="card-header">
              <h4>Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Full Name</label>
                    <div class=""><b>{{$teacher->name}}</b></div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Username</label>
                    <div class=""><b>{{$teacher->username}}</b></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Email</label>
                    <div class=""><b>{{$teacher->email}}</b></div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Phone</label>
                    <div class=""><b>{{$teacher->no_telp}}</b></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Birthday / birthplace</label>
                    <div class=""><b>{{date('d M Y', strtotime($teacher->birthday))}} - {{$teacher->hometown}}</b></div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Hometeacher</label>
                    <div class=""><div class="badge badge-pill @if($teacher->is_hometeacher == 1)badge-danger @else badge-primary @endif ">@if($teacher->is_hometeacher == 1)Bukan @else Benar @endif</div></div>
                  </div>
                </div>

                @if($teacher->is_hometeacher == 2)
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Kelas</label>
                    <div class=""><b>{{$teacher->classroom->name}}</b></div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Jurusan</label>
                    <div class=""><b>{{$teacher->jurusan->name}}</b></div>
                  </div>
                </div>
                @endif
                
                <div class="row">
                  <div class="form-group col-12">
                    <label>Address</label>
                    <div class=""><b>{{$teacher->address}}</b></div>
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
              <a href="/users/teacher" class="btn btn-primary">Go Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>
</div>
@endsection