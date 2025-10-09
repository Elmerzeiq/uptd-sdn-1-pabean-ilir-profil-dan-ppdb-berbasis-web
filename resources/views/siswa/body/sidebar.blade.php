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
            <a href="{{ route('siswa.dashboard') }}" class="nav-link">
                <i class="link-icon" data-feather="home"></i>
                <span class="link-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="folder"></i>
                    <span class="link-title">Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title">Log Out</span>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a href="{{ route('logout') }}" class="text-body ms-0"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="me-2 icon-md" data-feather="log-out"></i>
                    <span>Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li> --}}

            <li class="nav-item nav-category">Siswa Baru</li>
            <li class="nav-item">
                <a href="{{ route('formulir.create') }}" class="nav-link">
                    <i class="link-icon" data-feather="folder"></i>
                    <span class="link-title">Formulir</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('siswa/formulir/create*') || request()->is('siswa/berkas/create*') ? '' : 'disabled' }}">
                <a href="{{ route('berkas.create') }}" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Upload Berkas</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="aperture"></i>
                    <span class="link-title">Cetak Kartu Pendaftaran</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('siswa.pengumuman') }}" class="nav-link">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Pengumuman</span>
                </a>
            </li>






        </ul>
    </div>
</nav>
