@extends('layouts.backend.master')

@section('title', 'Tambah Data Muzakki — Zaqat')
@section('content')

    @push('timepicker-styles')
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/timepicker.css') }}">
    @endpush

    <div class="container-fluid">

        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">
                        Tambah Data Muzakki
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah form untuk tambah data muzakki.
                        <span class="d-none d-md-inline">
                            Data dibawah pastikan diisi dengan benar terutama nama lengkap karena nantinya akan diperlukan
                            untuk pembayaran zakat.
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Data Muzakki</h5>
                    </div>
                    <form method="POST" action="{{ route('muzakki.store') }}" enctype="multipart/form-data"
                        class="needs-validation">
                        @csrf
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>
                                            <h4>Ada error nih 😓</h4>
                                        </li>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-2">
                                    <label for="nama_matkul">Nama Lengkap Muzakki <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="nama_muzakki" type="text" class="form-control"
                                            value="{{ old('nama_muzakki') }}" name="nama_muzakki" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-2">
                                    <label for="nama_dosen">Nomor Kartu Keluarga <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="nomor_kk" type="text" class="form-control"
                                            value="{{ old('nomor_kk') }}" name="nomor_kk" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 mb-2">
                                    <label for="angkatan">Jumlah Tanggungan <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input required id="jumlah_tanggungan" type="text"
                                            value="{{ old('jumlah_tanggungan') }}" class="form-control"
                                            name="jumlah_tanggungan">
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="angkatan">Alamat <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input required id="alamat" type="text" value="{{ old('alamat') }}"
                                            class="form-control" name="alamat">
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="sks">Handphone</label>
                                    <div class="input-group mb-3">
                                        <input required id="handphone" type="number" value="{{ old('handphone') }}"
                                            class="form-control" name="handphone">
                                    </div>
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

    @push('timepicker-scripts')
        <script src="{{ url('cuba/assets/js/time-picker/jquery-clockpicker.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/time-picker/highlight.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/time-picker/clockpicker.js') }}"></script>
    @endpush

@endsection
