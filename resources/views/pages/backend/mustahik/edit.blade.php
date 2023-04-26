@extends('layouts.backend.master')

@section('title', 'Update Data Mustahik — Zaqat')
@section('content')

    @push('timepicker-styles')
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/timepicker.css') }}">
    @endpush

    <div class="container-fluid">

        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">
                        Update Data Mustahik
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah form untuk update data mustahik.
                        <span class="d-none d-md-inline">
                            Data dibawah pastikan anda isi dengan benar dan lengkap ya, nanti datanya akan digunakan untuk
                            pendistribusian zakat.
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Data Mustahik</h5>
                    </div>
                    <form method="POST" action="{{ route('mustahik.update', $item->id) }}" enctype="multipart/form-data"
                        class="needs-validation">
                        @method('PUT')
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
                                    <label for="nama_matkul">Nama Lengkap Mustahik <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="nama_mustahik" type="text" class="form-control"
                                            value="{{ $item->nama_mustahik }}" name="nama_mustahik" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-2">
                                    <label for="nama_dosen">Nomor Kartu Keluarga <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="nomor_kk" type="text" class="form-control"
                                            value="{{ $item->nomor_kk }}" name="nomor_kk" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 mb-2">
                                    <label for="hari">Kategori Mustahik <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="kategori_mustahik" name="kategori_mustahik">
                                            @foreach ($kategori as $kategori)
                                                <option value="{{ $kategori->nama_kategori }}">
                                                    {{ $kategori->nama_kategori }} —
                                                    ({{ $kategori->jumlah_hak }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="angkatan">Jumlah Hak <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input required id="jumlah_hak" type="text" value="{{ $item->jumlah_hak }}"
                                            class="form-control" name="jumlah_hak">
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="sks">Handphone</label>
                                    <div class="input-group mb-3">
                                        <input required id="handphone" type="text" value="{{ $item->handphone }}"
                                            class="form-control" name="handphone">
                                    </div>
                                </div>

                                <div class="form-group col-md-12   mb-2">
                                    <label for="angkatan">Alamat <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input required id="alamat" type="text" value="{{ $item->alamat }}"
                                            class="form-control" name="alamat">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary m-r-15" type="submit">Update</button>
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
