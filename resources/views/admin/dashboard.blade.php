@extends('layout.admin')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <!-- Content Row -->
    <!-- Earnings (Monthly) Card Example -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Post</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_post}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-file fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>


    {{-- post --}}

    <div class="card border-bottom-primary">
        <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Post Hari Ini</h6>
        </div>
        <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Author</th>
                        <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $row)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><img src="/upload/post/{{$row->sampul}}" alt="" width="80px" height="80px"></td>
                            <td>{{$row->post_title}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>

@stop
