@extends('home.home_page')

@section('home')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-text">
              <h1 class="text-center">kalender Akademik</h1>
              <div class="breadcrumb-bar">
                <ul class="breadcrumb">
                  <li><a href="{{ route('home.index') }}">Home</a></li>
                  <li><a href="{{ route('kalenderakademik') }}">kalender Akademik</a></li>
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
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-post-wrapper">
                        <div class="blog-post-details">
                            @if($kalender->first())
                                <h1>{!! $kalender->first()->judul !!}</h1>
                            @else
                                <h1>No Title Available</h1>
                            @endif
                           <span>
                                <i class="fa fa-calendar"></i>
                                @if($kalender->first())
                                    {{ \Carbon\Carbon::parse($kalender->first()->tanggal)->format('d F, Y') }} / By: Admin
                                @else
                                    No Date Available / By: Admin
                                @endif
                            </span>
                        </div>
                        @if($kalender->first())
                        <div class="blog-post-details-img">
                            <img src="{{ asset('uploads/images/' . $kalender->first()->image) }}" class="card-img-top"
                                alt="{{ $kalender->first()->judul }}">
                        </div>
                        @else
                        <div class="blog-post-details-img">
                            <img src="{{ asset('uploads/images/default.jpg') }}" class="card-img-top"
                                alt="No Image Available">
                        </div>
                        @endif
                        {{-- <div class="blog-post-details-text">
                            @if($kalender->first())
                                <h4>{!! $kalender->first()->deskripsi !!}</h4>
                                <p>{!! $kalender->first()->isi !!}</p>
                            @else
                                <h4>No Description Available</h4>
                                <p>No Content Available</p>
                            @endif
                        </div> --}}

                        {{-- <!-- Related Posts -->
                        <div class="single-title">
                            <h3>Related Posts</h3>
                        </div>
                        <div class="row">
                            @if($relatedBerita->isEmpty())
                                <p>No related posts available.</p>
                            @else
                                @foreach ($relatedBerita as $related)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="single-blog-item overlay-hover">
                                        <div class="single-blog-image">
                                            <div class="overlay-effect">
                                                <a href="{{ route('berita.show', $related->id) }}">
                                                    <img src="{{ asset('uploads/images/' . $related->image) }}"
                                                        alt="Related Post Image" />
                                                    <span>
                                                        <i class="fa fa-calendar"></i> {{
                                                        \Carbon\Carbon::parse($related->tanggal)->format('d F, Y') }} / By: {{
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
                                            <p>{!! Str::limit($related->deskripsi, 100) !!}</p>
                                            <a href="{{ route('berita.show', $related->id) }}">Read more.</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif --}}
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
