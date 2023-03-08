@extends('layout.admin.app')

@section('adm-nav-deleted', 'active')
@section('adm-nav', 'active')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Admin Deleted</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Deleted</h4>
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-danger">View More <i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive table-invoice">
                                    <table class="table table-striped mb-0">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Deleted At</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($admin as $data)             
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td class="font-weight-600"><a href="">{{$data->name}}</a></td>
                                         
                                            <td>{{ date("d M Y", strtotime($data->deleted_at)) }}</td>
                                            <td>
                                                <form class="d-inline" action="/users/admin/view/{{$data->id}}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Restore">Restore</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-hero">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="far fa-question-circle"></i>
                                </div>
                                <h4>{{$count}}</h4>
                                <div class="card-description">Total deleted admin</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="tickets-list">
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>My order hasn't arrived yet</h4>
                                        </div>
                                        <div class="ticket-info">
                                            <div>Laila Tazkiah</div>
                                            <div class="bullet"></div>
                                            <div class="text-primary">1 min ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Please cancel my order</h4>
                                        </div>
                                        <div class="ticket-info">
                                            <div>Rizal Fakhri</div>
                                            <div class="bullet"></div>
                                            <div>2 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Do you see my mother?</h4>
                                        </div>
                                        <div class="ticket-info">
                                            <div>Syahdan Ubaidillah</div>
                                            <div class="bullet"></div>
                                            <div>6 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="features-tickets.html" class="ticket-item ticket-more">
                                        View All <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
