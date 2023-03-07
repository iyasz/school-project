@extends('layout.admin.app')

@section('dsh-act', 'active')

@section('content')

    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            {{-- <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
            </div> --}}
        </div>
        <div class="section-body">
            {{-- <h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>
             --}}
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                      <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Total Admin</h4>
                      </div>
                      <div class="card-body">
                        {{$CountAdm}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                      <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Total Guru</h4>
                      </div>
                      <div class="card-body">
                        {{$CountTeacher}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                      <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Total Siswa</h4>
                      </div>
                      <div class="card-body">
                        {{$CountStudent}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                      <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Online Users</h4>
                      </div>
                      <div class="card-body">
                        47
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-stats">
                      <div class="card-stats-title">Order Statistics -
                        <div class="dropdown d-inline">
                          <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                          <ul class="dropdown-menu dropdown-menu-sm">
                            <li class="dropdown-title">Select Month</li>
                            <li><a href="#" class="dropdown-item">January</a></li>
                            <li><a href="#" class="dropdown-item">February</a></li>
                            <li><a href="#" class="dropdown-item">March</a></li>
                            <li><a href="#" class="dropdown-item">April</a></li>
                            <li><a href="#" class="dropdown-item">May</a></li>
                            <li><a href="#" class="dropdown-item">June</a></li>
                            <li><a href="#" class="dropdown-item">July</a></li>
                            <li><a href="#" class="dropdown-item active">August</a></li>
                            <li><a href="#" class="dropdown-item">September</a></li>
                            <li><a href="#" class="dropdown-item">October</a></li>
                            <li><a href="#" class="dropdown-item">November</a></li>
                            <li><a href="#" class="dropdown-item">December</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-stats-items">
                        <div class="card-stats-item">
                          <div class="card-stats-item-count">24</div>
                          <div class="card-stats-item-label">Pending</div>
                        </div>
                        <div class="card-stats-item">
                          <div class="card-stats-item-count">12</div>
                          <div class="card-stats-item-label">Shipping</div>
                        </div>
                        <div class="card-stats-item">
                          <div class="card-stats-item-count">23</div>
                          <div class="card-stats-item-label">Completed</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                      <i class="fas fa-archive"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Total Orders</h4>
                      </div>
                      <div class="card-body">
                        59
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-chart">
                      <canvas id="balance-chart" height="80"></canvas>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                      <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Balance</h4>
                      </div>
                      <div class="card-body">
                        $187,13
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-chart">
                      <canvas id="sales-chart" height="80"></canvas>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                      <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Sales</h4>
                      </div>
                      <div class="card-body">
                        4,732
                      </div>
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