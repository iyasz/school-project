@extends('layout.admin.app')

@section('adm-nav-index', 'active')
@section('adm-nav', 'active')

@section('content')

<div class="main-content">
  <section class="section">
  <div class="section-header">
      <h1>Profile : {{$admin->name}} </h1>  
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/users/admin">Admin</a></div>
        <div class="breadcrumb-item">Admin Detail </div>
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
                <div class="profile-widget-item-label">Posts</div>
                <div class="profile-widget-item-value">187</div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Followers</div>
                <div class="profile-widget-item-value">6,8K</div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Following</div>
                <div class="profile-widget-item-value">2,1K</div>
              </div>
            </div>
          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">{{$admin->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Admin</div></div>
            Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
          </div>
          <div class="card-footer text-center">
            <div class="font-weight-bold mb-2">Follow Ujang On</div>
            <a href="#" class="btn btn-social-icon btn-facebook mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="btn btn-social-icon btn-twitter mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="btn btn-social-icon btn-github mr-1">
              <i class="fab fa-github"></i>
            </a>
            <a href="#" class="btn btn-social-icon btn-instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
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
                    <input type="text" class="form-control" value="{{$admin->name}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>Username</label>
                    <input type="text" class="form-control" value="{{$admin->username}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the last name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{$admin->email}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                  <div class="form-group col-md-5 col-12">
                    <label>Phone</label>
                    <input type="tel" class="form-control" required="" value="{{$admin->no_telp}}">
                  </div>
                </div>
                <label>*Optional</label>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Old Password</label>
                    <input type="text" class="form-control" required="">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>New Password</label>
                    <input type="tel" class="form-control" required="">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group mb-0 col-12">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                      <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                      <div class="text-muted form-text">
                        You will get new information about products, offers and promotions
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

      <div class="card">
      <div class="card-header">
          <h4>Example Card</h4>
      </div>
      <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="card-footer bg-whitesmoke">
          This is card footer
      </div>
      </div>
  </div>
  </section>
</div>
@endsection