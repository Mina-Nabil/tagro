<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"       content="width=device-width, initial-scale=1.0">
    <meta name="description"    content="Tagro Bu">
    <meta name="keywords"       content="tagro, plastic, company, factory, import, business">
    <meta name="author"         content="Ambidextrousbd">

    <!-- Site title -->
    <title>Tagro</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imgs/apple-touch-icon-60x60.png') }}">

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/css/bootstrap.min.css' ) }}" rel="stylesheet">

    <!--Font Awesome css -->
    <link href="{{ asset('assets/css/font-awesome.min.css' ) }}" rel="stylesheet">

    <!-- Normalizer css -->
    <link href="{{ asset('assets/css/normalize.css' ) }}" rel="stylesheet">

    <!-- Owl Carousel css -->
    <link href="{{ asset('assets/css/owl.carousel.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css' ) }}" rel="stylesheet">

    <!-- Magnific popup css -->
    <link href="{{ asset('assets/css/magnific-popup.css' ) }}" rel="stylesheet">

    <!-- Site css -->
    <link href="{{ asset('assets/css/style.css' ) }}" rel="stylesheet">

    <!-- Responsive css -->
    <link href="assets/css/responsive.css" rel="stylesheet">



    <!-- <link rel="stylesheet" href="assets/css/skin/orange.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/skin/green.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/skin/yellow.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/skin/wood.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/skin/asbestos.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/skin/alizarin.css" /> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader starts-->
    <div id="preloader"></div>
    <!-- Preloader ends -->


    <!-- Top Bar Starts -->
    <div class="top-bar">
        <div class="container">

        <div class="tmail">
            <div class="tsocial">
                <a href="mailto:info@tagro-egypt.com"><i class="fa fa-envelope"></i> </a>
            </div>  &nbsp info@tagro-egypt.com
        </div> 
        <div class="tmail">
            <div class="tsocial">
                <a href="tel:+20224151218"><i class="fa fa-phone"></i> </a> </div>&nbsp+2-02 24151218
        </div>   
         
            <div class="tsocial">
                <a href="https://facebook.com/TagroCompany/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/TagroEgypt" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://plus.google.com/u/0/109642517085020313026/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Top Bar Ends -->


    <!-- Navigation area starts -->
    <div class="menu-area navbar-fixed-top">
        <div class="container">
            <div class="row">

                <!-- Navigation starts -->
                <div class="col-md-12">
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <a class="navbar-brand" title="Tagro" href="{{ url('/') }}"><img src="{{ asset('imgs/grey-logo.png') }}" alt=""></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smooth_scroll" href="#slider">HOME</a></li>
                                        <li><a class="smooth_scroll" href="#about">ABOUT</a></li>
                                        <li><a class="smooth_scroll" href="#service">WHY TAGRO</a></li>
                                        <li><a class="smooth_scroll" href="#work">PRODUCTS</a></li>
                                        <li><a class="smooth_scroll" href="#team">TEAM</a></li>
                                        <li><a class="smooth_scroll" href="#news">QUALITY</a></li>
                                        <li><a class="smooth_scroll" href="#contact">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation ends -->

            </div>
        </div>
    </div>
    <!-- Navigation area ends -->



    <!-- Slider area starts -->
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">

            <div class="carousel-inner" role="listbox">

                <!-- Item 1 -->
                <div class="item active slide1">
                    <div class="table">
                        <div class="table-cell">
                            <div class="intro-text">
                                <img src="{{ asset('imgs/logo.png') }}" alt="">
                                <div class="title clearfix">
                                    <h2>Aim for <br>the best &nbsp</h2>
                                    <h1> Quality</h1>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                 </div>

                <!-- Item 2 -->
                <div class="item slide2">
                    <div class="table">
                        <div class="table-cell">
                            <div class="intro-text">
                                <img src="{{ asset('imgs/logo.png') }}" alt="">
                                <div class="title clearfix">
                                    <h2>Every Person <br> is a value to</h2>
                                    <h1>Us</h1>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="item slide3">
                    <div class="table">
                        <div class="table-cell">
                            <div class="intro-text">
                                <img src="{{ asset('imgs/logo.png') }}" alt="">
                                <div class="title clearfix">
                                    <h2>Our Success &nbsp<br> is based on </h2>
                                    <h1>Trust</h1>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Wrapper for slides-->


            <!-- Carousel Pagination -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>


            <!-- Slider left right button -->
            <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <img src="assets/img/left-arrow.png" alt="">
            </a>

            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <img src="assets/img/right-arrow.png" alt="">
            </a> -->

        </div>
    </section>
    <!-- Slider area ends -->



    <!-- About area starts -->
    <section id="about" class="about-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>About <span>Us</span></h2>
                        <p>Tagro is a leading company in the Egyptian market, producing and importing thermoplastic piping systems. 

