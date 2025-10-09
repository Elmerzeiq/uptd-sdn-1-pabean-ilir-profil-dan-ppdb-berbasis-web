<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class=" sidebar-brand">
            {{ Auth::user()->name }}
            <br>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="sidebar-body">
        <ul class="nav">

            <li class="nav-item nav-category">Home</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">Data</li>

            <li class="nav-item">
                <a href="{{ route('profil.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="folder"></i>
                    <span class="link-title">Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('staff.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Staff</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('gallery.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="aperture"></i>
                    <span class="link-title">Gallery</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('berita.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Berita</span>
                </a>
            </li>

            {{-- <li class="nav-item {{ request()->is('admin/ekskul*') ? 'active' : '' }}">
                <a href="{{ route('ekskul.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="hexagon"></i>
                    <span class="link-title">Ekskul</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('akademik.index') }}" class="nav-link">   
                    <i class="link-icon" data-feather="book-open"></i>
                    <span class="link-title">Akademik</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('guru.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Guru</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('kalender.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Kalender Akademik</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ekskulMenu" role="button" aria-expanded="false"
                    aria-controls="ekskulMenu">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Ekskul</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="ekskulMenu">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('ekskul.index') }}" class="nav-link">Ekskul</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ekskul_detail.index') }}" class="nav-link">Ekskul Detail</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="{{ route('pengumuman.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Pengumuman</span>
                </a>
            </li>
            {{-- <li class="nav-item {{ request()->is('admin/ekskul_detail*') ? 'active' : '' }}">
                <a href="{{ route('ekskul_detail.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="info"></i>
                    <span class="link-title">Ekskul Detail</span>
                </a>
            </li> --}}
            <li class="nav-item nav-category">PPDB</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ppdbData" role="button" aria-expanded="false"
                    aria-controls="ppdbData">
                    <i class="link-icon" data-feather="folder"></i>
                    <span class="link-title">Data PPDB</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="ppdbData">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('formulir.index') }}" class="nav-link">Semua Data</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Daftar Berkas</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">Data Diterima</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Ditolak/Cadangan</a>
                        </li> --}}
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#printMenu" role="button" aria-expanded="false"
                    aria-controls="printMenu">
                    <i class="link-icon" data-feather="printer"></i>
                    <span class="link-title">Cetak</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="printMenu">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Data Penerimaan PPDB</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#accountMenu" role="button" aria-expanded="false"
                    aria-controls="accountMenu">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Akun</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="accountMenu">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Akun Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Akun Siswa</a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="nav-item">
                <a href="{{ route('logout') }}" class="text-body ms-0"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="me-2 icon-md" data-feather="log-out"></i>
                    <span>Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
