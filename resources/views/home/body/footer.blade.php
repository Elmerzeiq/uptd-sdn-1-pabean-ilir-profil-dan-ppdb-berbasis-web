<!-- Footer Area Start -->
<footer class="footer-area">
    <div class="container">
        <!-- Bagian Atas (4 Kolom) -->
        <div class="footer-top">
            <!-- Kolom 1: Kontak Sekolah -->
            <div class="footer-column">
                <h3>Contacts</h3>
                <p>
                    <i class="fa fa-map-marker"></i> Jalan Brawijaya, Pabeanilir, Kec. Pasekan, Kab. Indramayu, Jawa
                    Barat
                </p>
                <p>
                    <i class="fa fa-envelope"></i> uptdsdn1pabeanilir@gmail.com
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    <a href="https://wa.me/6282320192550" target="_blank" style="color: white;">+6282320192550</a>
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    <a href="https://wa.me/6282117332776" target="_blank" style="color: white;">+6282117332776</a>
                </p>
            </div>

            <!-- Kolom 2: Media Sosial -->
            <div class="footer-column">
                <h3>Socials</h3>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100092457494049" target="_blank">
                            <i class="fa fa-facebook"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/6282320192550" target="_blank">
                            <i class="fa fa-whatsapp"></i> WhatsApp
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Menu 1 -->
            <div class="footer-column">
                <h3>Menu</h3>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('teacher') }}">Teacher</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Menu 2 -->
            <div class="footer-column">
                <h3>More Links</h3>
                <ul>
                    <li><a href="{{ route('ekstrakurikuler') }}">Extracurricular</a></li>
                    <li><a href="{{ route('ppbdinfo') }}">PPDB Info</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- Footer Bawah (Logo + Info) Start -->
<div class="footer-bottom">
    <div class="container">
        <!-- Logo Sekolah -->
        <div class="footer-logo-container">
            <a href="#">
                <img src="img/favicon.png" alt="Logo Sekolah" class="footer-logo" />
            </a>
        </div>
        <!-- Nama Sekolah / Judul -->
        <p class="footer-school-name">UPTD SDN 1 Pabean Ilir</p>
        <!-- Hak Cipta -->
        <p class="footer-copyright">
            &copy; 2024 <a href="#">UPTD SDN 1 PABEAN INDRAMAYU</a>. All rights reserved.
        </p>
    </div>
</div>
<!-- Footer Bawah (Logo + Info) End -->

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.3.min.js"></script>

    <!-- Popper JS
		============================================ -->
    <script src="js/popper.js"></script>

    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>

    <!-- bootstrap Toggle JS
		============================================ -->
    <script src="js/bootstrap-toggle.min.js"></script>

    <!-- nivo slider js
		============================================ -->
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="lib/nivo-slider/home.js"></script>

    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>

    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- Owl carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Countdown JS
		============================================ -->
    <script src="js/jquery.countdown.min.js"></script>

    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>

    <!-- Waypoints JS
		============================================ -->
    <script src="js/waypoints.min.js"></script>

    <!-- Counterup JS
		============================================ -->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- Slick JS
		============================================ -->
    <script src="js/slick.min.js"></script>

    <!-- Mix It Up JS
		============================================ -->
    <script src="js/jquery.mixitup.js"></script>

    <!-- Venubox JS
		============================================ -->
    <script src="js/venobox.min.js"></script>

    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>

    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!--End of Footer Area-->
{{-- <!-- Google Map js
    		============================================ -->

    <script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.282391861136!2d108.29704258715823!3d-6.287297399999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebb761417a7f7%3A0x83e6d224415663a5!2sSDN%201%20Pabean%20Ilir!5e0!3m2!1sid!2sid!4v1744996862592!5m2!1sid!2sid"></script>
    <script src="https://www.google.com/jsapi"></script>
<script>
    function initialize() {
    var mapOptions = {
    zoom: 15,
    scrollwheel: false,
    center: new google.maps.LatLng(23.763494, 90.432226),
    };
    var map = new google.maps.Map(
    document.getElementById("googleMap"),
    mapOptions
    );
    var marker = new google.maps.Marker({
    position: map.getCenter(),
    animation: google.maps.Animation.BOUNCE,
    icon: "img/map-marker.png",
    map: map,
    });
    }

    google.maps.event.addDomListener(window, "load", initialize);
</script>
 --}}
