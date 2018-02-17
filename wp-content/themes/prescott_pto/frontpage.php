<?php
/**
 * The homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prescott_pto
 */

// get_header(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Giving</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
<!-- 
			<section class="page_topline ls table_section table_section_md columns_padding_0 section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-3 text-center text-md-left">
							<div class="page_social_icons darklinks">
								<a class="social-icon soc-facebook" href="#" title="Facebook"></a>
								<a class="social-icon soc-twitter" href="#" title="Twitter"></a>
								<a class="social-icon soc-google" href="#" title="Google"></a>
								<a class="social-icon soc-linkedin" href="#" title="LinkedIn"></a>
								<a class="social-icon soc-flickr" href="#" title="Flickr"></a>
								<a class="social-icon soc-rss" href="#" title="Rss"></a>
							</div>
						</div>

						<div class="col-md-9 text-center text-md-right">

							<div class="content-spacing">

								<div class="media small-teaser text-left">
									<div class="media-left media-middle">
										<div class="teaser_icon size_normal">
											<i class="fa fa-envelope-square" aria-hidden="true"></i>
										</div>
									</div>
									<div class="media-body media-middle">
										<p class="fontsize_20">
								info@giving.com
							</p>
										<p class="fontsize_12">
								Our email
							</p>
									</div>
								</div>

								<div class="media small-teaser text-left">
									<div class="media-left media-middle">
										<div class="teaser_icon size_normal">
											<i class="fa fa-phone-square" aria-hidden="true"></i>
										</div>
									</div>
									<div class="media-body media-middle">
										<p class="fontsize_20">
								800 516 3290
							</p>
										<p class="fontsize_12">
								9:00 A.M. - 5:00 P.M.
							</p>
									</div>
								</div>

								<a href="donation.html" class="theme_button color1 wide_button">Donate</a>

							</div>

						</div>
					</div>
				</div>
			</section> -->

			<header class="page_header table_section columns_padding_0 section_padding_15 toggler_right">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<a href="./" class="logo">
								<img src="images/prescott/prescott-logo.png" alt="" />
							</a>
							<!-- header toggler -->
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>
						<div class="col-md-9 text-right">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="active">
										<a href="index.html">Home</a>
										<!-- <ul>
											<li>
												<a href="index.html">MultiPage</a>
											</li>
											<li>
												<a href="index_singlepage.html">SinglePage</a>
											</li>
											<li>
												<a href="admin_index.html">Admin Dashboard</a>
											</li>

										</ul> -->
									</li>

									<!-- blog -->
									<li>
										<a href="#">Events</a>
										<!-- <ul>

											<li>
												<a href="blog-right.html">Right Sidebar</a>
											</li>
											<li>
												<a href="blog-left.html">Left Sidebar</a>
											</li>
											<li>
												<a href="blog-full.html">No Sidebar</a>
											</li>
											<li>
												<a href="blog-mosaic.html">Blog Grid</a>
											</li>

											<li>
												<a href="blog-single-right.html">Post</a>
												<ul>
													<li>
														<a href="blog-single-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="blog-single-video-right.html">Video Post</a>
												<ul>
													<li>
														<a href="blog-single-video-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

										</ul> -->
									</li>
									<!-- eof blog -->

									<li>
										<a href="#">Volunteer</a>
										<!-- <div class="mega-menu">
											<ul class="mega-menu-row">
												<li class="mega-menu-col">
													<a href="#">Headers</a>
													<ul>
														<li>
															<a href="header1.html">Header Type 1</a>
														</li>
														<li>
															<a href="header2.html">Header Type 2</a>
														</li>
														<li>
															<a href="header3.html">Header Type 3</a>
														</li>
														<li>
															<a href="header4.html">Header Type 4</a>
														</li>
														<li>
															<a href="header5.html">Header Type 5</a>
														</li>
														<li>
															<a href="header6.html">Header Type 6</a>
														</li>
														<li>
															<a href="header7.html">Logo in Menu</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="#">Side Menus</a>
													<ul>
														<li>
															<a href="header_side1.html">Slide Left Light</a>
														</li>
														<li>
															<a href="header_side2.html">Slide Right Light</a>
														</li>
														<li>
															<a href="header_side3.html">Push Left Light</a>
														</li>
														<li>
															<a href="header_side4.html">Push Right Light</a>
														</li>
														<li>
															<a href="header_side5.html">Slide Left Dark</a>
														</li>
														<li>
															<a href="header_side6.html">Slide Right Dark</a>
														</li>
														<li>
															<a href="header_side7.html">Push Left Dark</a>
														</li>
														<li>
															<a href="header_side8.html">Push Right Dark</a>
														</li>
														<li>
															<a href="header_side_superfish.html">Superfish Menu</a>
														</li>
														<li>
															<a href="header_side_sticked.html">Sticked Menu</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="breadcrumbs1.html">Breadcrumbs</a>
													<ul>
														<li>
															<a href="breadcrumbs1.html">Breadcrumbs 1</a>
														</li>
														<li>
															<a href="breadcrumbs2.html">Breadcrumbs 2</a>
														</li>
														<li>
															<a href="breadcrumbs3.html">Breadcrumbs 3</a>
														</li>
														<li>
															<a href="breadcrumbs4.html">Breadcrumbs 4</a>
														</li>
														<li>
															<a href="breadcrumbs5.html">Breadcrumbs 5</a>
														</li>
														<li>
															<a href="breadcrumbs6.html">Breadcrumbs 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="footer1.html">Footers</a>
													<ul>
														<li>
															<a href="footer1.html">Footer Type 1</a>
														</li>
														<li>
															<a href="footer2.html">Footer Type 2</a>
														</li>
														<li>
															<a href="footer3.html">Footer Type 3</a>
														</li>
														<li>
															<a href="footer4.html">Footer Type 4</a>
														</li>
														<li>
															<a href="footer5.html">Footer Type 5</a>
														</li>
														<li>
															<a href="footer6.html">Footer Type 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="copyright1.html">Copyrights</a>

													<ul>
														<li>
															<a href="copyright1.html">Copyrights 1</a>
														</li>
														<li>
															<a href="copyright2.html">Copyrights 2</a>
														</li>
														<li>
															<a href="copyright3.html">Copyrights 3</a>
														</li>
														<li>
															<a href="copyright4.html">Copyrights 4</a>
														</li>
														<li>
															<a href="copyright5.html">Copyrights 5</a>
														</li>
													</ul>
												</li>

											</ul>
										</div>
									</li>
									<li>
										<a href="projects.html">Projects</a>
										<ul>
											<li>
												<a href="projects.html">Projects</a>
											</li>
											<li>
												<a href="projects2.html">Projects 2</a>
											</li>
											<li>
												<a href="projects3.html">Projects 3</a>
											</li>
											<li>
												<a href="single-project.html">Single project</a>
											</li>
										</ul> -->
									</li>


									<li>
										<a href="#">Join</a>
									</li>
									<li>
										<a href="#">About Us</a>
										<!-- <ul>

											<li>
												<a href="shortcodes_teasers.html">Shortcodes &amp; Widgets</a>
												<ul>
													<li>
														<a href="shortcodes_typography.html">Typography</a>
													</li>
													<li>
														<a href="shortcodes_buttons.html">Buttons</a>
													</li>
													<li>
														<a href="shortcodes_pricing.html">Pricing</a>
													</li>
													<li>
														<a href="shortcodes_teasers.html">Teasers</a>
													</li>
													<li>
														<a href="shortcodes_progress.html">Progress</a>
													</li>
													<li>
														<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
													</li>
													<li>
														<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
													</li>
													<li>
														<a href="shortcodes_widgets.html">Widgets</a>
													</li>
													<li>
														<a href="shortcodes_animation.html">Animation</a>
													</li>
													<li>
														<a href="shortcodes_icons.html">Template Icons</a>
													</li>
													<li>
														<a href="shortcodes_socialicons.html">Social Icons</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="#">About</a>
											</li>

											<li>
												<a href="timetable.html">Timetable</a>
											</li>

											<li>
												<a href="shop-right.html">Shop</a>
												<ul>
													<li>
														<a href="shop-right.html">Shop</a>
													</li>
													<li>
														<a href="shop-product-right.html">Single Product</a>
													</li>
													<li>
														<a href="shop-cart-right.html">Shopping Cart</a>
													</li>
													<li>
														<a href="shop-checkout-right.html">Checkout</a>
													</li>
													<li>
														<a href="shop-register.html">Registration</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="events-left.html">Events</a>
												<ul>
													<li>
														<a href="events-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="events-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="events-full.html">Full Width</a>
													</li>
													<li>
														<a href="event-single-left.html">Single Event</a>
														<ul>
															<li>
																<a href="event-single-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="event-single-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="event-single-full.html">Full Width</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li>
												<a href="team.html">Team</a>
												<ul>
													<li>
														<a href="team.html">Team</a>
													</li>
													<li>
														<a href="#">Team Member</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="careers.html">Careers</a>
											</li>

											<li>
												<a href="donation.html">Donation</a>
											</li>

											<li>
												<a href="comingsoon1.html">Comingsoon</a>
												<ul>
													<li>
														<a href="comingsoon1.html">Comingsoon</a>
													</li>
													<li>
														<a href="comingsoon2.html">Comingsoon 2</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="faq.html">FAQ</a>
												<ul>
													<li>
														<a href="faq.html">FAQ</a>
													</li>
													<li>
														<a href="faq2.html">FAQ 2</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="404.html">404</a>
												<ul>
													<li>
														<a href="404.html">404</a>
													</li>
													<li>
														<a href="4042.html">404 2</a>
													</li>
												</ul>
											</li>

										</ul> -->
									</li>

									<!-- gallery -->
									<!-- <li>
										<a href="gallery-regular.html">Gallery</a>

									</li> -->
									<!-- eof Gallery -->

									<!-- contacts -->
									<li>
										<a href="#feedback">Contact</a>
										<!-- <ul>
											<li>
												<a href="contact.html">Contact 1</a>
											</li>
											<li>
												<a href="contact2.html">Contact 2</a>
											</li>
											<li>
												<a href="contact3.html">Contact 3</a>
											</li>
											<li>
												<a href="contact4.html">Contact 4</a>
											</li>
											<li>
												<a href="contact5.html">Contact 5</a>
											</li>
										</ul> -->
									</li>
									<!-- eof contacts -->

								<!-- 	<li>
										<a href="#" class="search_modal_button">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li> -->
								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
					</div>
				</div>
			</header>

			<section class="intro_section page_mainslider ds black">
				<div class="flexslider" data-dots="false">
					<ul class="slides">

						<li>
							<img src="images/prescott/prescott-front-west-side.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInUp">
													<h3 class="bold">
														Prescott PTO
													</h3>
												</div>
												<div class="intro-layer topmargin_30" data-animation="fadeInUp">
													<p class="thin grey">We are a group of parent and teacher volunteers working together to make a great school even better.
													</p>
												</div>
												<div class="intro-layer topmargin_40" data-animation="fadeInUp">
													<a href="#about" class="theme_button color1 wide_button">Get Involved</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/prescott/prescott-historical-picture.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInUp">
													<h3 class="bold">
														Prescott PTO
													</h3>
												</div>
												<div class="intro-layer topmargin_30" data-animation="fadeInUp">
													<p class="thin grey">By supporting the administration and teachers at Prescott, we help bridge the gap between school and home.
													</p>
												</div>
												<div class="intro-layer topmargin_40" data-animation="fadeInUp">
													<a href="#about" class="theme_button color1 wide_button">Get Involved</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/prescott/prescott-rain-garden.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInUp">
													<h3 class="bold">
														Prescott PTO
													</h3>
												</div>
												<div class="intro-layer topmargin_30" data-animation="fadeInUp">
													<p class="thin grey">By supporting the administration and teachers at Prescott, we help bridge the gap between school and home and, in turn, make a great school even better.
													</p>
												</div>
												<div class="intro-layer topmargin_40" data-animation="fadeInUp">
													<a href="donation.html" class="theme_button color1 wide_button">Learn More</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->
			</section>

			<div class="top-lg-overlap-section color-bg-purple">
				<section class="ds section_padding_25 table_section color-bg-purple">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 text-center text-sm-left">
								<h3 class="entry-title bold">
									<a href="event-single-right.html" class="next-event-callout">
										<img src="https://www.runza.com/_resources/e1h:osdb1x-gq/image/75842250w212h107s4bc3/_fn/Runza_Logo_Green-Yellow-White.png" alt="Runza's">
									</a>
								</h3>
								<p class="item-meta grey">
						<span>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							Lincoln 13th Street
						</span>
						<span class="text-uppercase">
							<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
							FEB 20, 6 P.M.
						</span>
					</p>
							</div>
							<div class="col-sm-6 text-center text-sm-right">
								<h3 style="
							    margin-bottom: 0;
