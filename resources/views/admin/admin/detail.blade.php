@extends('layout.admin.app')

@section('adm-nav', 'active')

@section('content')

<div class="main-content">
  <section class="section">
  <div class="section-header">
      <h1>Profile : {{$admin->name}} </h1>  
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/users/admin">Admin</a></div>
        <div class="breadcrumb-item"> Detail </div>
      </div>
  </div>
  <div class="section-body">

    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-header">
            <img alt="image" src="@if($admin->profil_img == NULL) /admin/assets/img/avatar/avatar-1.png @else {{$admin->profil_img}} @endif" class="rounded-circle profile-widget-picture">
            <div class="profile-widget-items">
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Status</div>
                <div class="profile-widget-item-value"><div class=""><div class="badge badge-pill @if($admin->deleted_at)badge-danger @else badge-primary @endif ">@if($admin->deleted_at)Deleted @else Active @endif</div></div></div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Created at</div>
                <div class="profile-widget-item-value">{{date('d M', strtotime($admin->created_at))}}</div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Gender</div>
                <div class="profile-widget-item-value">@if($admin->gender == 1) M @else W @endif</div>
              </div>
            </div>
          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">{{$admin->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Admin</div></div>
            Hi!, I Am <b>{{$admin->name}}</b>, I am the admin of SMK Bina Mandiri Multimedia school. i am preparing to develop this website as <b>admin</b>.
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
                    <div class=""><b>{{$admin->name}}</b></div>
                    {{-- <input type="text" class="form-control" value="{{$admin->name}}" > --}}
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Username</label>
                    <div class=""><b>{{$admin->username}}</b></div>
                    {{-- <input type="text" class="form-control" value="{{$admin->username}}" > --}}
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Email</label>
                    <div class=""><b>{{$admin->email}}</b></div>
                    {{-- <input type="email" class="form-control" value="{{$admin->email}}" > --}}
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Phone</label>
                    <div class=""><b>{{$admin->no_telp}}</b></div>
                    {{-- <input type="tel" class="form-control"  value="{{$admin->no_telp}}"> --}}
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
              <a href="/users/admin" class="btn btn-primary">Go Back</a>
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