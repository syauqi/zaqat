@extends('layouts.backend.master')

@section('title', 'Laporan Pengumpulan Zakat — Zaqat')
@section('content')

    @push('datatable-styles')
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/scrollbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/datatables.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/datatable-extension.css') }}">
    @endpush

    <!-- file wrapper for better tabs start-->
    <div>
        <!-- pages title header start-->
        <div class="container-fluid">
            <div class="row" style="margin-top:14vh">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                                <div class="media-body"><span class="m-0">Total Muzakki</span>
                                    <h4 class="mb-0 counter">{{ DB::table('muzakki')->count() }}</h4><i class="icon-bg"
                                        data-feather="user-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="users"></i></div>
                                <div class="media-body"><span class="m-0">Total Jiwa</span>
                                    <h4 class="mb-0 counter">{{ DB::table('mustahik')->count() }}</h4><i class="icon-bg"
                                        data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                                <div class="media-body"><span class="m-0">Total Beras</span>
                                    <h4 class="mb-0 counter">{{ $totalBeras }}</h4><i class="icon-bg"
                                        data-feather="message-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="dollar-sign"></i></div>
                                <div class="media-body"><span class="m-0">Total Uang</span>
                                    <h4 class="mb-0 counter">{{ $totalUang }}</h4><i class="icon-bg"
                                        data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
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
                            <h5>Laporan Pengumpulan Zakat</h5>
                        </div>
                        <div class="card-body">
                            <div class="dt-ext table-responsive">
                                <table class="display" id="export-button">
                                    <thead>
                                        <tr>
                                            <th>Nama Muzzaki</th>
                                            <th>Jenis Bayar</th>
                                            <th>Jml Tanggungan Dibayar</th>
                                            <th>Bayar Beras</th>
                                            <th>Bayar Uang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex py-1 align-items-center">
                                                        <div class="avatars mr-2">
                                                            <div class="avatar ratio"><img
                                                                    style="object-fit: cover;
                                            width: 40px;
                                            height: 40px;"
                                                                    class="b-r-8"
                                                                    src="https://ui-avatars.com/api/?background=5a983f&color=fff&name={{ $item->nama_muzakki }}">
                                                            </div>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="font-weight-bold">{{ $item->nama_muzakki }}</div>
                                                            <div class="text-muted">Tanggungan: &nbsp;<a href="#"
                                                                    class="text-reset">{{ $item->jumlah_tanggungan }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $item->jenis_bayar }}</td>
                                                <td>{{ $item->jumlah_tanggungandibayar }}</td>
                                                <td>{{ $item->bayar_beras ?? '-' }}</td>
                                                <td>{{ $item->bayar_uang ?? '-' }}</td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Muzzaki</th>
                                            <th>Jenis Bayar</th>
                                            <th>Jml Tanggungan Dibayar</th>
                                            <th>Bayar Beras</th>
                                            <th>Bayar Uang</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content end-->
    </div>
    <!-- file wrapper for better tabs start-->

    @push('datatable-scripts')
        <script src="{{ url('cuba/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/datatable/datatable-extension/custom.js') }}"></script>
        <script src="{{ url('cuba/assets/js/tooltip-init.js') }}"></script>
    @endpush

@endsection