\							    font-weight: 700;
							    text-transform: uppercase;
							    ">Runzas</h3>
								<p>Join us between 5 and 7 for dinner at Runza's. 10% of all proceeds will be donated to Prescott PTO.</p>
								<!-- <div class="inline-block">
									<div class="small countdown chart-countdown" data-line="5" data-size="80"></div>
								</div> -->
							</div>
						</div>
					</div>
				</section>
			</div>



			<section id="about" class="cs section_padding_40 columns_padding_0 columns_margin_0">
				<div class="container-fluid">
					<div class="row">&nbsp;
					</div>
					<div class="row">
						<div class="col-12 color_bg_1 text-center">
							<h2>It's easy to get involved!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 after_cover color_bg_1 light bg_teaser text-center">
							<img src="images/prescott/bike-day-1116.jpg" alt="">
							<div class="toppadding_60 bottompadding_60 inline-block text-left">
								<h2 class="bold">.01 Attend Events</h2>
								<a href="careers.html" class="theme_button inverse">Learn more</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 after_cover color_bg_1 medium bg_teaser text-center">
							<img src="images/prescott/grandparents-day.jpg" alt="">
							<div class="toppadding_60 bottompadding_60 inline-block text-left">
								<h2 class="bold">.02 Volunteer</h2>
								<a href="careers.html" class="theme_button inverse">Learn more</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 after_cover color_bg_1 darken bg_teaser text-center">
							<img src="images/prescott/ribbon-cutting-1116.jpg" alt="">
							<div class="toppadding_60 bottompadding_60 inline-block text-left">
								<h2 class="bold">.03 Join the PTO</h2>
								<a href="careers.html" class="theme_button inverse">Learn more</a>
							</div>
						</div>
						<div class="col-md-12 after_cover color_bg_1 medium bg_teaser text-center">
							<img src="images/prescott/grandparents-day.jpg" alt="">
							<div class="toppadding_60 bottompadding_60 inline-block text-left">
								<h2 class="bold">.04 Donate to our Fundraisers</h2>
								<a href="careers.html" class="theme_button inverse">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</section>




			<section class="mini-gallery columns_margin_bottom_30">
				<div class="container-fluid fullwidth">
					<div class="row mini-gallery-wrapper">
							<img src="images/prescott/ribbon-cutting-1116.jpg" class="">
							<img src="images/prescott/therapy-dog-at-prescott-1017.jpg" class="">
							<img src="images/prescott/students-self-portraits-1217.jpg" class="">
							<img src="images/prescott/mayor-fun-run-0417.jpg" class="">
							<img src="images/prescott/dictionary-day-1017.jpg" class="">
							<img src="images/prescott/bike-day-1116.jpg" class="">
							<img src="images/prescott/grandparents-day.jpg" class="">
					</div>
					<center style="margin-top: 50px; margin-bottom: 100px;">
						<a href="/gallery-tile.html" class="theme_button">See more</a>
					</center>
				</div>
			</section>

			<section class="ls ms section_padding_top_100 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="section_header">
								Join the <span class="text-uppercase highlight">PTO</span> and help make a good school even better.
							</h2>
							<p class="bottommargin_30">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				</p>
							<a href="#" class="theme_button">Learn more</a>
						</div>
						<div class="col-md-6 text-center text-md-right bottommargin_0">
							<img src="images/person.png" alt="" />
						</div>
					</div>
				</div>
			</section>

			<section id="causes" class="ls section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header bold bottommargin_0">Upcoming
								<span class="highlight">events</span>
							</h2>
						</div>
					</div>
					<div class="row columns_padding_50 columns_margin_bottom_40">
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item text-center">
								<div class="item-media round-media">
									<img src="images/causes/01.jpg" alt="" />
									
								</div>
								<div class="item-content">
									<h4 class="text-uppercase bottommargin_20"><a href="single-project.html">Runza Family Night</a></h4>
									
									<p class="fontsize_18 grey bottommargin_30">
							Join us between 5 and 7 for dinner at Runza's. 10% of all proceeds will be donated<span class="horizontal-divider"> | </span><span class="highlight">Feb 20, 5 pm</span>
						</p>
									<a href="donation.html" class="theme_button wide_button">Add to Calendar</a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item text-center">
								<div class="item-media round-media">
									<img src="images/causes/02.jpg" alt="" />
								</div>
								<div class="item-content">
									<h4 class="text-uppercase bottommargin_20"><a href="single-project.html">Prescott Science Fair</a></h4>
									<p class="fontsize_18 grey bottommargin_30">
							Here's a short blurb abou the science fair. It's fun. You should come.<span class="horizontal-divider"> | </span> <span class="highlight">March 1, 6 pm</span>
						</p>
									<a href="donation.html" class="theme_button wide_button">Add to Calendar</a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<article class="vertical-item text-center">
								<div class="item-media round-media">
									<img src="images/causes/03.jpg" alt="" />
								</div>
								<div class="item-content">
									<h4 class="text-uppercase bottommargin_20"><a href="single-project.html">PTO Meeting</a></h4>
									<p class="fontsize_18 grey bottommargin_30">
							Here's a short blurb abou the PTO meeting. It's fun. You should come. <span class="horizontal-divider">/</span> <span class="highlight">April 20, 6:30 pm</span>
						</p>
									<a href="donation.html" class="theme_button wide_button">Add to Calendar</a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>

			<section class="ds page_video parallax section_padding_100 table_section table_section_md columns_padding_0 columns_margin_0">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-push-6">
							<div class="embed-responsive embed-responsive-2by1 topmargin_20">
								<a href="https://www.youtube.com/embed/xKxrkht7CpY" class="embed-placeholder">
									<img src="images/video.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-6 col-md-pull-6">
							<div class="with_padding_big with_border thick_border right-offset">
								<h2 class="section_header">
									<strong>Prescott Fieldtrip Fundraiser</strong>
								</h2>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								<div class="progress topmargin_30 bottommargin_40">
									<div class="progress-bar" role="progressbar" data-transitiongoal="75">
									</div>
								</div>
								<p class="inline-vertical-center">
						<span class="big bold grey">
							To Go <span class="highlight">$10,000</span>
							<span class="horizontal-divider thin">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</span>
						</span>
						<a href="donation.html" class="theme_button wide_button inverse2 margin_0">Donate</a>
					</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="volunteers" class="ls team_section parallax section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<h2 class="section_header bold">Our
								<span class="highlight">Team</span>
							</h2>
							<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
				</p>
							<p class="topmargin_30"> 
