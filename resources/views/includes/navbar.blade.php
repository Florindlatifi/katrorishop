<header class="hero">
	<div class="hero-wrapper">
		<!--============ Secondary Navigation ===============================================================-->
		<div class="secondary-navigation">
			<div class="container">
				<ul class="left">
					<li>
					<span>
					<i class="fa fa-phone"></i> +38162220330
					</span>
					</li>
				</ul>
					<!--end left-->
				<ul class="right">
					<li>
					<a href="{{ route ('my-ads') }}">
					<i class="fa fa-heart"></i>My Ads
					</a>
					</li>

					<li>
					<a href="{{ route ('sign-in') }}">
					<i class="fa fa-sign-in"></i>Sign In
					</a>
					</li>
					<li>
					<a href="{{ route ('register') }}">
					<i class="fa fa-pencil-square-o"></i>Register
					</a>
					</li>
				</ul>
			<!--end right-->
			</div>
			<!--end container-->
		</div>
		<!--============ End Secondary Navigation ===========================================================-->
		<!--============ Main Navigation ====================================================================-->
		<div class="main-navigation">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
					<a class="navbar-brand" href="index.html">
						<img src="{{asset('images/logo.png')}}" alt="">KATRORISHOP
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbar">
					<!--Main navigation list-->
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route ('index') }}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('contact') }}">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('seller-detail-1') }}">Seller Detail</a>
							</li>
							<li class="nav-item has-child">
								<a class="nav-link" href="#">Extras</a>
								<!--1st level -->
								<ul class="child">
									<li class="nav-item">
									<a href="{{ route ('my-profile') }}" class="nav-link">My Profile</a>
									</li>

									<li class="nav-item">
									<a href="{{ route ('change-password') }}" class="nav-link">Change
									Password</a>
									</li>
									<li class="nav-item">
									<a href="{{ route ('sign-in') }}" class="nav-link">Sign In</a>
									</li>
									<li class="nav-item">
									<a href="{{ route ('register') }}" class="nav-link">Register</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="{{ route ('submit') }}" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
							</li>
						</ul>
						<!--Main navigation list-->
					</div>
					<!--end navbar-collapse-->
				</nav>
				<!--end navbar-->
			</div>
			<!--end container-->
		</div>
		<!--============ End Main Navigation ================================================================-->
		<!--============ Page Title =========================================================================-->
		<div class="page-title">
			<div class="container">
				<h1 class="opacity-40 center">
					<a href="#">Buy</a>, <a href="#">Sell</a> or <a href="#">Find</a> What You need
				</h1>
			</div>
		<!--end container-->
		</div>
		<!--============ End Page Title =====================================================================-->
		<!--============ Hero Form ==========================================================================-->
		<form class="hero-form form">
			<div class="container">
			<!--Main Form-->
				<div class="main-search-form">
					<div class="form-row">
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<label for="what" class="col-form-label">What?</label>
								<input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
							</div>
							<!--end form-group-->
						</div>
						<!--end col-md-3-->
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
							<label for="input-location" class="col-form-label">Where?</label>
							<input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
							<span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
							</div>
							<!--end form-group-->
						</div>
						<!--end col-md-3-->
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
							<label for="category" class="col-form-label">Category?</label>
							<select name="category" id="category" data-placeholder="Select Category">
							<option value="">Select Category</option>
							<option value="1">Computers</option>
							<option value="2">Real Estate</option>
							<option value="3">Cars & Motorcycles</option>
							<option value="4">Furniture</option>
							<option value="5">Pets & Animals</option>
							</select>
							</div>
							<!--end form-group-->
						</div>
						<!--end col-md-3-->
						<div class="col-md-3 col-sm-3">
							<button type="submit" class="btn btn-primary width-100">Search</button>
						</div>
						<!--end col-md-3-->
					</div>
					<!--end form-row-->
				</div>
				<!--end main-search-form-->
			<!--Alternative Form-->
			<!--end alternative-search-form-->
			</div>
			<!--end container-->
		</form>
		<!--============ End Hero Form ======================================================================-->
		<div class="background">
			<div class="background-image original-size">
				<img src="{{asset('images/hero-background-icons.jpg')}}" alt="">
			</div>
			<!--end background-image-->
		</div>
		<!--end background-->
	</div>
	<!--end hero-wrapper-->
</header>