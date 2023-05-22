<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Catalogue</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/images/favicon.ico') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/color-01.css') }}">

	<link rel="icon" href="{{ asset('build/assets/images/items/1.jpg') }}" type="image/x-icon" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ asset('build/assets/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('build/assets/css/ui.css') }}" rel="stylesheet">
	<link href="{{ asset('build/assets/css/responsive.css') }}" rel="stylesheet">

	<link href="{{ asset('build/assets/css/all.min.css') }}" rel="stylesheet">
	<script src="build/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="build/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

</head>

<body class="home-page home-01 ">

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
						<a href="/home" class="img-wrap"> <img src="{{ asset('build/assets/images/items/logo.png') }}"> </a>
					</div>
					<div class="col-lg-8 col-12 col-sm-12">
						<form action="#" class="search">
							<div class="input-group w-100">
								<input type="text" class="form-control" placeholder="Search">
								<div class="input-group-append">
									<!-- <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button> -->
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

	<!--main area-->
	<section class="section-content padding-bottom-sm">
        <div class="container">
            <header class="section-heading">
                <a href="/catalogue" class="btn btn-outline-primary float-right">Back to Catalogue</a>
            </header><!-- sect-heading -->
            <div class="row">
            <div class="container px-12 py-8 mx-auto">
                <div class="h-1 bg-gray-800 w-48"></div>
                <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="#" class="img-wrap"> <img src="{{ asset('build/assets/images/items/1.jpg') }}"> </a>
                        <div class="flex items-end justify-end w-full bg-cover">
                        </div>
                        <div class="px-5 py-3">
                            <div class="flex items-center justify-between mb-5">
                                <h3 class="text-gray-700 uppercase">{{ $product->product_name }}</h3>
                                <span class="mt-2 text-gray-500 font-semibold">${{ $product->product_price }}</span>
                            </div>
                            <form action="{{route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->product_name }}" name="name">
                                <input type="hidden" value="{{ $product->product_price }}" name="price">
                                {{-- <input type="hidden" value="{{ $product->image }}"  name="image"> --}}
                                
                                <input type="number" name="quantity" value="1" class="w-full text-center h-10 text-gray-800 outline-none rounded border border-gray-600 py-3" />
                                <button class="px-4 py-1.5 text-black text-sm bg-gray-900 rounded">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div> <!-- container .//  -->
    </section>
	<!--main area-->

	<!--footer area-->
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

	<script src="build/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="build/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="build/assets/js/bootstrap.min.js"></script>
	<script src="build/assets/js/chosen.jquery.min.js"></script>
	<script src="build/assets/js/owl.carousel.min.js"></script>
	<script src="build/assets/js/jquery.countdown.min.js"></script>
	<script src="build/assets/js/jquery.sticky.js"></script>
	<script src="build/assets/js/functions.js"></script>
</body>

</html>