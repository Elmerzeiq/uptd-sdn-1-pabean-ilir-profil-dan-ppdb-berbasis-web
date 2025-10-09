@extends('home.home_page')
@php
use Illuminate\Support\Str;
@endphp
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
@section('home')
<div class="breadcrumb-banner-area blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Blog</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('berita.show', $berita->id) }}">Berita</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Detail Area -->
<div class="blog-details-area section-padding blog-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-post-wrapper">
                    <div class="blog-post-details">
                        <h1>{{ $berita->judul }}</h1>
                        <span>
                            <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F, Y')
                            }} / By: Admin
                        </span>
                    </div>
                    <div class="blog-post-details-img">
                    <img src="{{ asset('uploads/images/' . $berita->image) }}" class="card-img-top" alt="{{ $berita->judul }}">
                    </div>
                    <div class="blog-post-details-text">
                        <h4>{!! $berita->deskripsi !!}</h4>
                        <p>{!! $berita->isi !!}</p>
                    </div>

                    <!-- Related Posts -->
                    <div class="single-title">
                        <h3>Related Posts</h3>
                    </div>
                    <div class="row">
                        @foreach ($relatedBerita as $related)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="single-blog-item overlay-hover">
                                <div class="single-blog-image">
                                    <div class="overlay-effect">
                                        <a href="{{ route('berita.show', $related->id) }}">
                                            <img src="{{ asset('uploads/images/' . $related->image) }}"
                                                alt="Related Post Image" style="width: 100%; height: 300px; object-fit: cover;"/>
                                        <span>
                                            <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($related->tanggal)->format('d F, Y') }} / By: {{
                                            $related->user->name ?? 'Admin' }}
                                        </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-blog-text">
                                    <h4><a href="{{ route('berita.show', $related->id) }}">{{ $related->judul }}</a>
                                    </h4>
                                    <div class="blog-date">
                                        <span><i class="fa fa-calendar"></i> {{
                                            \Carbon\Carbon::parse($related->tanggal)->format('d F, Y') }}</span>
                                    </div>
                                    <p>{!! Str::limit($related->deskripsi, 200) !!}</p>
                                    <a href="{{ route('berita.show', $related->id) }}">Read more.</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4">
                <div class="single-widget-item">
                    <div class="single-title">
                        <h3>Categories</h3>
                    </div>
                    <div class="single-widget-container">
                        <ul class="sidebar-categories">
                            <li><a href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('ppbdinfo') }}">PPBD INFO</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


