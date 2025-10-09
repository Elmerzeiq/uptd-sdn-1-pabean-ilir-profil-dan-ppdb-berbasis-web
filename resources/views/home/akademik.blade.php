@extends('home.home_page')

@section('home')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-text">
              <h1 class="text-center">Akademik</h1>
              <div class="breadcrumb-bar">
                <ul class="breadcrumb">
                  <li><a href="{{ route('home.index') }}">Home</a></li>
                  <li>Akademik</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Class Details Area Start-->
      <div class="blog-details-area section-padding blog-two">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 col-lg-8">
            <div class="blog-post-wrapper">
              <div class="blog-post-details">
                <h1>AKADEMIK</h1>

              </div>
              <br>
              <div class="row">
          <div class="col-xl-9 col-lg-8">
            <div class="class-list-item">
              <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6">
                  <a href="#"><img src="img/gallery/ppdbinfo.jpg" alt="" /></a>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6">
                  <div class="class-list-text">
                    <h3><a href="{{ route('ppbdinfo') }}">PPBD INFO</a></h3>
                    <div class="class-information">
                    </div>
                    <p>
                      Halaman ini menyediakan informasi lengkap terkait Penerimaan Peserta Didik Baru (PPDB),
                      termasuk syarat pendaftaran, jadwal pelaksanaan, tata cara pengisian formulir, serta mekanisme seleksi yang diterapkan.
                       Informasi ini bertujuan untuk memudahkan calon siswa dan orang tua dalam memahami seluruh tahapan yang diperlukan untuk mendaftar ke sekolah pilihan.
                    </p>
                    <a href="{{ route('ppbdinfo') }}" class="button-default"
                      >Read More <i class="fa fa-angle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="class-list-item">
              <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6">
                  <a href="#"><img src="img/gallery/1737514605.jpg" alt="" /></a>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6">
                  <div class="class-list-text">
                    <h3><a href="{{ route('kalenderakademik') }}">Kalender Akademik</a></h3>
                    <div class="class-information">
                    </div>
                    <p>
                     Halaman ini memuat informasi lengkap mengenai Kalender Akademik sekolah, termasuk jadwal kegiatan belajar mengajar, hari libur, ujian tengah dan akhir semester, serta kegiatan penting lainnya.
                      Kalender ini akan membantu siswa, orang tua, dan guru dalam memantau semua aktivitas akademik yang berlangsung sepanjang tahun ajaran.
                    </p>
                    <a href="{{ route('kalenderakademik') }}" class="button-default"
                      >Read More <i class="fa fa-angle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="class-list-item">
              <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6">
                  <a href="#"><img src="img/gallery/28.jpg" alt="" /></a>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-6">
                  <div class="class-list-text">
                    <h3><a href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></h3>
                    <div class="class-information">
                    </div>
                    <p>
                      Di halaman ini juga tersedia informasi mengenai kegiatan ekstrakurikuler yang ditawarkan oleh sekolah.
                      Mulai dari kegiatan olahraga, seni, sains, hingga organisasi siswa.
                      Setiap ekstrakurikuler bertujuan untuk mengembangkan potensi dan minat siswa di luar kegiatan belajar formal, serta memperkaya pengalaman mereka selama bersekolah.
                    </p>
                    <a href="{{ route('ekstrakurikuler') }}" class="button-default"
                      >Read More <i class="fa fa-angle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>



            </div>
          </div>
        </div>
      </div>
    </div>

</div>
    <!--End of Class Details Area-->

@endsection


