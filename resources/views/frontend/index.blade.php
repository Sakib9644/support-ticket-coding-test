@extends('frontend.layouts.front')

@section('title', 'home')

@section('content')

<body class="body-wrapper">


	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="index.html">
							<img src="images/logo.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="index.html">Home</a>
								</li>
								<li class="nav-item dropdown dropdown-slide @@dashboard">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Dashboard<span><i class="fa fa-angle-down"></i></span>
									</a>
	
									<!-- Dropdown list -->
									<ul class="dropdown-menu">
										<li><a class="dropdown-item @@dashboardPage" href="{{route('dashboard')}}">Dashboard</a></li>

						
										<li class="dropdown dropdown-submenu dropright">
											<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
						
											<ul class="dropdown-menu" aria-labelledby="dropdown0501">
												<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
												<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown dropdown-slide @@pages">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Pages <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<ul class="dropdown-menu">
										<li><a class="dropdown-item @@about" href="about-us.html">About Us</a></li>
										<li><a class="dropdown-item @@contact" href="contact-us.html">Contact Us</a></li>
										<li><a class="dropdown-item @@profile" href="user-profile.html">User Profile</a></li>
										<li><a class="dropdown-item @@404" href="404.html">404 Page</a></li>
										<li><a class="dropdown-item @@package" href="package.html">Package</a></li>
										<li><a class="dropdown-item @@singlePage" href="single.html">Single Page</a></li>
										<li><a class="dropdown-item @@store" href="store.html">Store Single</a></li>
										<li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
										<li><a class="dropdown-item @@singleBlog" href="single-blog.html">Blog Details</a></li>
										<li><a class="dropdown-item @@terms" href="terms-condition.html">Terms &amp; Conditions</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown dropdown-slide @@listing">
									<a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Listing <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<ul class="dropdown-menu">
										<li><a class="dropdown-item @@category" href="category.html">Ad-Gird View</a></li>
										<li><a class="dropdown-item @@listView" href="ad-list-view.html">Ad-List View</a></li>
										
										<li class="dropdown dropdown-submenu dropleft">
											<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
						
											<ul class="dropdown-menu" aria-labelledby="dropdown0201">
												<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
												<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">

								@auth
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										{{ Auth::user()->name }} <i class="fa fa-user fa-fw"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									
										<li>
											<form method="POST" action="{{ route('logout') }}">
												@csrf
												<button type="submit" class="dropdown-item">
													{{ __('Log Out') }}
												</button>
											</form>
										</li>
									</ul>
								</li>
								@else
								<li class="nav-item">
									<a class="nav-link login-button" href="{{ route('login') }}">Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button" href="ad-listing.html">
										<i class="fa fa-plus-circle"></i> Add Listing
									</a>
								</li>
								@endauth
							</ul>
							
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	
	<!--===============================
	=            Hero Area            =
	================================-->
	
	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Buy & Sell Near You </h1>
						<p>Join the millions who buy and sell from each other <br> everyday in local communities around the world</p>
						<div class="short-popular-category-list text-center">
							<h2>Popular Category</h2>
							<ul class="list-inline">
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-bed"></i> Hotel</a></li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-grav"></i> Fitness</a>
								</li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-car"></i> Cars</a>
								</li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-cutlery"></i> Restaurants</a>
								</li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-coffee"></i> Cafe</a>
								</li>
							</ul>
						</div>
	
					</div>
					<!-- Advance Search -->
				
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>
	
	
	<!--===========================================
	=            Popular deals section            =
	============================================-->
	
	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Adds</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
						<div class="col-sm-12 col-lg-8">
							<!-- product card -->
							<div class="row">
								<!-- First Card -->
								@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							@if (session('success'))
								<div class="alert alert-success" role="alert">
									{{ session('success') }}
								</div>
							@endif
							
								<!-- Second Card with Support Ticket Form -->
								<div class="col-md-8 d-flex  justify-content-center">
							
									<div class="product-item bg-light d-flex  justify-content-center">
										<div class="card d-flex  justify-content-center">
								
											<div class="card-body">
												<h4 class="card-title text-danger"><a href="single.html">Support Ticket</a></h4>
												<p class="card-text text-danger">If you need assistance, please submit your support request below.</p>
												<style>
													.custom-textarea {
														height: 300px; /* Adjust this value as needed */
													}
												</style>
												
												<form method="POST" action="{{route("tickets.store")}}">
													@csrf
													<div class="form-group">
														<label for="supportMessage">Subject</label>
														<input class="form-control" id="supportMessage" name="subject" placeholder="" required></input>
													</div>
													<div class="form-group">
														<label for="supportMessage">Your Message</label>
														<textarea class="form-control custom-textarea" id="supportMessage" name="message" placeholder="Describe your issue or question here..." required></textarea>
													</div>
													<button type="submit" class="btn btn-primary mt-3">Submit Ticket</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	
	
	
						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
	<div class="product-item bg-light">
		<div class="card">
			<div class="thumb-content">
				<!-- <div class="price">$200</div> -->
				<a href="single.html">
					<img class="card-img-top img-fluid" src={{asset("images/products/products-2.jpg")}}  alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
				<ul class="list-inline product-meta">
					<li class="list-inline-item">
						<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
					</li>
					<li class="list-inline-item">
						<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
					</li>
				</ul>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
				<div class="product-ratings">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<!--==========================================
	=            All Category Section            =
	===========================================-->
	
	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>All Categories</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
					</div>
					<div class="row">
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-laptop icon-bg-1"></i>
									<h4>Electronics</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Laptops <span>93</span></a></li>
									<li><a href="category.html">Iphone <span>233</span></a></li>
									<li><a href="category.html">Microsoft <span>183</span></a></li>
									<li><a href="category.html">Monitors <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-apple icon-bg-2"></i>
									<h4>Restaurants</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cafe <span>393</span></a></li>
									<li><a href="category.html">Fast food <span>23</span></a></li>
									<li><a href="category.html">Restaurants <span>13</span></a></li>
									<li><a href="category.html">Food Track<span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-home icon-bg-3"></i>
									<h4>Real Estate</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Farms <span>93</span></a></li>
									<li><a href="category.html">Gym <span>23</span></a></li>
									<li><a href="category.html">Hospitals <span>83</span></a></li>
									<li><a href="category.html">Parolurs <span>33</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-shopping-basket icon-bg-4"></i>
									<h4>Shoppings</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Mens Wears <span>53</span></a></li>
									<li><a href="category.html">Accessories <span>212</span></a></li>
									<li><a href="category.html">Kids Wears <span>133</span></a></li>
									<li><a href="category.html">It & Software <span>143</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-briefcase icon-bg-5"></i>
									<h4>Jobs</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">It Jobs <span>93</span></a></li>
									<li><a href="category.html">Cleaning & Washing <span>233</span></a></li>
									<li><a href="category.html">Management <span>183</span></a></li>
									<li><a href="category.html">Voluntary Works <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-car icon-bg-6"></i>
									<h4>Vehicles</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Bus <span>193</span></a></li>
									<li><a href="category.html">Cars <span>23</span></a></li>
									<li><a href="category.html">Motobike <span>33</span></a></li>
									<li><a href="category.html">Rent a car <span>73</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-paw icon-bg-7"></i>
									<h4>Pets</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cats <span>65</span></a></li>
									<li><a href="category.html">Dogs <span>23</span></a></li>
									<li><a href="category.html">Birds <span>113</span></a></li>
									<li><a href="category.html">Others <span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
	
								<div class="header">
									<i class="fa fa-laptop icon-bg-8"></i>
									<h4>Services</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cleaning <span>93</span></a></li>
									<li><a href="category.html">Car Washing <span>233</span></a></li>
									<li><a href="category.html">Clothing <span>183</span></a></li>
									<li><a href="category.html">Business <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
	
	
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>
	
	
	<!--====================================
	=            Call to Action            =
	=====================================-->
	
	<section class="call-to-action overly bg-3 section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-8">
					<div class="content-holder">
						<h2>Start today to get more exposure and
						grow your business</h2>
						<ul class="list-inline mt-30">
							<li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a></li>
							<li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser Listing</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>
	
	<!--============================
	=            Footer            =
	=============================-->
	
	<footer class="footer section section-sm">
	  <!-- Container Start -->
	  <div class="container">
		<div class="row">
		  <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
			<!-- About -->
			<div class="block about">
			  <!-- footer logo -->
			  <img src={{asset("images/logo-footer.png")}} alt="logo">
			  <!-- description -->
			  <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		  </div>
		  <!-- Link list -->
		  <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
			<div class="block">
			  <h4>Site Pages</h4>
			  <ul>
				<li><a href="dashboard-my-ads.html">My Ads</a></li>
				<li><a href="dashboard-favourite-ads.html">Favourite Ads</a></li>
				<li><a href="dashboard-archived-ads.html">Archived Ads</a></li>
				<li><a href="dashboard-pending-ads.html">Pending Ads</a></li>
				<li><a href="terms-condition.html">Terms & Conditions</a></li>
			  </ul>
			</div>
		  </div>
		  <!-- Link list -->
		  <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
			<div class="block">
			  <h4>Admin Pages</h4>
			  <ul>
				<li><a href="category.html">Category</a></li>
				<li><a href="single.html">Single Page</a></li>
				<li><a href="store.html">Store Single</a></li>
				<li><a href="single-blog.html">Single Post</a>
				</li>
				<li><a href="blog.html">Blog</a></li>
	
	
	
			  </ul>
			</div>
		  </div>
		  <!-- Promotion -->
		  <div class="col-lg-4 col-md-7">
			<!-- App promotion -->
			<div class="block-2 app-promotion">
			  <div class="mobile d-flex  align-items-center">
				<a href="index.html">
				  <!-- Icon -->
				  <img src={{asset("images/footer/phone-icon.png")}}  alt="mobile-icon">
				</a>
				<p class="mb-0">Get the Dealsy Mobile App and Save more</p>
			  </div>
			  <div class="download-btn d-flex my-3">
				<a href="index.html"><img src={{asset("images/apps/google-play-store.png")}}  class="img-fluid" alt=""></a>
				<a href="index.html" class=" ml-3"><img src={{asset("images/apps/apple-app-store.png")}} class="img-fluid" alt=""></a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Container End -->
	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
	  <!-- Container Start -->
	  <div class="container">
		<div class="row">
		  <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
			<!-- Copyright -->
			<div class="copyright">
			  <p>Copyright &copy; <script>
				  var CurrentYear = new Date().getFullYear()
				  document.write(CurrentYear)
				</script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a></p>
			</div>
		  </div>
		  <div class="col-lg-6">
			<!-- Social Icons -->
			
		  </div>
		</div>
	  </div>
	  <!-- Container End -->
	  <!-- To Top -->
	  <div class="scroll-top-to">
		<i class="fa fa-angle-up"></i>
	  </div>
	</footer>
	
	<!-- 
	Essential Scripts
	=====================================-->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/popper.min.js"></script>
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<script src="plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="plugins/google-map/map.js" defer></script>
	
	<script src="js/script.js"></script>
	
	</body>
@endsection
