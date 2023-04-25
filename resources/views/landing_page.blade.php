<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="icon" href="build/assets/images/items/1.jpg" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="build/assets/css/bootstrap.css" rel="stylesheet">
    <link href="build/assets/css/ui.css" rel="stylesheet">
    <link href="build/assets/css/responsive.css" rel="stylesheet">

    <link href="build/assets/css/all.min.css" rel="stylesheet">
    <script src="build/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="build/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

</head>

<body>

    <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Delivery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link"> Call: +0000000000 </a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Russian </a></li>
                        </ul>
                    </li>
                </ul> <!-- list-inline //  -->

            </div> <!-- container //  -->
        </nav> <!-- header-top-light.// -->
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <a href="#" class="brand-wrap">
                            Company Logo
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-12 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header  mr-3">
                                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                                <span class="badge badge-pill badge-danger notify">0</span>
                            </div>

                            <div class="widget-header icontext">
                                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                            </div>
                            <div class="widget-header">
                                <div class="text">
                                    <span class="text-muted">Welcome!</span>
                                </div>
                                <a href="/login">Sign in</a> |
                                <a href="/register" class="mr-3"> Register</a>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> All category</strong></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Foods and Drink</a>
                                <a class="dropdown-item" href="#">Home interior</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Category 1</a>
                                <a class="dropdown-item" href="#">Category 2</a>
                                <a class="dropdown-item" href="#">Category 3</a>
                            </div>
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
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clothing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Furnitures</a>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>
    </header> <!-- section-header.// -->
    <!-- ========================= SECTION INTRO ========================= -->
    <section class="section-intro padding-y-sm">
        <div class="container">
            <div class="intro-banner-wrap">
                <img src="build/assets/images/1.jpg" class="img-fluid rounded">
            </div>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <!-- ========================= SECTION FEATURE ========================= -->

    <!-- ========================= SECTION FEATURE END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->

    <!-- ========================= SECTION CONTENT END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->

    <!-- ========================= SECTION CONTENT END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-bottom-sm">
        <div class="container">
            <header class="section-heading">
                <a href="#" class="btn btn-outline-primary float-right">See all</a>
                <h3 class="section-title">Our Products</h3>
            </header><!-- sect-heading -->
            <div class="row">
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="build/assets/images/items/1.jpg"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Tomat</a>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 25 reviews</span>
                            </div>
                            <div class="price mt-1">Rp 5.000/kg</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="build/assets/images/items/2.jpg"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Timun</a>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:100%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviews</span>
                            </div>
                            <div class="price mt-1">Rp 6.000/kg</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="build/assets/images/items/3.jpg"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Wortel</a>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:100%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 20 reviews</span>
                            </div>
                            <div class="price mt-1">Rp 10.000/kg</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="build/assets/images/items/4.jpg"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Terong</a>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 17 reviews</span>
                            </div>
                            <div class="price mt-1">Rp 8.000/kg</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <!-- ========================= SECTION  ========================= -->

    <!-- ========================= SECTION  END// ========================= -->
    <!-- ========================= SECTION  ========================= -->

    <!-- ========================= SECTION  END// ======================= -->
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top bg">
        <div class="container">
            <section class="footer-top  padding-y">
                <div class="row">
                    <aside class="col-md col-6">
                        <h6 class="title">Company</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Find a store</a></li>
                            <li> <a href="#">Rules and terms</a></li>
                            <li> <a href="#">Sitemap</a></li>
                        </ul>
                    </aside>


                    <aside class="col-md">
                        <h6 class="title">Social</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
                            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
                            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
                        </ul>
                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->
            <section class="footer-bottom row">
                <div class="col-md-2">
                    <p class="text-muted"> SayurMart </p>
                </div>
                <div class="col-md-8 text-md-center">
                    <span class="px-2">@Copyright. All rights reserved.</span>

                </div>

            </section>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</body>

</html>