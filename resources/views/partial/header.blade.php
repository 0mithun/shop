<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>{{ $pageTitle }} - {{ config('app.name') }}</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/images/favicon.ico">

    <!-- jQuery -->
    <script src="{{ asset('frontend') }}/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="{{ asset('frontend') }}/css/bootstrap.css?v=1.0" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('frontend') }}/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{ asset('frontend') }}/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="{{ asset('frontend') }}/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{ asset('frontend') }}/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="{{ asset('frontend') }}/plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- custom style -->
    <link href="{{ asset('frontend') }}/css/ui.css?v=1.0" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{ asset('frontend') }}/js/script.js" type="text/javascript"></script>

</head>

<body>
    <header class="section-header">
        <section class="header-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand-wrap">
                            <img class="logo" src="{{ asset('frontend') }}/images/logo-dark.png">
                            <h2 class="logo-text">LOGO</h2>
                        </div>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <form action="#" class="search-wrap">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- search-wrap .end// -->
                    </div>
                    <!-- col.// -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="widgets-wrap d-flex justify-content-end">
                            <div class="widget-header">
                                <a href="#" class="icontext">
                                    <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="text-wrap">
                                        <small>Basket</small>
                                        <span>3 items</span>
                                    </div>
                                </a>
                            </div>
                            <!-- widget .// -->
                            <div class="widget-header dropdown">
                                <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                                    <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap">
                                        <small>Hello.</small>
                                        <span>Login <i class="fa fa-caret-down"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <form class="px-4 py-3">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" placeholder="email@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Have account? Sign up</a>
                                    <a class="dropdown-item" href="#">Forgot password?</a>
                                </div>
                                <!--  dropdown-menu .// -->
                            </div>
                            <!-- widget  dropdown.// -->
                        </div>
                        <!-- widgets-wrap.// -->
                    </div>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- container.// -->
        </section>
        <!-- header-main .// -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"> <strong>All category</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fashion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Supermarket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Baby &amp Toys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fitness sport</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#">Foods and Drink</a>
                                <a class="dropdown-item" href="#">Home interior</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Category 1</a>
                                <a class="dropdown-item" href="#">Category 2</a>
                                <a class="dropdown-item" href="#">Category 3</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- collapse .// -->
            </div>
            <!-- container .// -->
        </nav>

    </header>
    <!-- section-header.// -->

    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- ================= main slide ================= -->
                    <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                        <div class="item-slide">
                            <img src="{{ asset('frontend') }}/images/banners/slide1.jpg">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend') }}/images/banners/slide2.jpg">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend') }}/images/banners/slide3.jpg">
                        </div>
                    </div>
                    <!-- ============== main slidesow .end // ============= -->
                </div>
                <!-- col.// -->
                <div class="col-md-3">
                    <div class="card mt-2 mb-2">
                        <figure class="itemside">
                            <div class="aside">
                                <div class="img-wrap img-sm border-right"><img src="{{ asset('frontend') }}/images/items/3.jpg"></div>
                            </div>
                            <figcaption class="p-3">
                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                <div class="price-wrap">
                                    <span class="price-new b">$1280</span>
                                    <del class="price-old text-muted">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </figcaption>
                        </figure>
                    </div>
                    <!-- card.// -->
                    <div class="card mb-2">
                        <figure class="itemside">
                            <div class="aside">
                                <div class="img-wrap img-sm border-right"><img src="{{ asset('frontend') }}/images/items/3.jpg"></div>
                            </div>
                            <figcaption class="p-3">
                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                <div class="price-wrap">
                                    <span class="price-new b">$1280</span>
                                    <del class="price-old text-muted">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </figcaption>
                        </figure>
                    </div>
                    <!-- card.// -->
                    <div class="card mb-2">
                        <figure class="itemside">
                            <div class="aside">
                                <div class="img-wrap img-sm border-right"><img src="{{ asset('frontend') }}/images/items/3.jpg"></div>
                            </div>
                            <figcaption class="p-3">
                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                <div class="price-wrap">
                                    <span class="price-new b">$1280</span>
                                    <del class="price-old text-muted">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </figcaption>
                        </figure>
                    </div>
                    <!-- card.// -->
                </div>
                <!-- col.// -->
            </div>
        </div>
        <!-- container .//  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->