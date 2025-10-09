@extends('home.home_page')

@section('home')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Ekstrakurikuler</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li>Ekstrakurikuler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!-- Blog Detail Area -->
<div class="blog-details-area section-padding blog-two">
    <div class="container">
        <div class="row">
            <!-- Detail Ekstrakurikuler -->
            <div class="col-xl-9 col-lg-8">
                <div class="blog-post-wrapper">
                    @if($ekskul->first())
                    <div class="blog-post-details">
                        <h1>{!! $ekskul->first()->judul !!}</h1>
                        <span>
                            <i class="fa fa-calendar"></i> {{
                            \Carbon\Carbon::parse($ekskul->first()->tanggal)->format('d F, Y') }} / By: Admin
                        </span>
                    </div>
                    <div class="blog-post-details-img">
                        <img src="{{ asset('uploads/images/' . $ekskul->first()->image) }}" class="card-img-top" alt="{{ $ekskul->first()->judul }}">
                        <div class="blog-post-content">
                            <br>
                            <h4>{!! $ekskul->first()->deskripsi !!}</h4>
                            <p>{!! $ekskul->first()->isi !!}</p>
                        </div>
                    </div>
                    @endif


        <!--Gallery Area Start-->
        <div class="gallery-area section-padding gallery-full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul>
                                <li class="filter" data-filter="all">Semua</li>
                                @foreach($ekskul_detail->unique('kategori') as $item)
                                <li class="filter" data-filter=".{{ strtolower($item->kategori) }}">{{ ucwords($item->kategori)
                                    }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="gallery-wrapper filter-items">
                    <div class="row no-gutters">
                        @foreach($ekskul_detail as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items {{ strtolower($item->kategori) }} overlay-hover"
                            style="padding: 15px;">
                            <div class="overlay-effect sea-green-overlay">
                            <a href="#"><img src="{{ asset('uploads/images/' . $item->image) }}" alt="{{ $item->kategori }}"
                            class="gallery-img" style="width: 100%; height: 250px; object-fit: cover;" /></a>
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


                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