<!-- 					<a href="careers.html" class="theme_button margin_0">Join the PTO</a>
 -->				</p>
						</div>
					</div>
					<div class="row topmargin_60">
						<div class="col-sm-12">
							<div class="owl-carousel" data-responsive-lg="3" data-nav="false" data-dots="false">
								<div class="vertical-item team-item text-center">
									<div class="item-media">
										
										<img src="images/prescott/pto/gordon-coke.jpg" alt="" />
									</div>
									<div class="item-content">
										<h3 class="entry-title">
											Gordon
											<span class="highlight">Coke</span>
										</h3>
										<p>Secretary</p>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
										<p class="topmargin_20">
								<a href="#" class="theme_button inverse">Contact</a>
							</p>
									</div>
								</div>

								<div class="vertical-item team-item text-center">
									<div class="item-media">
										<img src="images/prescott/pto/therron-stackley.JPG" alt="" />
									</div>
									<div class="item-content">
										<h3 class="entry-title">
											Therron
											<span class="highlight">Stackley</span>
										</h3>
										<p>Willing Volunteer Assistant</p>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
										<p class="topmargin_20">
								<a href="#" class="theme_button inverse">Contact</a>
							</p>
									</div>
								</div>

								<div class="vertical-item team-item text-center">
									<div class="item-media">
										
										<img src="images/prescott/pto/Jami-Holbein-Swanson.jpg" alt="" />
									</div>
									<div class="item-content">
										<h3 class="entry-title">
											Jami

											<span class="highlight">Holbein Swanson</span>
										</h3>
										<p>Prescott PTO Board Member</p>
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
										<p class="topmargin_20">
								<a href="#" class="theme_button inverse">Contact</a>
							</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			

	<!-- 		<section id="fetures" class="cs page_counters parallax section_padding_top_75 section_padding_bottom_50 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 text-center">
							<div class="teaser media inline-block text-right">
								<div class="media-body">
									<h3 class="counter-wrap highlight" data-from="0" data-to="150" data-speed="1800">
										.
										<span class="counter" data-from="0" data-to="150" data-speed="1500">0</span>
									</h3>
									<h4 class="fontsize_18 text-uppercase">Successful
										<br> projects</h4>
								</div>
								<div class="media-right big-padding">
									<div class="teaser_icon highlight size_big">
										<i class="fa fa-heart"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="teaser media inline-block text-right">
								<div class="media-body">
									<h3 class="counter-wrap highlight" data-from="0" data-to="76" data-speed="1800">
										.
										<span class="counter" data-from="0" data-to="76" data-speed="1500">0</span>
									</h3>
									<h4 class="fontsize_18 text-uppercase">Volunteer
										<br> reached</h4>
								</div>
								<div class="media-right big-padding">
									<div class="teaser_icon highlight size_big">
										<i class="fa fa-user-plus" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="teaser media inline-block text-right">
								<div class="media-body">
									<h3 class="counter-wrap highlight" data-from="0" data-to="134" data-speed="1800">
										.
										<span class="counter" data-from="0" data-to="134" data-speed="1500">0</span>
									</h3>
									<h4 class="fontsize_18 text-uppercase">Children
										<br> Adopted</h4>
								</div>
								<div class="media-right big-padding">
									<div class="teaser_icon highlight size_big">
										<i class="fa fa-home" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->

