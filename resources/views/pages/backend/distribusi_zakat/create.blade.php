@extends('layouts.backend.master')

@section('title', 'Atur Jadwal Pelajaran — Collegetivity')
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
                        📅📚 • Atur Jadwal Pelajaran
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah form untuk tambah jadwal pelajaran mata kuliahmu.
                        <span class="d-none d-md-inline">
                            Data dibawah pastikan kamu isi dengan benar dan lengkap ya, nanti datanya akan kami simpan
                            dan dapat kamu akses dimana saja dan kapan saja.
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
                    <form method="POST" action="{{ route('distribusi_zakat.store') }}" enctype="multipart/form-data"
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
                                <div class="form-group col-12 mb-2">
                                    <label for="nama_matkul">Nama Lengkap Muzakki <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="js-example-basic-single" name="nama_mustahik">
                                            <option></option>
                                            @foreach ($items as $item)
                                                <option value="{{ $item->nama_mustahik }}">{{ $item->nama_mustahik }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-4">

                                <div class="form-group col-md-4 mb-2">
                                    <label for="gender">Jenis Zakat <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-man" width="20" height="20"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <circle cx="12" cy="5" r="2"></circle>
                                                    <path d="M10 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5">
                                                    </path>
                                                </svg></label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="jenis_zakat">
                                            <option value="" disabled selected>Pilih ...</option>
                                            <option value="Beras">Beras</option>
                                            <option value="Uang">Uang</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="sks">Jumlah Beras <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-list-numbers" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M11 6h9"></path>
                                                    <path d="M11 12h9"></path>
                                                    <path d="M12 18h8"></path>
                                                    <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4"></path>
                                                    <path d="M6 10v-6l-2 2"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <input id="bayar_beras" type="number" value="{{ old('bayar_beras') }}"
                                            class="form-control" name="jumlah_beras">
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label for="sks">Jumlah Uang <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-list-numbers" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M11 6h9"></path>
                                                    <path d="M11 12h9"></path>
                                                    <path d="M12 18h8"></path>
                                                    <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4"></path>
                                                    <path d="M6 10v-6l-2 2"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <input oninput="formatRupiah(this)" id="bayar_uang" type="text"
                                            value="{{ old('bayar_uang') }}" class="form-control" name="jumlah_uang">
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
