@section('sidebar')
    <nav class="sidebar sidebar-offcanvas " id="sidebar">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <i class="ti-dashboard menu-icon"></i>
                    <span class="menu-title">Dashboard Utama</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#berita" aria-expanded="false" aria-controls="galeri">
                    <i class="ti-notepad menu-icon"></i>
                    <span class="menu-title">Berita</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="berita">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">List Berita</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#galeri" aria-expanded="false" aria-controls="galeri">
                    <i class="ti-gallery menu-icon"></i>
                    <span class="menu-title">Galeri</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="galeri">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Foto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Video</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="ti-agenda menu-icon"></i>
                    <span class="menu-title">Informasi Publik</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="ti-stamp menu-icon"></i>
                    <span class="menu-title">Regulasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="ti-envelope menu-icon"></i>
                    <span class="menu-title">Pesan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="ti-arrow-circle-left menu-icon"></i>
                    <span class="menu-title">Halaman Utama</span>
                </a>
            </li>

        </ul>
    </nav>
@endsection