Having a wide distributors network in Egypt governorates. 
In order to reach the targeted service level to her customers on this wide geographical network, Tagro offers Free Pipes Installation and Filtering Testing for any customer with the governorates . 

Dedicated to supply products of the highest quality after having the approval of the Egyptian authorities that the products helps to protect the environment and the human safety </p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- About Image -->
                <div class="col-md-6 about-img">
                    <img src="{{ asset('assets/img/slider/06.png')}}" alt="" >
                </div>

                <!-- About Text -->
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="subtitle">What define us</h3>
                        <p>Tagro aim to bring the ultimate satisfaction to its customers through its Products and Service. As we:</p>
                        <ul>
                            <li>Provide the <strong class="listrong">Best Solutions</strong> to the House Water Transportation Problems</li>
                            <li>Up to date with the latest Piping System <strong class="listrong">Technologies</strong> around the Globe </li>
                            <li><strong class="listrong">Safest</strong> and <strong class="listrong">Highest Quality</strong> products approved by the Egyptian Authorities</li>
                            <li><strong class="listrong">Specialized</strong> in Plumbing, Heating and Sewage Areas</li>
                        </ul>
                        

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About area ends -->


    <!-- Service area starts -->
    <section id="service" class="service-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>Why Choose <span>Tagro</span></h2>
                        <p>Because of our strategic targets to improve our products and services with the support of our customers we will continue to increase our economical power in Egypt and the Middle-East</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="home-services">

                    <!-- Service box -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box">
                        <i class="fa fa-signal"></i>
                            <h3 class="subtitle">High Quality</h3>
                            <p>We develop our business without discriminating between our distributors. Our business relationship with our distributors is based on trust. We are committed to fair competition. Our only sales channel is through our distributors</p>
                        </div>
                    </div>

                    <!-- Service box -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box">
                        <i class="fa fa-user"></i>
                            <h3 class="subtitle">Brand Name</h3>
                            <p>We aim to be a brand name that our distributors are proud of selling our products. We also aim that our distributors derive good profits through our services</p>
                        </div>
                    </div>

                    <!-- Service box -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box">
                        <i class="fa fa-shield"></i>
                            <h3 class="subtitle">Trust</h3>
                            <p>Our business relationship with our distributors is based on trust</p>
                        </div>
                    </div>

                
                </div>

            </div>

        </div>
    </section>
    <!-- Service area ends -->


    <!-- Work area starts -->
    <section id="work" class="works section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>A Collection of our <span>Products</span></h2>
                        <p>TAGRO PP-R pipes and fittings are manufactured from high quality, Polpropylene Random Co-polymer resins (PP-RType 3). 
                        Its phiysical and chemical properties make TAGRO a versatile piping system in a wide range of applica- tions in different industries. 
                        Its advantages over PP types 1 or 2 and other thermoplastic pipes in the potable water indus- tries are its high impact strength and 
                        resistance to high temperatures.</p>
                <a class="btn" target="_blank" href="{{ asset('assets/catalogue/Catalog.pdf') }}" >Check Our Full Catalogue</a>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Works filter -->
                <ul class="work filters">
                    <li class="filter" data-filter="all">All</li>
                    <li class="filter" data-filter=".pipe">Pipes</li>
                    <li class="filter" data-filter=".elbow">Elbows</li>
                    <li class="filter" data-filter=".valve">Valves</li>
                    <li class="filter" data-filter=".tpart">T-Parts</li>
                    <li class="filter" data-filter=".adapter">Adapters</li>
                    <li class="filter" data-filter=".upvc">UPVC</li>
                </ul>
                <!-- / Works filter -->

            </div>

            <div class="portfolio">
                <div class="row work-items">

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix illustrate pipe">
                        <div class="item">
                            <a href="{{asset('assets/img/works/Pipe1.png')}}" class="work-popup">
                                <img src="{{asset('assets/img/works/Pipe1.png')}}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>


                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix illustrate typography pipe">
                        <div class="item">
                            <a href="{{asset('assets/img/works/Pipe2.png')}}" class="work-popup">
                                <img src="{{asset('assets/img/works/Pipe2.png')}}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix  pipe">
                        <div class="item">
                            <a href="{{asset('assets/img/works/Pipe3.png')}}" class="work-popup">
                                <img src="{{asset('assets/img/works/Pipe3.png')}}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>


                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix valve">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/Valve1.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/Valve1.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix valve brand">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/Valve2.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/Valve2.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix valve illustrate">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/Valve3.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/Valve3.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix elbow">
                        <div class="item">
                            <a href="{{asset('assets/img/works/Elbow1.png')}}" class="work-popup">
                                <img src="{{asset('assets/img/works/Elbow1.png')}}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix elbow illustrate">
                        <div class="item">
                            <a href="assets/img/works/Elbow2.png" class="work-popup">
                                <img src="assets/img/works/Elbow2.png" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix tpart">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/T-Part1.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/T-Part1.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix tpart">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/T-Part2.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/T-Part2.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix adapter">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/Adapter1.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/Adapter1.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix adapter">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/Adapter2.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/Adapter2.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix pipes upvc">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/upvc1.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/upvc1.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix elbow upvc">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/upvc2.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/upvc2.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 mix tpart upvc">
                        <div class="item">
                            <a href="{{ asset('assets/img/works/upvc3.png') }}" class="work-popup">
                                <img src="{{ asset('assets/img/works/upvc3.png') }}" alt="">
                                <div class="overlay">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center m-t-20">
                            <a class="btn" target="_blank" href="{{ asset('assets/catalogue/Catalog.pdf') }}" >Check Our Full Catalogue</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Work area ends -->

    <!-- Team area starts -->
    <section id="team" class="team-area section-big">
        <div class="container">


            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>Meet the Team behind <span>Tagro</span></h2>
                        <p>Dedicated to the Highest Quality</p>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="{{ asset('assets/img/team/mm.png') }}" alt="">
                        </div>
                        <div class="member-info">
                            <h3 class="subtitle">Amgad Selim</h3>
                            <p class="text-muted">Marketing Manager</p>
                           
                        </div>
                        <div class="member-hover">
                            <h3 class="subtitle">Amgad Selim</h3>
                            <p class="text-muted">Marketing Manager</p>
                          
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="{{ asset('assets/img/team/ceo.png') }}" alt="">
                        </div>
                        <div class="member-info">
                            <h3 class="subtitle">Rezk Allah Mikhael</h3>
                            <p class="text-muted">Tagro CEO</p>
                          
                        </div>
                        <div class="member-hover">
                            <h3 class="subtitle">Rezk Allah Mikhael</h3>
                            <p class="text-muted">Tagro CEO</p>
                         
                        </div>
                    </div>
                </div>
                <div clas  s="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="{{ asset('assets/img/team/csm.png') }}" alt="">
                        </div>
                        <div class="member-info">
                            <h3 class="subtitle">Harby Saeed</h3>
                            <p class="text-muted">Customer Support Manager</p>
                         
                        </div>
                        <div class="member-hover">
                            <h3 class="subtitle">Harby Saeed</h3>
                            <p class="text-muted">Custome Support Manager</p>
                          
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- Team area ends -->


    <!-- fun-facts area starts -->
    <section id="fun-facts" class="fun-facts-area section-big">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center tab-margin-bottom">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h3><span class="cp-counter">290</span></h3>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center tab-margin-bottom">
                        <i class="fa fa-group"></i>
                        <h3> <span class="cp-counter">550</span></h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center">
                        <i class="fa fa-envelope"></i>
                        <h3> <span class="cp-counter">924</span></h3>
                        <p>Mail Conversation</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center">
                        <i class="fa fa-file-image-o"></i>
                        <h3> <span class="cp-counter">1656</span></h3>
                        <p>Photos Taken</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-facts area ends -->


         


    

    <!-- News area starts -->
    <section id="news" class="news-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Keeping Our <span>Quality</span></h2>
                        <p>TAGRO pipes and fittings are periodically subjected to the following 
                        extensive test program according to the standards</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- News item 1 -->
                <div class="col-md-4 col-sm-6" style="margin-top: 10px">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="#news-modal-1" data-toggle="modal">
                                <img src="{{asset('assets/img/quality/Mat_char.jpg')}}" height=300px  alt="" >
                            </a>
                        </div>
                        <div class="news-content">
                            <a href="#news-modal-1" data-toggle="modal">
                                <h3 class="subtitle">Material Characterization Tests</h3>
                            </a>
                         
                            <p>
                            Testing the incoming resin is the first step in the quality control program. 
                            
                            </p>
                            <a class="btn" href="#news-modal-1" data-toggle="modal">Read More</a>
                            
                        </div>
                    </div>
                </div>

                <!-- News item 2 -->
                <div class="col-md-4 col-sm-6" style="margin-top: 10px">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="#news-modal-2" data-toggle="modal">
                                <img src="{{asset('assets/img/quality/Thermal_Reservation.jpg')}}" height=300px alt="" >
                            </a>
                        </div>
                        <div class="news-content">
                            <a href="#news-modal-2" data-toggle="modal">
                                <h3 class="subtitle">Thermal Reversion Properties</h3>
                            </a>
                         
                            <p>Thermal properties of plastic materials are equally important as mechanical properties. 
                             </p>
                            <a class="btn" href="#news-modal-2" data-toggle="modal">Read More</a>
                            
                            
                        </div>
                    </div>
                </div>

                <!-- News item 3 -->
                <div class="col-md-4 col-sm-6 " style="margin-top: 10px" >
                    <div class="single-news">
                        <div class="news-image">
                            <a href="#news-modal-3" data-toggle="modal">
                                <img src="{{asset('assets/img/quality/thermo.jpg')}}" height=300px alt="" >
                            </a>
                        </div>
                        <div class="news-content">
                            <a href="#news-modal-3" data-toggle="modal">
                                <h3 class="subtitle">Thermocycling Test</h3>
                            </a>
                         
                            <p>Thermocycling Testing determines the ability of parts to resist extremely low and extremely high temperatures. as well as their ability to withstand cyclical exposures to these temperature extremes.</p>
                            <a class="btn" href="#news-modal-3" data-toggle="modal">Read More</a>
                          
                        </div>
                    </div>
                </div>

                <!-- News item 4 -->
                <div class="col-md-4 col-sm-6" style="margin-top: 10px">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="#news-modal-4" data-toggle="modal">
                                <img src="{{asset('assets/img/quality/DimentionTest.png')}}" height=300px alt="" >
                            </a>
                        </div>
                        <div class="news-content">
                            <a href="#news-modal-5" data-toggle="modal">
                                <h3 class="subtitle">Dimensional Tests</h3>
                            </a>
                         
                            <p>Pipe diameter, wall thickness, ovality and lenght of pipe are measured on a regular basis to insure compliance with standart requirements.</p>
                            <a class="btn" href="#news-modal-4" data-toggle="modal">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- News item 5 -->
                <div class="col-md-4 col-sm-6" style="margin-top: 10px">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="#news-modal-5" data-toggle="modal">
                                <img src="{{asset('assets/img/quality/creep-testing.jpg')}}" height=300px alt="" >
                            </a>
                        </div>
                        <div class="news-content">
                            <a href="#news-modal-5" data-toggle="modal">
                                <h3 class="subtitle">Creep Strength Test</h3>
                            </a>
                         
                            <p>TAGRO Pipes are subjected to creep tests according to DIN 8078 that determins service life and that provides the required information about the mechanical characteristics of the pipe.</p>
                            <a class="btn" href="#news-modal-5" data-toggle="modal">Read More</a>
                            <br>
                        </div>
                    </div>
                </div>

                <!-- News item 6 -->
                <div class="col-md-4 col-sm-6" style="margin-top: 10px">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="#news-modal-6" data-toggle="modal">
                                <img src="{{asset('assets/img/quality/impact-strength.png')}}" height=300px alt="" >
                            </a>
                        </div>
                        <div class="news-content">
                            <a href="#news-modal-3" data-toggle="modal">
                                <h3 class="subtitle">Impact Strength</h3>
                            </a>
                         
                            <p>Impact resistance is the ability of a material to resist breaking under a shock loading. Standard test specimens prepared from TAGRO pipes are subjected to a pendulum type impact type load in accordance with DIN 8078 and EN ISO 15874.</p>
                            <a class="btn" href="#news-modal-6" data-toggle="modal">Read More</a>
                        </div>
                    </div>
                </div>

            </div>



            <!-- News 1 Modals -->
            <div class="news-modal modal fade" id="news-modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">

                                    <img src="{{asset('assets/img/quality/Mat_char.jpg')}}" alt="" >

                             

                                    <h2>Material Characterization Test</h2>

                                    <p> Testing the incoming resin is the first step in the quality control program. 
                            It is usually checked for contamination, melt index, density, 
                            DSC and 0IT Any resin that does not meet the raw material specifications is not used for the production.</p>


                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News 2 Modals -->
            <div class="news-modal modal fade" id="news-modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">

                                    <img src="{{asset('assets/img/quality/Thermal_Reservation.jpg')}}" alt="" >

                                 

                                    <h2>Thermal Reversion Properties</h2>

                                    <p>Thermal properties of plastic materials are equa lly important as mechanical 
                                    properties. Unlike metals, plastics are extremely sensitive to changes in temperature. 
                                    This difference in the coefficient of thermal expansion develops internal stresses and 
                                    stres concentrations in the polymer. 
                                    Pipes are subjected to thermal stresses inside a thermostatic chamber with a continuous 
                                    air circulation to observe shrinkage in accordance with DIN 8078, EN ISO 15874.</p>


                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News 3 Modals -->
            <div class="news-modal modal fade" id="news-modal-3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">

                                    <img src="{{asset('assets/img/quality/thermo.jpg')}}" alt="" >

                                    <h2>Thermocycling Testing</h2>

                                    <p>Thermocycling Testing determines the ability of parts to resist extremely low and extremely high temperatures. as well as their ability to withstand cyclical exposures to these temperature extremes. </p>

                                

                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New4 Modal -->
            <div class="news-modal modal fade" id="news-modal-4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">

                                    <img src="{{asset('assets/img/quality/DimentionTest.png')}}" alt="" >

                                    <h2>Dimensional Tests</h2>

                                    <p>Pipe diameter, wall thickness, ovality and lenght of pipe are measured on a regular basis to insure compliance with standart requirements. 
                                    The outside diameter wall thickness shall comply with the DIN 8077 and EN ISO 15874 specif ications.</p>

                                

                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New5 Modal -->
            <div class="news-modal modal fade" id="news-modal-5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">

                                    <img src="{{asset('assets/img/quality/creep-testing.jpg')}}" alt="" >

                                    <h2>Creep Strength Test (Short Term)</h2>

                                    <p>TAGRO Pipes are subjected to creep tests according to DIN 8078 that determins service life and that provides the required information about the mechanical characteristics of the pipe. The long-term burst strength of pipes is determined by subjecting the pipes to constant internal pressure and observing time to failure. </p>

                                

                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New6 Modal -->
            <div class="news-modal modal fade" id="news-modal-6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">

                                    <img src="{{asset('assets/img/quality/impact-strength.png')}}" alt="" >

                                    <h2>Impact Strength</h2>

                                    <p>Impact resistance is the ability of a material to resist breaking under a shock loading. Standard test specimens prepared from TAGRO pipes are subjected to a pendulum type impact type load in accordance with DIN 8078 and EN ISO 15874. </p>

                                

                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- News area ends -->


    <!-- Client area starts -->
    <section id="client" class="client-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Our Valuable <span>Clients</span></h2>
                        <p>We were hounered to work on the best projects, with a variety of customers who were always on top of our priorities.</p>
                    </div>
                </div>
            </div>

            <!-- client carousel -->
            <div class="owl-client" >

                <!-- item 1 -->
                <div class="item text-center" style="height:180px">
                    <img src="{{ asset('assets/img/clients/partner1.png') }}"  alt="">
                </div>

                <!-- item 2 -->
                <div class="item text-center" style="height:180px">
                    <img src="{{ asset('assets/img/clients/partner2.jpg') }}" alt="">
                </div>

                <!-- item 3 -->
                <div class="item text-center" style="height:180px">
                    <img src="{{ asset('assets/img/clients/partner3.png') }}"  alt="">
                </div>

                <!-- item 4 -->
                <div class="item text-center" style="height:180px">
                    <img src="{{ asset('assets/img/clients/partner4.png') }}" height=140px alt="">
                </div>

                <!-- item 5 -->
                <div class="item text-center" style="height:180px">
                    <img src="{{ asset('assets/img/clients/partner5.jpg') }}" height=140px alt="">
                </div>

                <!-- item 6 -->
                <div class="item text-center" style="height:180px">
                    <img src="{{ asset('assets/img/clients/partner6.jpeg') }}" height=140px alt="">
                </div>

                <!-- item 6 -->
                <div class="item text-center" style="height:180px">
                    <img src="{{ asset('assets/img/clients/partner7.png') }}" height=140px alt="">
                </div>

            </div>
            <!-- / client carousel -->

        </div>
    </section>
    <!-- Client area ends -->


    

    <!-- Contact area starts -->
    <section id="contact" class="contact-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>GET IN <span>TOUCH</span></h2>
                        <p>
                            Need to find out how can we help you? Let's talk
                        </p>
                    </div>
                </div>
            </div>

            <div class="row contact-infos">
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-info">
                        <i class="fa fa-send"></i>
                        <p>
                            <a href="mailto:info@tagro-egypt.com" title="Click to mail">info@tagro-egypt.com</a>
                            <br>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-info">
                        <i class="fa fa-map-marker"></i>
                        <p>18 B Egyption Saudi - Nozha St<br>
                        Cairo - Egypt</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="contact-info">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>
                            <a href="tel:+20224151218" title="Click to Call">+2 02-24151218</a>
                            <br>
                            <a href="tel:0000" title="Click to Call">ADD ANOTHER NUMBER</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact area ends -->


    <!-- Google Map starts-->
    <iframe id="contactgoogleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d420.48485248460446!2d31.340671847974413!3d30.07634100987697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f80c0dc1cf3%3A0x4c89a75d157e1733!2sTagro+Co.!5e0!3m2!1sen!2seg!4v1551618921871" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!-- Google Map ends -->



    <!-- Footer area starts -->
    <footer class="footer-area">
        <div class="container text-center">
            <img src="{{ asset('imgs/logo.png') }}" alt="">
            <p>Let us be your next partner</p>
            <ul class="social-links">
                <li><a target="_blank" href="https://facebook.com/TagroCompany/"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/TagroEgypt"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://plus.google.com/u/0/109642517085020313026/posts"><i class="fa fa-google-plus"></i></a></li>
         
            </ul>
        </div>
    </footer>
    <!-- Footer area ends -->

    <div class="copyright-text text-center">
        <p>&copy; 2019 Tagro, Copyrights Reserved</p>
    </div>




    <!-- Latest jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Owl Carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Mixitup js -->
    <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>

    <!-- Magnific popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- Waypoint js -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>

    <!-- Ajax Mailchimp js -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- GOOGLE MAP JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>


    <!-- Main js-->
    <script src="{{ asset('assets/js/main_script.js') }}"></script>
</body>

</html>
