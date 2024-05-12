@extends('admin.layout.main')
@section('title', 'Data Artikel - ')
@section('content')
<div class="main-container container-fluid">


    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">DATA ARTIKEL </span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data tables</li>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div class="text-end m-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#AddModal" class="btn btn-primary">Tambah Data</a>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mt-2">



                        <?php

                            $nomer = 1;

                            ?>

                        @foreach($errors->all() as $error)
                        <li>{{ $nomer++ }}. {{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="table-responsive  export-table">
                        <table id="file-datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikel as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('artikel/image/'.$data->foto) }}" alt="" width="100">
                                    </td>
                                    <td>{{ $data->judul }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#IsiModal{{ $data->id }}" class="btn btn-warning btn-icon">
                                            <i class="fas fa-eye
                                        "></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#DetailModal{{ $data->id }}" class="btn btn-info btn-icon">
                                                <i class="fas fa-eye
                                        "></i>
                                            </a>
                                            <button class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#EditModal{{ $data->id }}">
                                                <a href="#" class="fas fa-pencil-alt"></a>
                                            </button>
                                            <button class="btn btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#DeleteModal{{ $data->id }}">
                                                <a href="#" class="fas fa-trash"></a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                {{-- Modal Detail --}}
                                <div class="modal fade" id="DetailModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Isi</h5>
                                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="" method="POST" enctype="multipart/form-data">

                                                <div class="modal-body">

                                                    <div class="">
                                                        <div class="text-center">
                                                            <img src="{{ asset('artikel/image/' . $data->foto) }}" alt="" width="50px" height="50px">
                                                        </div>
                                                        <h2>{{ $data->judul }}</h2>
                                                        <div class="mt-2 mb-2">
                                                            <p>{!! nl2br(e($data->isi)) !!}</p>

                                                        </div>
                                                        <div class="mt-2 mb-2">
                                                            <p>
                                                                Creator : {{ $data->user->name }}
                                                            </p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Detail Isi --}}
                                {{-- Modal Isi --}}
                                <div class="modal fade" id="IsiModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Isi</h5>
                                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="" method="POST" enctype="multipart/form-data">

                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Isi</label>
                                                        <textarea class="form-control" name="isi" rows="7" id="message-text">{{ $data->isi }}</textarea>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal Isi --}}
                                {{-- Modal Edit --}}
                                <div class="modal fade" id="EditModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="/data-artikel/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-4">
                                                        <label for="recipient-name" class="col-form-label">Upload Foto</label>
                                                        <input type="file" name="gambar" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Judul</label>
                                                        <input type="text" name="judul" value="{{ $data->judul }}" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Isi</label>
                                                        <textarea class="form-control" name="isi" rows="7" id="message-text">{{ $data->isi }}</textarea>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal Edit --}}

                                {{-- Modal Delete --}}
                                <div class="modal fade" id="DeleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="/data-artikel/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">

                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="mb-4">
                                                        <p>Anda Yakin Akan Menghapus Data {{ $data->judul }} ?</p>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal Delete --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- Modal Add --}}
                    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <form action="/data-artikel" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-body">


                                        <div class="mb-4">
                                            <label for="recipient-name" class="col-form-label">Upload Foto</label>
                                            <input type="file" name="gambar" class="form-control">

                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Judul</label>
                                            <input type="text" name="judul" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Isi</label>
                                            <textarea class="form-control" name="isi" rows="7" id="message-text"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Modal Add --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->




</div>
@endsection
