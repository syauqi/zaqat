@extends('layouts.backend.master')

@section('title', 'Data Muzakki — Zaqat')
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
            <div class="page-title">
                <div class="card card-absolute">
                    <div class="card-header bg-primary">
                        <h5 class="text-white">Data Muzakki</h5>
                    </div>
                    <div class="card-body">
                        <p>Dibawah ini adalah data muzakki yang telah anda tambahkan. Muzakki adalah orang yang mempunyai
                            kewajiban membayar zakat fitrah sesuai dengan nisab nya. Data dibawah juga bisa anda
                            lihat detailnya dengan menekan logo mata berwarna hijau, edit dengan menekan logo pencil
                            berwarna ungu dan hapus dengan menekan logo sampah berwarna merah
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
                        <div class="card-body">
                            <div class="dt-ext table-responsive">
                                <table class="display" id="auto-fill">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Muzzaki</th>
                                            <th>Jumlah Tanggungan</th>
                                            <th>Alamat</th>
                                            <th>Nomor Telepon</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
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
                                                            <div class="text-muted"><a href="#"
                                                                    class="text-reset">{{ $item->nomor_kk }}</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $item->jumlah_tanggungan }}</td>
                                                <td> {{ substr(strip_tags(htmlspecialchars_decode($item->alamat)), 0, 60) }}
                                                    ...
                                                </td>
                                                <td>{{ $item->handphone }}</td>
                                                <td>
                                                    <a href="{{ route('muzakki.edit', $item->id) }}"
                                                        class="btn btn-info px-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-edit" width="16"
                                                            height="16" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3">
                                                            </path>
                                                            <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3">
                                                            </path>
                                                            <line x1="16" y1="5" x2="19"
                                                                y2="8"></line>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('muzakki.destroy', $item->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger px-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-trash" width="16"
                                                                height="16" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <line x1="4" y1="7" x2="20"
                                                                    y2="7"></line>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                </path>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Muzzaki</th>
                                            <th>Jumlah Tanggungan</th>
                                            <th>Keterangan</th>
                                            <th>Opsi</th>
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
