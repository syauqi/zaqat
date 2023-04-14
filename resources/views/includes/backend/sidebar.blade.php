<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main">
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn">
                    <a href="#">
                        <img class="img-fluid" src="#" alt="">
                    </a>
                    <div class="mobile-back text-right">
                        <span>Back</span>
                        <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="sidebar-main-title pt-0">
                    <div>
                        <h6>Halaman Utama</h6>
                        <p>Dashboard & Overview</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('dashboard')}}">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Data Warga</h6>
                        <p>Muzakki & Mustahik</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="book"></i>
                        <span>Data Muzakki</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li class="active">
                            <a href="{{url('/dashboard/jadwal-pelajaran')}}">
                                Master Data Muzakki
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/jadwal-pelajaran/atur-jadwal')}}">
                                Atur & Tambah Data Muzakki
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="edit"></i>
                        <span>Data Mustahik</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/catatan-pelajaran')}}">
                                Master Data Mustahik
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/catatan-pelajaran/tambah-catatan')}}">
                                Atur & Tambah Data Mustahik
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="image"></i>
                        <span>Kategori Mustahik</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/galeri-foto')}}">
                                Semua Kategori Mustahik
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/galeri-foto/tambah-foto')}}">
                                Tambah Kategori Mustahik
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Distribusi & Pengumpulan Zakat</h6>
                        <p>Pengumpulan & Distribusi Zakat</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="bookmark"></i>
                        <span>Pengumpulan Zakat</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/bookmarks')}}">
                                Data Pengumpulan Zakat Fitrah
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/bookmarks/tambah-bookmarks')}}">
                                Tambah Pengumpulan Zakat Fitrah
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="bookmark"></i>
                        <span>Distribusi Zakat</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/bookmarks')}}">
                                Data Distribusi Zakat Fitrah
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/bookmarks/tambah-bookmarks')}}">
                                Tambah Data Distribusi Zakat Fitrah
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-main-title">
                    <div>
                        <h6>Laporan Zakat Fitrah</h6>
                        <p>Laporan Distribusi & Pengumpulan</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/whiteboard')}}">
                        <i data-feather="clipboard"></i>
                        <span>Laporan Pengumpulan</span>
                    </a>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/whiteboard')}}">
                        <i data-feather="clipboard"></i>
                        <span>Laporan Distribusi</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Data Website</h6>
                        <p>Berita Acara & Galeri</p>
                    </div>
                </li>


                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="edit"></i>
                        <span>Artikel & Berita</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/catatan-pelajaran')}}">
                                Data Artikel
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/catatan-pelajaran/tambah-catatan')}}">
                                Tulis & Tambah Artikel Baru
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="image"></i>
                        <span>Galeri Foto</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/galeri-foto')}}">
                                Semua Galeri & Foto
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/galeri-foto/tambah-foto')}}">
                                Upload Foto Baru
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
