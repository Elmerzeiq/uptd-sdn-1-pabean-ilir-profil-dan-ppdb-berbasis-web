<!--Header Area Start-->
    <header class="header-four">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-8">
              <div class="header-top-info">
                <span
                  ><i class="fa fa-map-o"></i> Jalan Brawijaya , Pabeanilir, Kec. Pasekan, Kab. Indramayu Prov. Jawa Barat</span>
                <div class="social-links">
                  <a href="https://www.facebook.com/profile.php?id=100092457494049"><i class="fa fa-facebook"></i></a>
                  <a href="https://wa.me/6282320192550" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
              </div>
            </div>



            </div>
          </div>
        </div>
      </div>

      <!--Logo Mainmenu Start-->
      <div class="header-logo-menu sticker">
        <div class="container">
          <div class="logo-menu-bg">
            <div class="row">
              <div class="col-lg-3 col-md-12">
                <div class="logo">
                  <a href="{{ route('home.index') }}">
                    <img src="{{ asset('img/logo/logo-white.png') }}" alt="SDN 1 PABEAN ILIR" />
                  </a>
                </div>
              </div>
              <div class="col-lg-9 d-none d-lg-block">
                <div class="mainmenu-area">
                  <div class="mainmenu">
                    <nav>
                      <ul id="nav">
                        <li><a href="{{ route('home.index') }}">Home</a></li>

                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li>
                    <a href="{{ route('akademik') }}"
                            >Akademik<i class="fa fa-angle-down"></i
                          ></a>
                          <ul class="sub-menu">
                            <li>
                              <a href="{{ route('ppbdinfo') }}">PPBD INFO</a>
                            </li>
                            <li>
                              <a href="{{ route('kalenderakademik') }}">Kalender Akademik</a>
                            </li>
                             <li>
                              <a href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="{{ route('kepalasekolah') }}"
                            >Teachers<i class="fa fa-angle-down"></i
                          ></a>
                          <ul class="sub-menu">
                            <li>
                              <a href="{{ route('kepalasekolah') }}">Kepala Sekolah</a>
                            </li>
                            <li>
                              <a href="{{ route('teacher') }}">Guru</a>
                            </li>
                            <li>
                              <a href="{{ route('staff') }}">Staff</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li>
                          <a href="{{ route('blog') }}">BERITA </a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                      </ul>
                    </nav>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End of Logo Mainmenu-->
      <!-- Mobile Menu Area start -->
      <div class="mobile-menu-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="mobile-menu">
                <nav id="dropdown">
                  <ul>
                    <li>
                      <a href="{{ route('home.index') }}">HOME</a>
                    </li>
                    <li><a href="{{ route('about') }}">About Us</a></li>

                      <li>
                    <a href="{{ route('akademik') }}"
                            >Akademik<i class="fa fa-angle-down"></i
                          ></a>
                          <ul class="sub-menu">
                            <li>
                              <a href="{{ route('ppbdinfo') }}">PPBD INFO</a>
                            </li>
                            <li>
                              <a href="{{ route('kalenderakademik') }}">Kalender Akademik</a>
                            </li>
                             <li>
                              <a href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                            </li>
                          </ul>
                        </li>
                 <li>
                    <a href="{{ route('kepalasekolah') }}"
                            >Teachers<i class="fa fa-angle-down"></i
                          ></a>
                          <ul class="sub-menu">
                            <li>
                              <a href="{{ route('kepalasekolah') }}">Kepala Sekolah</a>
                            </li>
                            <li>
                              <a href="{{ route('teacher') }}">Guru</a>
                            </li>
                            <li>
                              <a href="{{ route('staff') }}">Staff</a>
                            </li>
                          </ul>
                        </li>

                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                      <li>
                          <a href="{{ route('blog') }}">Berita</a></li>
                   <li><a href="{{ route('contact') }}">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>
    <!--End of Header Area-->
