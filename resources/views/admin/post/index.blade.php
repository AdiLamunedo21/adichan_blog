@extends('layout.admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Post</h1>

    <a href="/post/created" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Post</a>
        {{-- table --}}
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Sampul</th>
                <th scope="col">Judul</th>
                <th scope="col">Author</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $row)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="/upload/post/{{$row->sampul}}" alt="" width="80px" height="80px"></td>
                    <td>{{$row->post_title}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>{{$row->created_at}}</td>
                    <td width="35%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('post.show', $row->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-eye"></i> Detail</a>
                            <a href="{{ route('post.edit', ['id' => $row->id]) }}" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                            <a href="/post/{{$row->id}}/delete" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection

