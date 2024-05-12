@extends('admin.layout.main')
@section('title', 'Data Kategori Pelaporan - ')
@section('content')
<div class="main-container container-fluid">


    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">DATA Kategori Pelaporan </span>
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
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori_pelaporan as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#EditModal{{ $data->id }}">
                                                <a href="#" class="fas fa-pencil-alt"></a>
                                            </button>
                                            <button class="btn btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#DeleteModal{{ $data->id }}">
                                                <a href="#" class="fas fa-trash"></a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Modal Edit --}}
                                <div class="modal fade" id="EditModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="/data-kategori-pelaporan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Name</label>
                                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="recipient-name">
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
                                            <form action="/data-kategori-pelaporan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">

                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="mb-4">
                                                        <p>Anda Yakin Akan Menghapus Data {{ $data->name }} ?</p>
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
                                <form action="/data-kategori-pelaporan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-body">


                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="recipient-name">
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
