<div>

    {{-- @dump($Empresas) --}}
    {{-- Success is as dangerous as failure. --}}
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">{{ $Empresas[0]->nombre }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
                    <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="getstarted scrollto" href="#contact">Contáctanos</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nosotros</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>Misión</h2>
                        <p>
                            {{ $Empresas[0]->mision }}
                        </p>
                        {{-- <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</li>
                        </ul> --}}
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h2>Visión</h2>
                        <p>
                            {{ $Empresas[0]->vision }}
                        </p>
                        {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col footer-contact text-center">
                        <h3>{{$Empresas[0]->nombre}}</h3>
                        <p>
                            {{$Empresas[0]->direccion}} <br>
                            {{-- New York, NY 535022<br> --}}
                            {{-- United States <br><br> --}}
                            <br>
                            <strong>Phone:</strong> {{$Empresas[0]->telefono}}<br>
                            <strong>Email:</strong> {{$Empresas[0]->correo}}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container footer-bottom clearfix"> -->
        <div class="container d-flex footer-bottom justify-content-between">
            <div class="copyright">
                &copy; Copyright <strong><span>Team - 6</span></strong>. All Rights Reserved
            </div>
            <div class="social-links text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="credits">
                Designed by <a href="#">TEAM-6</a>
            </div>
        </div>
    </footer><!-- End Footer -->
</div>
