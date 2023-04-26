@extends('layouts.backend.master')

@section('title', 'Update Data Distribusi Zakat — Collegetivity')
@section('content')

    @push('timepicker-styles')
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/timepicker.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            span.select2.select2-container.select2-container--classic {
                width: 100% !important;
            }

            .select2-container .select2-selection--single {
                border-color: #495057 !important;
            }
        </style>
    @endpush

    <div class="container-fluid">

        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">
                        Update Data Distribusi Zakat
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah form untuk update data distribusi zakat.
                        <span class="d-none d-md-inline">
                            Data dibawah pastikan anda isi dengan benar dan lengkap ya, nanti datanya masuk menjadi laporan
                            distribusi zakat.
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Data Distribusi Zakat</h5>
                    </div>
                    <form method="POST" action="{{ route('distribusi_zakat.update', $item->id) }}"
                        class="needs-validation">
                        @csrf
                        @method('PUT')
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
                                <div class="form-group col-12 mb-2">
                                    <label for="nama_matkul">Nama Lengkap Mustahik <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input readonly id="nama_mustahik" type="text" value="{{ $item->nama_mustahik }}"
                                            class="form-control" name="nama_mustahik">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="form-group col-md-12">
                                    <div class="alert alert-primary py-2" role="alert">
                                        Isi salah satu dari 2 form dibawah ini, jika memilih beras sebelumnya maka isi
                                        dengan
                                        satuan KG dan jika uang maka isi dengan nominal angka tanpa RP
                                    </div>
                                </div>
                                <div class="form-group col-md-4 mb-2">
                                    <label for="gender">Jenis Zakat <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect01" name="jenis_zakat">
                                            <option value="{{ $item->jenis_zakat }}" disabled selected>
                                                {{ $item->jenis_zakat }}</option>
                                            <option value="Beras">Beras</option>
                                            <option value="Uang">Uang</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="sks">Jumlah Beras <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="bayar_beras" type="number" value="{{ $item->jumlah_beras }}"
                                            class="form-control" name="jumlah_beras">
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="sks">Jumlah Uang <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="bayar_uang" type="number" value="{{ $item->jumlah_uang }}"
                                            class="form-control" name="jumlah_uang">
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


        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2({
                    theme: "classic",
                    width: 'resolve', // need to override the changed default
                    placeholder: "Pilih Muzakki yang Terdaftar",
                });
            });
        </script>
    @endpush

@endsection
