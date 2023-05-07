<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CheckOut</title>
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
<body class=" checkout page ">

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
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">Billing Address</h3>
					<form action="#" method="get" name="frm-billing">
						<p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input id="fname" type="text" name="fname" value="" placeholder="Your name">
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input id="lname" type="text" name="lname" value="" placeholder="Your last name">
						</p>
						<p class="row-in-form">
							<label for="email">Email Addreess:</label>
							<input id="email" type="email" name="email" value="" placeholder="Type your email">
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
						</p>
						<p class="row-in-form">
							<label for="add">Address:</label>
							<input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
						</p>
						<p class="row-in-form">
							<label for="country">Country<span>*</span></label>
							<input id="country" type="text" name="country" value="" placeholder="United States">
						</p>
						<p class="row-in-form">
							<label for="zip-code">Postcode / ZIP:</label>
							<input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
						</p>
						<p class="row-in-form">
							<label for="city">Town / City<span>*</span></label>
							<input id="city" type="text" name="city" value="" placeholder="City name">
						</p>
						<p class="row-in-form fill-wife">
							<label class="checkbox-field">
								<input name="create-account" id="create-account" value="forever" type="checkbox">
								<span>Create an account?</span>
							</label>
							<label class="checkbox-field">
								<input name="different-add" id="different-add" value="forever" type="checkbox">
								<span>Ship to a different address?</span>
							</label>
						</p>
					</form>
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Payment Method</h4>
						<p class="summary-info"><span class="title">Check / Money order</span></p>
						<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
								<span>Direct Bank Transder</span>
								<span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>visa</span>
								<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
								<span>Paypal</span>
								<span class="payment-desc">You can pay with your credit</span>
								<span class="payment-desc">card if you don't have a paypal account</span>
							</label>
						</div>
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$100.00</span></p>
						<a href="thankyou.html" class="btn btn-medium">Place order now</a>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box f-title">Shipping method</h4>
						<p class="summary-info"><span class="title">Flat Rate</span></p>
						<p class="summary-info"><span class="title">Fixed $50.00</span></p>
						<h4 class="title-box">Discount Codes</h4>
						<p class="row-in-form">
							<label for="coupon-code">Enter Your Coupon code:</label>
							<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
						</p>
						<a href="#" class="btn btn-small">Apply</a>
					</div>
				</div>

				<div class="wrap-show-advance-info-box style-1 box-in-site">
					<h3 class="title-box">Most Viewed Products</h3>
					<div class="wrap-products">
						<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item new-label">new</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_17.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item sale-label">sale</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_15.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item new-label">new</span>
										<span class="flash-item sale-label">sale</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_01.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item bestseller-label">Bestseller</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_21.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_03.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item sale-label">sale</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item new-label">new</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="build/assets/images/products/digital_05.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item bestseller-label">Bestseller</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>
						</div>
					</div><!--End wrap-products-->
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->

	<script src="build/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="build/assets/js/bootstrap.min.js"></script>
	<script src="build/assets/js/chosen.jquery.min.js"></script>
	<script src="build/assets/js/owl.carousel.min.js"></script>
	<script src="build/assets/js/jquery.sticky.js"></script>
	<script src="build/assets/js/functions.js"></script>
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

</body>
</html>