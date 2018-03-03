<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Family Business - UC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">
<?php require 'header/header.php';?>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Listings</h2><span>Grid Layout With Sidebar</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Listings</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<!-- Search -->
		<div class="col-md-12">
			<div class="main-search-input gray-style margin-top-0 margin-bottom-10">

				<div class="main-search-input-item">
					<input type="text" placeholder="What are you looking for?" value=""/>
				</div>

				<div class="main-search-input-item location">
					<input type="text" placeholder="Location" value=""/>
					<a href="#"><i class="fa fa-dot-circle-o"></i></a>
				</div>

				<div class="main-search-input-item">
					<select data-placeholder="All Categories" class="chosen-select" >
						<option>All Categories</option>
						<option>Shops</option>
						<option>Hotels</option>
						<option>Restaurants</option>
						<option>Fitness</option>
						<option>Events</option>
					</select>
				</div>

				<button class="button">Search</button>
			</div>
		</div>
		<!-- Search Section / End -->


		<div class="col-md-12">

			<!-- Sorting - Filtering Section -->
			<div class="row margin-bottom-25 margin-top-30">


				<div class="col-md-12">
					<div class="fullwidth-filters">

						<!-- Panel Dropdown-->
						<div class="panel-dropdown float-right">
							<a href="#">Distance Radius</a>
							<div class="panel-dropdown-content">
								<input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
								<div class="panel-buttons">
									<button class="panel-cancel">Disable</button>
									<button class="panel-apply">Apply</button>
								</div>
							</div>
						</div>
						<!-- Panel Dropdown / End -->
					</div>
				</div>

			</div>
			<!-- Sorting - Filtering Section / End -->

			<div class="row">

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">

							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-01.jpg" alt="">
								<span class="tag">Eat & Drink</span>
							</div>

							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
									<h3>Bisnisnya Meynard</h3>
									<span>Manukan Wiyung, Jekarta</span>

								</div>

							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">

							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-02.jpg" alt="">
								<span class="tag">Events</span>
							</div>

							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Bisnisnya Krian</h3>
								<span>Geylang, Singapore</span>

								</div>

								<div class="listing-item-details">Misal ada info tambahan</div>

							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">

							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-03.jpg" alt="">
								<span class="tag">Hotels</span>
							</div>

							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Bisnisnya Dimas</h3>
								<span>Kuta Bali</span>

								</div>

								<div class="listing-item-details">Misal ada info tambahan</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">

							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-04.jpg" alt="">
								<span class="tag">Eat & Drink</span>
							</div>

							<!-- Content -->
							<div class="listing-item-content">


								<div class="listing-item-inner">
								<h3>Burger House</h3>
								<span>2726 Shinn Street, New York</span>

								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->


			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>

<?php require 'footer/footer.php'; ?>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>



</body>
</html>
