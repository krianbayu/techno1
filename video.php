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
<?php require 'header/header.php'; ?>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
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
				<button class="button">Search</button>
			</div>
		</div>
		<!-- Search Section / End -->


		<div class="col-md-12">
			<div class="row">

				<!-- Listing Item -->
				<div class="col-lg-4 col-md-6">
					<a href="listings-single-page.html" class="listing-item-container compact" >
						<div class="listing-item">
							<img src="images/listing-item-01.jpg" alt="">

							<div class="listing-badge now-open">Now Open</div>

							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="3.5"></div>
								<h3>Tom's Restaurant</h3>
								<span>964 School Street, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-4 col-md-6">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="images/listing-item-02.jpg" alt="">
							<div class="listing-item-details">
								<ul>
									<li>Friday, August 10</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="5.0"></div>
								<h3>Sticky Band</h3>
								<span>Bishop Avenue, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-4 col-md-6">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="images/listing-item-03.jpg" alt="">
							<div class="listing-item-details">
								<ul>
									<li>Starting from $59 per night</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="2.0"></div>
								<h3>Hotel Govendor</h3>
								<span>778 Country Street, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>

					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-4 col-md-6">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="images/listing-item-04.jpg" alt="">

							<div class="listing-badge now-open">Now Open</div>

							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="5.0"></div>
								<h3>Burger House</h3>
								<span>2726 Shinn Street, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-4 col-md-6">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="images/listing-item-05.jpg" alt="">
							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="3.5"></div>
								<h3>Airport</h3>
								<span>1512 Duncan Avenue, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-4 col-md-6">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="images/listing-item-06.jpg" alt="">

							<div class="listing-badge now-closed">Now Closed</div>

							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="4.5"></div>
								<h3>Think Coffee</h3>
								<span>215 Terry Lane, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
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