<!-- 			<section id="blog" class="ls section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<h2 class="section_header bold">From the
								<span class="highlight">blog</span>
							</h2>
						</div>
					</div>
					<div class="row columns_margin_bottom_30 columns_margin_top_0">

						<div class="col-md-4 col-sm-6">
							<article class="vertical-item">
								<div class="item-media">
									<img src="images/blog_post1.jpg" alt="" />
								</div>
								<div class="item-content">
									<div class="entry-meta highlight">
										<span>
											<i class="fa fa-heart" aria-hidden="true"></i>
											2
										</span>
										<a href="blog-single-right.html#comments">
											<i class="fa fa-comment" aria-hidden="true"></i>
											4
										</a>
										<div class="entry-date main_bg_color round">
											<time datetime="2017-03-13T08:50:40+00:00">
												<span>
													<strong>23</strong>th</span>
												april
											</time>
										</div>
									</div>
									<h3 class="entry-title">
										<a href="blog-single-right.html">Missioners in charge</a>
									</h3>
									<p>
							At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque
						</p>
									<p class="topmargin_30">
							<a href="blog-single-right.html" class="theme_button inverse">Read more</a>
						</p>
								</div>
							</article>
						</div>

						<div class="col-md-4 col-sm-6">
							<article class="vertical-item">
								<div class="item-media">
									<img src="images/blog_post2.jpg" alt="" />
								</div>
								<div class="item-content">
									<div class="entry-meta highlight">
										<span>
											<i class="fa fa-heart" aria-hidden="true"></i>
											3
										</span>
										<a href="blog-single-right.html#comments">
											<i class="fa fa-comment" aria-hidden="true"></i>
											1
										</a>
										<div class="entry-date main_bg_color round">
											<time datetime="2017-03-13T08:50:40+00:00">
												<span>
													<strong>05</strong>th</span>
												april
											</time>
										</div>
									</div>
									<h3 class="entry-title">
										<a href="blog-single-right.html">Celebrating the adoption</a>
									</h3>
									<p>
							At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque
						</p>
									<p class="topmargin_30">
							<a href="blog-single-right.html" class="theme_button inverse">Read more</a>
						</p>
								</div>
							</article>
						</div>

						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<article class="vertical-item">
								<div class="item-media">
									<img src="images/blog_post3.jpg" alt="" />
								</div>
								<div class="item-content">
									<div class="entry-meta highlight">
										<span>
											<i class="fa fa-heart" aria-hidden="true"></i>
											6
										</span>
										<a href="blog-single-right.html#comments">
											<i class="fa fa-comment" aria-hidden="true"></i>
											19
										</a>

										<div class="entry-date main_bg_color round">
											<time datetime="2017-03-13T08:50:40+00:00">
												<span>
													<strong>25</strong>th</span>
												april
											</time>
										</div>
									</div>
									<h3 class="entry-title">
										<a href="blog-single-right.html">Charity for everyone</a>
									</h3>
									<p>
							At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque
						</p>
									<p class="topmargin_30">
							<a href="blog-single-right.html" class="theme_button inverse">Read more</a>
						</p>
								</div>
							</article>
						</div>

					</div>
				</div>
			</section>
 -->
			<div id="feedback" class="ls page_contact_wrap">

				<section class="texture-bg page_contact section_padding_top_100 section_padding_bottom_75 columns_margin_bottom_30">
					<div class="container">
						<div class="row">
							<div class="col-md-4 text-right">
								<img src="images/prescott/prescott-logo.png" class="image-overlap" alt="" />
							</div>
							<div class="col-md-3 col-sm-4">
								<h2 class="section_header big bottommargin_0">
									Contact
									<br>
									<strong class="text-uppercase">us</strong><!-- 
									<br> your
									<br>
									<strong class="text-uppercase highlight">help...</strong> -->
								</h2>
							</div>
							<div class="col-md-5 col-sm-8">
								<form class="contact-form" method="post" action="./">

									<div class="form-group">
										<label for="name">Name
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<label for="email">Email
											<span class="required">*</span>
										</label>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<label for="phone">Phone
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone">
									</div>

									<div class="form-group">
										<label for="message">Message</label>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
									</div>

									<div class="contact-form-submit text-right">
										<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button">Send </button>
									</div>

								</form>
							</div>
						</div>
					</div>
				</section>

			</div>

			<section id="subscribe" class="section_subscribe cs section_padding_50 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<h2 class="section_header bottommargin_0">
								Subscribe for
								<strong class="text-uppercase black">
									<span class="grey">News</span>letter</strong>
							</h2>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<div class="widget">
								<form class="signup form-inline" action="./" method="get">
									<div class="inline-vertical-center">
										<div class="form-group inline-block">
											<input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address">
										</div>
										<button type="submit" class="theme_button inverse">Subscribe</button>
									</div>
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer ds ms parallax section_padding_50">
				<div class="container">

					<div class="row columns_padding_50">

						<div class="col-md-4">
							<a href="./" class="logo">
								<img src="images/prescott/prescott-logo.png" alt="" />
							</a>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque orrupti quos </p>
							<div class="media fontsize_18">
								<i class="fa fa-search highlight rightpadding_5"></i>
								address:
								<span class="grey">1930 S 20th St<br>Lincoln, Nebraska 68502</span>
							</div>
							<div class="media fontsize_18">
								<i class="fa fa-envelope highlight rightpadding_5"></i>
								email:
								<span class="grey">info@prescottpto.com</span>
							</div>
							<div class="topmargin_30 darklinks">
								<a class="social-icon theme-color-icon soc-facebook" href="#" title="Facebook"></a>
								<a class="social-icon theme-color-icon soc-twitter" href="#" title="Twitter"></a>
								<a class="social-icon theme-color-icon soc-google" href="#" title="Google"></a>
								<a class="social-icon theme-color-icon soc-linkedin" href="#" title="LinkedIn"></a>
								<a class="social-icon theme-color-icon soc-flickr" href="#" title="Flickr"></a>
								<a class="social-icon theme-color-icon soc-rss" href="#" title="Rss"></a>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="topmargin_20">
								<div class="widget widget_recent_posts">

									<h3 class="widget-title">From the blog</h3>
									<ul class="resources">
										<li><a href="https://prescott.lps.org" target="_blank">Prescott Elementary School website</a></li>
										<li><a href="https://prescott.lps.org/our-staff/" target="_blank">Prescott Staff</a></li>
									</ul>


								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="widget widget_instagram topmargin_20">
								<h3 class="widget-title">Our Happy faces</h3>
								<div class="instafeed">

								</div>
							</div>
						</div>

					</div>
				</div>
			</footer>

			<section class="page_copyright ds ms parallax">
				<div class="container with_top_border">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="greylinks">Copyright 2016 - <a href="#">MW Templates</a>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>
<?php
// get_footer();
