<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('home.css')
    <!-- Mobile Menu Area end -->
</head>

<body>
    @include('home.header_ppdb')
    <!--End of Header Area-->
    @include('home.ppbdslider')

    <br>
    <br>

    <!-- Add flash messages after head -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <br>
    <br>
    <!-- Cara Pendaftaran -->
    <div class="container">
        <div class="section-title-wrapper">
            <div id="jadwalpendaftaran" class="section">
                <div class="section-title">
                    <h3>Jadwal Pendaftaran </h3>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <!-- Jadwal Pendaftaran (Center) -->
            <div class="col-lg-8 col-md-12">
                <div class="card-pendaftaran"
                    style="border: 2px solid #8cd39e; background-color: #eaf4ff; padding: 20px; margin-bottom: 30px;">
                    <h3 style="color: #8cd39e; text-align: center;">JADWAL PENDAFTARAN</h3>
                    <ul class="steps" style="text-align: center;">
                        <li>
                            <span style="font-weight: bold; color: #8cd39e;">Pendaftaran</span>
                            <b> : 25 Agustus 2024 s/d 15 September 2024</b>
                        </li>
                        <li>
                            <span style="font-weight: bold; color: #8cd39e;">Pengumuman</span>
                            <b> : 18 September 2024</b>
                        </li>
                        <li>
                            <span style="font-weight: bold; color: #8cd39e;">Daftar Ulang</span>
                            <b> : 19 s/d 20 September 2024</b>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <br>
    <br>

    <!--informasi quota pendaftar-->
    <div id="statistik" class="section fun-factor-area fun-factor-four">
        <div class="container">
            <div class="section-title">
                <!-- ...existing code... -->
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="text-center single-fun-factor">
                        <h2><span class="counter">300</span></h2>
                        <span>Data Pendaftar</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="text-center single-fun-factor">
                        <h2><span class="counter">400</span></h2>
                        <span>Quota Pendaftar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br> <br>

    <!--Pengumuman PPBD-->
    <div class="hiring-section">
        <img src="img/slider/nav1.jpg" alt="We're Hiring" class="background-image">
        <div class="overlay">
            <div class="content">
                <h1>Sudah Punya Akun? Silahkan Login</h1>
                <h2>Login disini untuk melengkapi formulir pendaftaran</h2>
                <a href="{{ route('siswa.login') }}" class="job-link">Login &rarr;</a>
            </div>
        </div>
    </div>

    <br>
    <br>

    <br>
    <br>

    <!-- Cara Pendaftaran -->
    <div class="container">
        <div class="section-title-wrapper">
            <div id="carapendaftaran" class="section">
                <div class="section-title">
                    <h3>Cara Pendaftaran & Pengumuman</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Cara Pendaftaran (Left) -->
            <div class="col-lg-6 col-md-12">
                <div class="card-pendaftaran"
                    style="border: 2px solid #007bff; background-color: #eaf4ff; padding: 20px; margin-bottom: 30px;">
                    <h3 style="color: #0056b3;">CARA PENDAFTARAN</h3>
                    <ul class="steps">
                        <li>
                            <span style="font-weight: bold; color: #007bff;">1</span>
                            <b>CALON SISWA MENDAFTAR DI WEB PENDAFTARAN</b>
                            <a href="{{ route('siswa.register')  }}" class="button button-blue"
                                style="color: white; background-color: #007bff; padding: 5px 10px; border-radius: 4px;">KLIK
                                DISINI</a>
                        </li>
                        <li>
                            <span style="font-weight: bold; color: #007bff;">2</span>
                            <b>JIKA SELESAI PENDAFTARAN SILAHKAN LOGIN DENGAN USERNAME DAN PASSWORD SAAT PENDAFTARAN</b>
                            <a href="{{ route('siswa.login') }}" class="button button-green"
style="color: white; background-color: #28a745; padding: 5px 10px; border-radius: 4px;">LOGIN
                                DISINI</a>
                        </li>
                        <li>
                            <span style="font-weight: bold; color: #007bff;">3</span>
                            <b>LENGKAPI FORMULIR YANG DIBERIKAN DENGAN DATA YANG BENAR.</b>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pengumuman PPDB -->
            <div class="col-lg-6 col-md-12">
                <div class="card-pengumuman"
                    style="border: 2px solid #ffc107; background-color: #fffbea; padding: 20px; margin-bottom: 30px;">
                    <h3 style="color: #ff9500;">PENGUMUMAN PPDB</h3>
                    <div class="announcement">
                        @if($pengumuman->isNotEmpty())
                        @foreach($pengumuman as $item)
                        <p><strong>{!! $item->judul !!}</strong></p>
                        <p><strong>{{ $item->tanggal ?? 'Tanggal belum tersedia' }}</strong></p>
                        <p>{!! $item->isi !!}</p>
                        @endforeach
                        @else
                        <p><strong>Belum ada pengumuman</strong></p>
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    @include('home.body.footer')

</body>

</html>


