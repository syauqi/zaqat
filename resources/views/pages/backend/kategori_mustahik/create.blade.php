@extends('layouts.backend.master')

@section('title', 'Tambah Data Kategori Mustahik — Zaqat')
@section('content')

    <!-- file wrapper for better tabs start-->
    <div>
        <!-- pages title header start-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="card card-absolute">
                    <div class="card-header bg-primary">
                        <h5 class="text-white">Tambah Data Kategori Mustahik</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            Dihalaman ini anda dapat menambah data kategori mustahik yang berlaku di DKM. Isi data dibawah
                            ini
                            dengan benar dan
                            seksama sesuai aturan yang ditulis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- pages title header end-->
        <!-- main content start-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Data Kategori Mustahik</h5>
                        </div>
                        <form method="POST" action="{{ route('kategori_mustahik.store') }}" enctype="multipart/form-data"
                            class="needs-validation" novalidate="">
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-row">
                                    <label for="exampleFormControlInput1">Nama Kategori <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input required type="text" class="form-control" name="nama_kategori"
                                            aria-describedby="basic-addon1">
                                    </div>

                                    <label for="exampleFormControlInput1">Jumlah hak <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input required type="integer" class="form-control" name="jumlah_hak"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary m-r-15" type="submit">Tambah</button>
                                <button class="btn btn-light" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content end-->
    </div>
    <!-- file wrapper for better tabs start-->
@endsection
