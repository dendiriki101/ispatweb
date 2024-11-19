@extends('layout.tools.main')

<!-- end about section -->
@section('content')

    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-fade">
                    <div class="carousel-item active" id="bg1">
                        <!-- <img src="assets/img/wire1.png" class=" w-100" alt="assets/img"> -->
                        <div class="item active">
                            <div class="carousel-caption ">
                                <div class="vertical-section">
                                    <div class="vertical-content">
                                        <div class="col-md-12">
                                            <h2 style="font-size: 77px; font-weight: 700;">Ispat Indo Group</h2>
                                            <h1 style="font-size: 35px;">The Industry for Industries</h1>
                                            <!-- <h1 >Ispat Indo group</h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <h2 >Indonesia's Leading Steel wire Manufacturing With 2 Subsidiaries And 8 Exceptional Products</h2> -->
                                            <a href="{{ route('profilindo') }}">Discover our company</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="bg2">
                        <!-- <img src="assets/img/wire3.png" class="d-block w-100" alt="header"> -->
                        <div class="item active">
                            <div class="carousel-caption ">
                                <div class="vertical-section">
                                    <div class="vertical-content">
                                        <div class="col-md-12">
                                            <h2 style="font-size: 77px; font-weight: 700;">Ispat Indo Group</h2>
                                            <h1 style="font-size: 35px;">The Industry for Industries</h1>
                                            <!-- <h1 >Ispat Indo group</h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <h2 >Premier Steel wire Factory Sets New Standards for Excellence</h2> -->
                                            <a href="{{ route('profilindo') }}">Discover our company</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="bg3">
                        <!-- <img src="assets/img/wire4.png" class="d-block w-100" alt="header"> -->
                        <div class="item active">
                            <div class="carousel-caption ">
                                <div class="vertical-section">
                                    <div class="vertical-content">
                                        <div class="col-md-12">
                                            <h2 style="font-size: 77px; font-weight: 700;">Ispat Indo Group</h2>
                                            <h1 style="font-size: 35px;">The Industry for Industries</h1>
                                            <!-- <h1 >Ispat Indo group</h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <h2 >sells 70% of  products to domestic market and 30% to export markets of Asia-Pacific region.</h2> -->
                                            <a href="{{ route('profilindo') }}">Discover our company</a>

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


    <div class="timpahero"></div>
    <div>



        <section class="about_section layout_padding ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6">

                        <div class="detail">
                            <div class="container">
                                <iframe allowfullscreen style="border-radius: 2px;"
                                    src="https://www.youtube.com/embed/f53DFw5KV14"></iframe>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">

                        <div class="detail-box">
                            <div class="heading_container">
                                <div class="col row" style="background-color: transparent;">
                                    <div class="sub-heading"></div>
                                    <h2>
                                        About Us
                                    </h2>
                                </div>
                            </div>
                            <br>

                            {!! '<span class="white-text">' . Str::limit(htmlspecialchars(strip_tags($about->content)), 213, '...') . '</span>' !!}

                            <br> <br>
                            <a style="font-family: 'Poppins', sans-serif;" href="{{ route('profilindo') }}">
                                More on Our History
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="timpaau"> </div>

        <!-- end about section -->

        <!-- Start client -->
        <section id="service" class="p-top-80 p-bottom-80 p-bottom-40" style="background: #3F58DD; padding-top: 40px; padding-bottom: 40px; border-radius: 3px;">
            <div class="container product_section" >

            <div class="detail-box" style="margin-left:-15px;">
                <div class="heading_container container">
                    <div class="col row">
                        <div class="sub-heading"></div>
                        <h2>
                            Vision & Mision
                        </h2>
                    </div>
                </div>
            </div>
                <br>

                {!! '<span class="white-text">' . Str::limit(preg_replace('/<img[^>]*>/', '', $vision->content), 10000, '...') . '</span>' !!}




            </div> <!-- /.container -->
        </section>
        <!-- End Service -->








        <br><br><br>


        <section class="group_section">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="heading_container col-md-12">
                            <div class="col row sub-heading">
                                <h2 class="text-left">
                                    Our Group
                                </h2>
                            </div>
                        </div>
                        <br>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="no-gutters detail-box">
                                    <div class="col-md-12">
                                        <img src="{{ asset('assets/img/iwp_profle_images_02.png') }}" class="w-100"
                                            alt="images" style="max-width: 30rem; margin-bottom: 15px;">
                                    </div>
                                    <div class="col-md-12 position-static">
                                        <h4 class="mt-0">PT. Ispat Wire Products</h4>
                                        {!! '<p class="white-black">' . Str::limit(htmlspecialchars(strip_tags($grupiwp->content)), 250, '...') . '</p>' !!}

                                        <a href="{{ route('ispatwireproduct') }}">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" no-gutters detail-box">
                                    <div class="col-md-12">
                                        <img src="{{ asset('assets/img/ibb_profle_images_03.png') }}" class="w-100"
                                            alt="images" style="max-width: 30rem; margin-bottom: 15px;">
                                    </div>
                                    <div class="col-md-12 position-static">
                                        <h4 class="mt-0">PT. Ispat Bukit Baja</h4>
                                        {!! '<p class="white-black">' . Str::limit(htmlspecialchars(strip_tags($grupibb->content)), 250, '...') . '</p>' !!}

                                        <a href="{{ route('ispatbukitbaja') }}">Read more</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Start client -->
        <section class="product_section layout_padding">
            <!-- Section Title -->
            <div class="detail-box">
                <div class="heading_container container">
                    <div class="col row">
                        <div class="sub-heading"></div>
                        <h2>
                            Our Product
                        </h2>
                    </div>
                </div>
            </div>

            <!-- === Clients === -->
            <br>
            <div class="container ">
                <div class="row">

                    <div id="owl-clients" class="owl-carousel owl-theme client text-center">

                        <!-- === Client 1 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('highcarbon') }}">
                                <img class="img-responsive" src="assets/img/product1.png" alt="">
                                <br>
                                <h6>High Carbon Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 2 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('lowcarbon') }}">
                                <img class="img-responsive" src="assets/img/product2.png" alt="">
                                <br>
                                <h6>Low Carbon Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 3 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('clodheading') }}">
                                <img class="img-responsive" src="assets/img/product3.png" alt="">
                                <br>
                                <h6>CH Quality Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 4 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('generalpw') }}">
                                <img class="img-responsive" src="assets/img/product4.png" alt="">
                                <br>
                                <h6>General Purpose WR</h6>
                            </a>
                        </div>

                        <!-- === Client 5 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('welding') }}">
                                <img class="img-responsive" src="assets/img/product5.png" alt="">
                                <br>
                                <h6>Welding Electrode</h6>
                            </a>
                        </div>

                        <!-- === Client 6 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('pline') }}">
                                <img class="img-responsive" src="assets/img/product6.png" alt="">
                                <br>
                                <h6>Plain / Deform Bars</h6>
                            </a>
                        </div>

                        <!-- === Client 7 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('structure') }}">
                                <img class="img-responsive" src="assets/img/product9.png" alt="">
                                <br>
                                <h6>Structural Steel</h6>
                            </a>
                        </div>

                        <!-- === Client 8 === -->
                        <div class="client-item text-center">
                            <a href="{{ route('nails') }}">
                                <img class="img-responsive" src="assets/img/product10.png" alt="">
                                <br>
                                <h6>Nail & Nail Wire</h6>
                            </a>
                        </div>



                    </div><!-- /#owl-testimonials -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->


        </section>
        <!-- End client -->








        <!-- expert section -->
        <section class="padding-top90" >
            <div class="container">
                <div class="heading_container col-md-12">
                    <div class="col row sub-heading">
                        <h2 class="text-left">
                        Our Achivements
                        </h2>
                    </div>
                </div>
                <p class="col-md-12" style="color: #252525;">
                        "Our Achievements" at Ispat Indo showcase our notable accomplishments and successes that we have
                        attained over the years.
                        These accomplishments reflect our dedication to excellence, innovation, and a commitment to
                        delivering
                        high-quality
                        products and services. From surpassing production milestones to achieving industry recognition, our
                        achievements are
                        a testament to our team's hard work, strategic vision, and unwavering pursuit of excellence in the
                        steel
                        industry.
                </p>
            </div>
        </section>

        <section class="expert_section padding-bot90">
            <div class="container">
                <div class="heading_container heading_center">

                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/ISO_14001_NEW.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>ISO 14001 Approval Certificate</h6>
                                    <h6></h6>
                                    <a href="{{ route('isocertification') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/ISO_45001_NEW.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>ISO 45001 Approval Certificate</h6>
                                    <h6></h6>
                                    <a href="{{ route('isocertification') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/ISO_50001_NEW.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>ISO 50001 Approval Certificate</h6>
                                    <h6></h6>
                                    <a href="{{ route('isocertification') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/ISO_9001_NEW.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>ISO 9001 Approval Certificate</h6>
                                    <h6></h6>
                                    <a href="{{ route('isocertification') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/jis.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>JIS Approval Certificate</h6>
                                    <h6></h6>
                                    <a href="{{ route('jisapproval') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/SNI-07-2052-2017.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>Steel Bar for Reinforcement</h6>
                                    <h6></h6>
                                    <a href="{{ route('sni') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/SNI 07-0954-2005.jpeg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>Steel Bar In Coil</h6>
                                    <h6></h6>
                                    <a href="{{ route('sni') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/kan.jpeg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>LP - 455 – IDN Accreditation by KAN</h6>
                                    <h6></h6>
                                    <a href="{{ route('kan') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/SMK3 LOGO.jpeg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>SMK3 Approval ertificate</h6>
                                    <h6></h6>

                                    <a href="{{ route('sirim') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/proper.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>Proper Approval Certificate</h6>
                                    <h6></h6>
                                    <a href="{{ route('tkdn') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/logo zero accident.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>Zero Accident Approval Certificate</h6>
                                    <h6></h6>
                                    <a href="{{ route('sni') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/logo/sirim.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>SIRIM Approval</h6>
                                    <h6></h6>
                                    <a href="{{ route('sirim') }}">
                                        <p class="pkebawah">Read More >></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Start Stat -->
        <section id="stat" class="parallax-bg overlay-dark p-top-80 p-bottom-40 white-color"
            style="background-image:url(assets/img/wire7.png)" data-stellar-background-ratio="0.5">
            <div class="container">



                <div class="row">

                    <div class="heading_container col-md-12" style="padding-top: 40px;">
                        <div class="col row sub-heading">
                            <h2 class="text-left" style="color: #fff;">
                                Safety Performance Board
                            </h2>
                        </div>
                        <br>
                    </div>

                    <!-- === Stats Item 1 === -->
                    <div class="col ">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-person-falling"></i>
                            </div>
                            <div class="stat-item-number">
                                {{ $shedata['NearMiss'] }}
                            </div>
                            <div class="stat-item-text">
                                Near Miss Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->

                    <!-- === Stats Item 2 === -->
                    <div class="col ">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-kit-medical"></i>
                            </div>
                            <div class="stat-item-number">
                                {{ $shedata['FirstAIDCases'] }}
                            </div>
                            <div class="stat-item-text">
                                First AID Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->

                    <!-- === Stats Item 3 === -->
                    <div class="col ">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-bed-pulse"></i>
                            </div>
                            <div class="stat-item-number">
                                {{ $shedata['MedicalTreatmentCases'] }}
                            </div>
                            <div class="stat-item-text">
                                Medical Treatment Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->

                    <!-- === Stats Item 4 === -->
                    <div class="col ">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-house-chimney-medical"></i>
                            </div>
                            <div class="stat-item-number">
                                {{ $shedata['LostWorkdays'] }}
                            </div>
                            <div class="stat-item-text">
                                Lost Work Days Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->

                    <!-- === Stats Item 5 === -->
                    <div class="col">
                        <div class="stat-item stat-item-type-2 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="stat-item-icon">
                                <i class="fa-solid fa-skull"></i>
                            </div>
                            <div class="stat-item-number">
                                {{ $shedata['FatalityCases'] }}
                            </div>
                            <div class="stat-item-text">
                                Fatality Cases
                            </div>
                        </div>
                    </div> <!-- /.col -->



                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section>
        <!-- End Stat -->




        <!-- Contact Section -->
        <section id="contact" class="contact">

            <!--  Section Title -->
            <div class="container">
                <div class="row heading_container col-md-12">
                    <div class="col row sub-heading">
                        <h2 class="text-left">
                            Contact us
                        </h2>
                    </div>
                    <p class="col-md-7">
                        We're here to help and answer any question you might have. We look forward to hearing from you.
                    </p>
                    <br>
                </div>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <h3>Address</h3>
                                    <p>Plan and Office: Desa Kedungturi, Taman Sidoarjo PO BOX 1083 Surabaya 60010 -
                                        Indonesia</p>
                                    <p></p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="fa-solid fa-phone"></i>
                                    <h3>Call Us</h3>
                                    <p>Telp : (62) 31-7887000 <br>
                                        Fax : (62) 31-7887500 <br>
                                        WA : (62) 8155152222</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="fa-solid fa-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>marketing.indo@mittalsteel.com <br>custsupp.indo@mittalsteel.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="fa-solid fa-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">


                                <div class="col-md-12 text-center">
                                    <img>

                                    <div class="contact-btn"></div>
                                    <a href="{{ route('customer-center') }}" class="btn ">Send Message</a>
                                </div>


                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- End Contact Section -->


                <!-- HTML -->
                <section class="vision-section">
            <div class="container">
                <div class="col text-center">
                    <i class="fa-solid fa-hand-holding-droplet"
                       ></i>
                    <h1 class="text-center">Quality Policy</h1>

                    {!! '<span class="highlighted-text">' . Str::limit(strip_tags($quality->content), 10000, '...') . '</span>' !!}

                </div>
            </div>
        </section>

    @endsection
