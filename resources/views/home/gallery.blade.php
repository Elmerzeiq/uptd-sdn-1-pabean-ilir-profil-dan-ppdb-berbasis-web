@extends('home.home_page')

@section('home')

<div class="breadcrumb-banner-area gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Gallery</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Gallery Area Start-->
<div class="gallery-area section-padding gallery-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-menu">
                    <ul>
                        <li class="filter" data-filter="all">Semua</li>
                        <li class="filter" data-filter=".kegiatan">Kegiatan</li>
                        <li class="filter" data-filter=".ekstrakurikuler">Extracurricular</li>
                        <li class="filter" data-filter=".prestasi">Prestasi</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="gallery-wrapper filter-items">
            <div class="row">

                @foreach($gallery as $item)
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items {{ strtolower($item->kategori) }} overlay-hover"
                    style="padding: 15px;">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ asset('uploads/images/' . $item->image) }}" alt="{{ $item->kategori }}"
                                class="gallery-img" /></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ url('uploads/images/' . $item->image) }}">
                                <i class="fa fa-search-plus"></i>
                            </a>
                            <span class="gallery-text">{{ $item->kategori }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!--End of Gallery Area-->

{{-- <!-- Gallery Fullwidth Area start -->
<div class="gallery-area section-padding gallery-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
    <div class="filter-menu">
        <ul>
            <li class="filter" data-filter="all">Semua</li>
            <li class="filter" data-filter=".kegiatan">Kegiatan</li>
            <li class="filter" data-filter=".extracurricular">Extracurricular</li>
            <li class="filter" data-filter=".prestasi">Prestasi</li>
        </ul>
    </div>
    </div>
        </div>

    <div class="gallery-wrapper filter-items">
        <div class="row no-gutters"> --}}

            {{-- @foreach($gallery as $galeri)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mix single-items {{ $galeri->kategori }} overlay-hover"
                style="padding: 10px;">
                <div class="overlay-effect sea-green-overlay">
                    <a href="#">
                        <img src="{{ asset('uploads/images/' . $galeri->image) }}" alt="{{ $galeri->kategori }}"
                            style="width: 100%; height: 200px; object-fit: cover;" /></a>
                    <div class="gallery-hover-effect">
                        <a class="gallery-icon venobox" href="{{ url('uploads/images/' . $galeri->image) }}"><i
                                class="fa fa-search-plus"></i></a>
                        <span class="gallery-text">{{ $galeri->kategori }}</span>
                    </div>
                </div>
            </div>
            @endforeach --}}

            {{-- <!-- Kegiatan Images -->
            @foreach($gallery as $galeri)
                @if($galeri->kategori === 'Kegiatan')
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mix single-items kegiatan overlay-hover">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ url('uploads/images/' . $galeri->image) }}" alt="" style="width: 100%; height: 380px; object-fit: cover;" /></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ url('uploads/images/' . $galeri->image) }}"><i class="fa fa-search-plus"></i></a>
                            <span class="gallery-text">Kegiatan</span>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

            <!-- Prestasi Images -->
            @foreach($gallery as $galeri)
                @if($galeri->kategori === 'Prestasi')
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items prestasi overlay-hover">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ url('uploads/images/' . $galeri->image) }}" alt="" style="width: 100%; height: 380px; object-fit: cover;" /></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ url('uploads/images/' . $galeri->image) }}"><i class="fa fa-search-plus"></i></a>
                            <span class="gallery-text">Prestasi</span>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

            <!-- Extracuriculer Images -->
            @foreach($gallery as $galeri)
                @if($galeri->kategori === 'Ekstrakurikuler')
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items extracurricular overlay-hover">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ url('uploads/images/' . $galeri->image) }}" alt="" style="width: 100%; height: 380px; object-fit: cover;" /></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ url('uploads/images/' . $galeri->image) }}"><i class="fa fa-search-plus"></i></a>
                            <span class="gallery-text">Extracurricular</span>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach


        </div>
    </div>
</div>
</div>
<!-- End of Gallery Fullwidth Area --> --}}

@endsection

