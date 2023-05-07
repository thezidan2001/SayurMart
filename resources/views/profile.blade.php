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
                        <a href="/home" class="img-wrap"> <img src="build/assets/images/items/logo.png"> </a>
                    </div>
                    <div class="col-lg-8 col-12 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <a class="fa fa-search" href="/catalogue"></a>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div>
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header  mr-3">
                                <a href="/cart" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                                <span class="badge badge-pill badge-danger notify">0</span>
                            </div>

                            <div class="widget-header icontext">
                                <a href="/profile" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>

                            </div>
                            <div class="icontext">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button>Logout</button>
                                </form>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- User Profile -->
                <div class="card user-profile">
                    <div class="card-header">
                        <h4 class="float-left mb-0 mt-2">User Profile</h4>
                        <a href="" class="btn btn-primary btn-100 float-right text-uppercase">Edit</a>
                    </div>

                    <div class="card-body pb-0 pt-0">

                    </div>


                    <div class="card-header">
                        <h5 class="float-left mb-0 mt-1 w-100 text-center">
                            <span class="text-info"> </span> <small class="text-muted font-italic">(Private)</small>
                        </h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6 text-sm-right">Name</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Job</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Company</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="card-header border-top">
                        <h5 class="float-left mb-0 mt-1">Contact</h5>
                    </div>

                    <div class="card-body">
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Phone no.</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->telephone }}
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Mobile no.</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->telephone }}
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Email</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->email }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-header border-top">
                        <h5 class="float-left mb-0 mt-1">Address</h5>
                    </div>

                    <div class="card-body">
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Country</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Town / City</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Street / Road</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Building</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Office</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Extra Details</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /User Profile -->

            </div>
        </div>
    </div>

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