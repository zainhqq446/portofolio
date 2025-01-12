@php
$section = get_section();
$about = get_about();
$portofolio = get_portofolio();
$skills = get_skills();
$head = get_head();
@endphp


<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Portofolio</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
-->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<script src="js/modernizr.js"></script>
<!-- Modernizr -->

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
            <div id="loader"></div>
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Navigation -->
    @foreach ($head as $item)
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img class="img-fluid" src="{{Storage::url($item->thumbnail)}}" alt="" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger active" href="#home">{!! strip_tags($item->nav1)!!}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">{!! strip_tags($item->nav2)!!}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">{!! strip_tags($item->nav3)!!}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">{!! strip_tags($item->nav4)!!}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">{!! strip_tags($item->nav5)!!}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endforeach

    @foreach ($section as $item)
    <section id="home" class="main-banner parallaxie" style="background-image:url('{{Storage::url($item->thumbnail)}}');">
        <div class="heading">
            <h1>{{($item->title)}} </h1>
            <p>{!! strip_tags($item->content)!!}</p>
            <h3 class="cd-headline clip is-full-width">
                <span>My Skills include </span>
                <span class="cd-words-wrapper">
					<b class="is-visible">{!! strip_tags($item->p1)!!}</b>
					<b>{!! strip_tags($item->p2)!!}</b>
					<b>{!! strip_tags($item->p3)!!}</b>
					<b>{!! strip_tags($item->p4)!!}</b>
				</span>
            </h3>
        </div>
    </section>
    @endforeach

    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    @foreach ($about as $item)
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>About Me.</h2>
                        <p> {!! strip_tags($item->content)!!}
                        </p>

                        <!--<a href="#" class="sim-btn btn-hover-new" data-text="Download CV"><span>Download CV</span></a>-->
                    </div>
                    <!-- end messagebox -->
                </div>
                <!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="{{Storage::url($item->thumbnail)}}" alt="" class="img-fluid img-rounded">
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    @endforeach
    <!-- end section -->

    @foreach ($skills as $item)
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Skill</h3>
                <p>{!! strip_tags($item->paragraf)!!}</p>
            </div>
            <!-- end title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-seo"></i>
                        </div>
                        <h2>{!! strip_tags($item->judul1)!!}</h2>
                        <p>{!! strip_tags($item->isi1)!!}</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-development"></i>
                        </div>
                        <h2>{!! strip_tags($item->judul2)!!}</h2>
                        <p>{!! strip_tags($item->isi2)!!}</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-process"></i>
                        </div>
                        <h2>{!! strip_tags($item->judul3)!!}</h2>
                        <p>{!! strip_tags($item->isi3)!!}</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-discuss-issue"></i>
                        </div>
                        <h2>{!! strip_tags($item->judul4)!!}</h2>
                        <p>{!! strip_tags($item->isi4)!!}</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <h2>{!! strip_tags($item->judul5)!!}</h2>
                        <p>{!! strip_tags($item->isi5)!!}</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-idea-1"></i>
                        </div>
                        <h2>{!! strip_tags($item->judul6)!!}</h2>
                        <p>{!! strip_tags($item->isi6)!!}</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    @endforeach
    <!-- end section -->

    @foreach ($portofolio as $item)
    <div id="portofolio" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Portofolio</h3>
                <p>{!! strip_tags($item->paragraf)!!}</p>
            </div>
            <!-- end title -->

            <div class="gallery-menu row">
                <div class="col-md-12">
                    <div class="button-group filter-button-group text-left">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".gal_a">{!! strip_tags($item->kerja1)!!}</button>
                        <button data-filter=".gal_b">{!! strip_tags($item->kerja2)!!}</button>
                        <button data-filter=".gal_c">{!! strip_tags($item->kerja3)!!}</button>
                    </div>
                </div>
            </div>

            <div class="gallery-list row">
                <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
                    <div class="gallery-single fix">
                        <img src="{{Storage::url($item->gambar)}}" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="{{Storage::url($item->gambar)}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
                    <div class="gallery-single fix">
                        <img src="{{Storage::url($item->gambar1)}}" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="{{Storage::url($item->gambar1)}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
                    <div class="gallery-single fix">
                        <img src="{{Storage::url($item->gambar2)}}" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="{{Storage::url($item->gambar2)}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
                    <div class="gallery-single fix">
                        <img src="{{Storage::url($item->gambar3)}}" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="{{Storage::url($item->gambar3)}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
                    <div class="gallery-single fix">
                        <img src="{{Storage::url($item->gambar4)}}" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="{{Storage::url($item->gambar4)}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
                    <div class="gallery-single fix">
                        <img src="{{Storage::url($item->gambar5)}}" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="{{Storage::url($item->gambar5)}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-left">
                <h3>Contact</h3>
                <p>Convey your message to me through this.</p>
            </div>
            <!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Send Message" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2024
                    </p>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- Camera Slider -->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/headline.js"></script>
    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>

</html>