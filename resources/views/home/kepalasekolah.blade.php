@extends('home.layouts.app')

@section('home')

<div class="breadcrumb-banner-area teachers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Kepala Sekolah</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Kepala Sekolah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Teacher Details Area Start -->
<div class="teacher-details-area section-padding">
    <div class="container">
        <div class="row">
            <!-- Image Section -->
            <div class="col-lg-4 col-md-12">
                <div class="text-center">
                    <img src="{{ $guru_dan_staff ? url('uploads/images/' . $guru_dan_staff->image) : asset('img/teacher/teacher-details.jpg') }}"
                        alt="Foto Kepala Sekolah" class="img-fluid" style="border-radius: 8px; max-width: 300px; max-height: 300px;" />
                </div>
                <div class="mt-3 teacher-details-info" style="text-align: center;">
                    <h3>{{ $guru_dan_staff ? $guru_dan_staff->nama : 'Nama Kepala Sekolah' }}</h3>
                    <h2><i>{{ $guru_dan_staff ? $guru_dan_staff->jabatan : 'Jabatan Kepala Sekolah' }}</i></h2>
                </div>
            </div>

            <!-- Sambutan Section -->
            <div class="col-lg-8 col-md-12">
                <div class="teacher-about-info" style="text-align: left;">
                    <div class="single-title">
                        <h3>Kata Sambutan Kepala Sekolah</h3>
                    </div>
                    <p style="text-align: left;">
                        {!! $guru_dan_staff ? $guru_dan_staff->sambutan : 'Tidak ada sambutan yang tersedia saat ini.' !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Teacher Details Area -->

<br>

<div class="teachers-column-carousel-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <!-- Section Title -->
                    </div>
                </div>
            </div>
        </div>

        <div class="teacher-fullwidth-area section-padding">
            <div class="container">
                <div class="row">
                    @foreach($staffs as $staff)
                    @if($staff->kategori === 'guru')
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="text-center single-teachers-column">
                            <div class="teachers-image-column">
                                <img src="{{ $staff->image ? url('uploads/images/' . $staff->image) : '' }}" alt="" />
                            </div>
                            <div class="teacher-column-carousel-text">
                                <h3>{{ $staff->nama }}</h3>
                                <br>
                                <h4><i>{{ $staff->jabatan }}</i></h4>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

