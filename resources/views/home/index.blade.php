@extends('home.home_page')
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

@section('home')
<!-- Main Content -->
@include('home.main_banner')
<br>
<br>
	<br>
	<!--About Area Start-->
	<div class="about-area section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Tentang Kami</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text-container" >
                        <h2><b>Visi</b></h2>
                        <p>{!! $profil ? $profil->visi : '-' !!}</p>
                        <h2><b>Misi</b></h2>
                        <p>{!! $profil ? $profil->misi : '-' !!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-image">
                        <img src="{{ $profil ? url('uploads/images/' . $profil->image) : '' }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="fun-factor-area fun-factor-four">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="text-center single-fun-factor">
                    <h2><span class="counter">{!! $profil ? $profil->jml_guru : '-' !!}</span></h2>
                    <span>Teacher</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="text-center single-fun-factor">
                    <h2><span class="counter">{!! $profil ? $profil->jml_staff : '-' !!}</span></h2>
                    <span>Staff</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="text-center single-fun-factor">
                    <h2><span class="counter">{!! $profil ? $profil->jml_siswa : '-' !!}</span></h2>
                    <span>Students</span>
                </div>
            </div>
        </div>
    </div>
</div>


	    <br> <br>


<div class="hiring-section">
    <img src="img/banner/bg1.jpg" alt="We're Hiring" class="background-image">
    <div class="overlay">
        <div class="content">
            <h1>Penerimaan Siswa Baru</h1>
            <h2>Kami membuka penerimaan siswa baru untuk tahun ajaran 2025/2026. Bergabunglah dengan kami untuk
                mendapatkan pendidikan terbaik.</h2>
            <a href="{{ route('ppbdinfo') }}" class="job-link">Lihat informasi pendaftaran &rarr;</a>
        </div>
    </div>
</div>


	   <!-- End of Hiring Section -->
    <div class="teachers-column-carousel-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Guru Kami</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--Teachers Column Carousel-->
            <div class="teachers-column-carousel carousel-style-one owl-carousel">
                @foreach($staffs as $staff)
                @if($staff->kategori === 'guru')
                <div class="text-center single-teachers-column">
                    <div class="teachers-image-column">
                        <img src="{{ $staff->image ? url('uploads/images/' . $staff->image) : '' }}" alt="" />
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>{{ $staff->nama }}</h4>
                        <p>{{ $staff->jabatan }}</p>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <br>

<!-- Gallery Fullwidth Area Start -->
<div class="gallery-area gallery-fullwidth section-padding-bottom">
    <div class="section-title-wrapper">
        <div class="section-title">
            <h3>Galeri Kami</h3>
            <p>Temukan Galeri Foto Kami</p>
        </div>
    </div>

    <!-- Filter Menu -->
    <div class="filter-menu">
        <ul>
            <li class="filter" data-filter="all">Semua</li>
            <li class="filter" data-filter=".kegiatan">Kegiatan</li>
            <li class="filter" data-filter=".ekstrakurikuler">Extracurricular</li>
            <li class="filter" data-filter=".prestasi">Prestasi</li>
        </ul>
    </div>

    <!-- Gallery Wrapper -->
    <div class="gallery-wrapper filter-items">
        <div class="row">

            @foreach($gallery as $galeri)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items {{ strtolower($galeri->kategori) }} overlay-hover"
                style="padding: 15px;">
                <div class="overlay-effect sea-green-overlay">
                    <a href="#">
                        <img src="{{ asset('uploads/images/' . $galeri->image) }}" alt="{{ $galeri->kategori }}"
                            class="gallery-img" />
                    </a>
                    <div class="gallery-hover-effect">
                        <a class="gallery-icon venobox" href="{{ url('uploads/images/' . $galeri->image) }}">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <span class="gallery-text">{{ ucfirst($galeri->kategori) }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End of Gallery Fullwidth Area -->

    <!-- Blog Area Start -->
    <div class="blog-area section-padding-bottom blog-style-three">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Berita</h3>
                            <p>Berita &amp; acara terbaru dari sekolah kami</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-carousel carousel-style-one owl-carousel">
                @foreach ($beritas as $item)
                <div class="text-center border single-blog-item overlay-hover">
                    <div class="single-blog-image">
                        <div class="overlay-effect">
                            <a href="{{ route('berita.show', $item->id) }}">
                                <img src="{{ asset('uploads/images/'.$item->image) }}" alt="" style="width: 100%; height: 380px; object-fit: cover;" />
                                <span class="date">{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="single-blog-text">
                        <h4>
                            <a href="{{ route('berita.show', $item->id) }}">{{ $item->judul }}</a>
                        </h4>

                        <p>{!! Str::limit($item->deskripsi, 200) !!}</p>

                        <a href="{{ route('berita.show', $item->id) }}">Read more.</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End of Blog Area -->

<!-- Google Map Area Start -->
<div class="google-map-area">
    <!-- Map Section -->
    <div id="contacts" class="map-area">
        <div id="googleMap"
            style="width: 100%; height: 451px; border:0; overflow:hidden; max-width:100vw; max-height:100vh;"
            onload="if (window.innerWidth > 768) {
                this.style.height = '100vh';
            }">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.282391861136!2d108.29704258715823!3d-6.287297399999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebb761417a7f7%3A0x83e6d224415663a5!2sSDN%201%20Pabean%20Ilir!5e0!3m2!1sid!2sid!4v1744996862592!5m2!1sid!2sid"
                width="100%" height="451" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- End of Google Map Area -->

@endsection
