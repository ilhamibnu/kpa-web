@extends('admin.layout.main')
@section('title', 'Data Pengaduan - ')
@section('content')
<div class="main-container container-fluid">


    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">DATA Pengaduan </span>
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
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Jenis</th>
                                    <th>Subjek</th>
                                    <th>Isi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduan as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->no_telp }}</td>
                                    <td>{{ $data->kategoripelaporan->name }}</td>
                                    <td>{{ $data->subjek }}</td>
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
                                                        <h2>{{ $data->subjek }}</h2>

                                                        <div class="mb-2 mt-2">
                                                            <p>{!! nl2br(e($data->isi)) !!}</p>
                                                        </div>

                                                        <div class="mb-2 mt-2">
                                                            <p>
                                                                Kategori : {{ $data->kategoripelaporan->name }} <br>
                                                                Nama Pelapor : {{ $data->name }}
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
                                                        <label for="recipient-name" class="col-form-label">Subject</label>
                                                        <input type="text" name="subjek" value="{{ $data->subjek }}" class="form-control" id="recipient-name">
                                                    </div>

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
                                            <form action="/data-pengaduan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Name</label>
                                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="recipient-name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Email</label>
                                                        <input type="text" name="email" value="{{ $data->email }}" class="form-control" id="recipient-name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">No Telepon</label>
                                                        <input type="text" name="no_telp" value="{{ $data->no_telp }}" class="form-control" id="recipient-name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Jenis</label>
                                                        <select name="id_kategori_pelaporan" class="form-control" id="">
                                                            <option value="{{ $data->id_kategori_pelaporan }}" selected>{{ $data->kategoripelaporan->name }}</option>
                                                            @foreach ($kategori_pelaporan as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Subject</label>
                                                        <input type="text" name="subjek" value="{{ $data->subjek }}" class="form-control" id="recipient-name">
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
                                            <form action="/data-pengaduan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
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
                                <form action="/data-pengaduan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="recipient-name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Email</label>
                                            <input type="text" name="email" class="form-control" id="recipient-name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">No Telepon</label>
                                            <input type="text" name="no_telp" class="form-control" id="recipient-name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Jenis</label>
                                            <select name="id_kategori_pelaporan" class="form-control" id="">
                                                <option disabled selected value="">Pilih Kategori</option>
                                                @foreach ($kategori_pelaporan as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Subject</label>
                                            <input type="text" name="subjek" class="form-control" id="recipient-name">
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
