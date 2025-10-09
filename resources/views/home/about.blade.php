@include('home.css')
  <body>

    <!--Header Area Start-->
    @include('home.body.header')
    <!--End of Header Area-->
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">About Us</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb">
                                <li><a href="{{ route('home.index') }}">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
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
                    <div class="about-text-container">
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
    <!--End of Teachers Column Carousel-->
    <!--Footer Area Start-->
    @include('home.body.footer')
  </body>
</html>

