@extends('layout.admin.app')

@section('adm-nav-index', 'active')
@section('adm-nav', 'active')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Admin</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-12 col-sm-12">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Filter</h4>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="form-group">
                                        <label>Search</label>
                                        <input type="text" name="title" id="inputAdmin" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Per halaman</label>
                                        <div class="form-group">
                                            <select class="form-control" id="paginateSelect">
                                                <option selected disabled>Choose One</option>
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-9 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Latest Admin</h4>
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0" id="tableAdmin">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Nama</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="adminPageForeach">
                                            @foreach ($admin as $data)
                                                <tr>
                                                    <td>
                                                        Production Admin BM3
                                                        <div class="table-links">
                                                            in <a href="#">Web Development</a>
                                                            <div class="bullet"></div>
                                                            <a href="#">View</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="/users/admin/{{ $data->id }}"
                                                            class="font-weight-600"><img src="@if ($data->profil_img == null) /admin/assets/img/avatar/avatar-1.png @else {{ $data->profil_img }} @endif"
                                                                alt="avatar" width="30" class="rounded-circle mr-1">
                                                            {{ $data->name }}</a>
                                                    </td>
                                                    <td>
                                                          <button id="btnDeletedForm" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|Are you sure you want to remove {{ $data->name }}?. Do you want to continue?" data-confirm-yes="deletedForm(`{{ $data->id }}`)"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer pb-1 d-flex justify-content-end">
                                    <span id="footerPage">{{ $admin->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
