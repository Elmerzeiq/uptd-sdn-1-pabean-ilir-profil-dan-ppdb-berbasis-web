@extends('home.home_page')
{{-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> --}}
@section('home')

<!--End of Header Area-->
<!--End of Header Area-->
<!--Google Map Area Start -->
<div class="breadcrumb-banner-area teachers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">CONTACT</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li>CONTACT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--End of Google Map Area-->
<!-- Contact Area Start -->
<div class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-area-container">
                    <div class="single-title">
                        <h3>Contact Info</h3>
                    </div>
                    <p>
                        Untuk informasi lebih lanjut mengenai PPD INFO atau jika Anda memiliki pertanyaan tentang
                        sekolah kami, silakan hubungi kontak yang tertera di bawah ini.
                    <div class="contact-address-container">
                        <div class="contact-address-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Address</h4>
                                <span>{!! nl2br(e($profil ? $profil->alamat : '-')) !!}</span>
                            </div>
                        </div>
                        <div class="contact-address-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Contact 1</h4>
                                <span>
                                    <a href="https://wa.me/{{ $profil ? $profil->kontak1 : '-'  }}" target="_blank">{{
                                        $profil ? $profil->kontak1 : '-' }}</a> </span>
                            </div>
                        </div>
                        <div class="contact-address-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Contact 2</h4>
                                <span>
                                    <a href="https://wa.me/{{ $profil ? $profil->kontak2 : '-'  }}" target="_blank">{{
                                        $profil ? $profil->kontak2 : '-' }}</a>
                                </span>
                            </div>
                        </div>
                        <div class="contact-address-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <span>{{ $profil ? $profil->email : '-' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-image">
                    <img src="{{ $profil ? url('uploads/images/' . $profil->image) : '' }}" alt="" style="width:100%;">
                </div>
            </div>
        </div>
    </div>
</div>
