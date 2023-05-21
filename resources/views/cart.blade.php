<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping Cart</title>
	<link rel="shortcut icon" type="image/x-icon" href="build/assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="build/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="build/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="build/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="build/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="build/assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="build/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="build/assets/css/color-01.css">

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

<body class=" shopping-cart page ">

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
	<main class="my-8">
        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-blue-400 rounded">
                            <p class="text-white">{{ $message }}</p>
                        </div>
                    @endif
                    <h3 class="text-3xl font-bold">Carts</h3>
                    <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                            <thead>
                                <tr class="h-12 uppercase">
                                    <th class="hidden md:table-cell"></th>
                                    <th class="text-left">Name</th>
                                    <th class="pl-5 text-left lg:text-right lg:pl-0">
                                        <span class="lg:hidden" title="Quantity">Qtd</span>
                                        <span class="hidden lg:inline">Quantity</span>
                                    </th>
                                    <th class="hidden text-right md:table-cell"> price</th>
                                    <th class="hidden text-right md:table-cell"> Remove </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="hidden pb-4 md:table-cell" style="width:230px;">
                                            <a href="#">
                                                <img src="{{ $item->attributes->image }}" class="w-[200px] rounded" alt="Thumbnail">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <p class="mb-2 text-gray-900 font-bold">{{ $item->name }}</p>
                                            </a>
                                        </td>
                                        <td class="justify-center mt-6 md:justify-end md:flex">
                                            <div class="h-10 w-28">
                                                <div class="relative flex flex-row w-full h-8">
                                                    <form action="{{ route('cart.update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item->id}}" class="" >
                                                        <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                                        class="w-full text-center h-10 text-gray-800 outline-none rounded border border-gray-600 py-3" />
                                                        <button class="w-full px-4 mt-1 py-1.5 text-sm rounded shadow text-violet-100 bg-gray-800">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="hidden text-right md:table-cell">
                                            <span class="text-sm font-medium lg:text-base">
                                                ${{ $item->price }}
                                            </span>
                                        </td>
                                        <td class="hidden text-right md:table-cell">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="px-3 py-1 text-black bg-gray-800 shadow rounded-full">x</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="flex justify-between items-center my-5">
                            <div class="font-semibold text-2xl">Total: ${{ Cart::getTotal() }}</div>
                            <div>
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-gray-800">Clear Carts</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
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
	<script src="build/assets/js/bootstrap.min.js"></script>
	<script src="build/assets/js/chosen.jquery.min.js"></script>
	<script src="build/assets/js/owl.carousel.min.js"></script>
	<script src="build/assets/js/jquery.sticky.js"></script>
	<script src="build/assets/js/functions.js"></script>
	<!--footer area-->
</body>

</html>