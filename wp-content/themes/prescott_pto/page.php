<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prescott_pto
 */

// get_header(); ?>
<!-- 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary --> -->


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
			</section>

			<header class="page_header header_darkgrey header_transparent table_section columns_padding_0 section_padding_15 toggler_right">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<a href="./" class="logo">
								<img src="images/logo-dark.png" alt="" />
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
										<ul>
											<li>
												<a href="index.html">MultiPage</a>
											</li>
											<li>
												<a href="index_singlepage.html">SinglePage</a>
											</li>
											<li>
												<a href="admin_index.html">Admin Dashboard</a>
											</li>

										</ul>
									</li>

									<!-- blog -->
									<li>
										<a href="blog-right.html">Blog</a>
										<ul>

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

										</ul>
									</li>
									<!-- eof blog -->

									<li>
										<a href="#">Features</a>
										<div class="mega-menu">
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
										<!-- eof mega menu -->
									</li>
									<!-- eof features -->

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
										</ul>
									</li>


									<li>
										<a href="about.html">Pages</a>
										<ul>

											<!-- features -->
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
											<!-- eof features -->

											<li>
												<a href="about.html">About</a>
											</li>

											<li>
												<a href="timetable.html">Timetable</a>
											</li>

											<!-- shop -->
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
											<!-- eof shop -->

											<!-- events -->
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
											<!-- eof events -->

											<li>
												<a href="team.html">Team</a>
												<ul>
													<li>
														<a href="team.html">Team</a>
													</li>
													<li>
														<a href="team-single.html">Team Member</a>
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

										</ul>
									</li>
									<!-- eof pages -->

									<!-- gallery -->
									<li>
										<a href="gallery-regular.html">Gallery</a>
										<ul>
											<!-- Gallery regular -->
											<li>
												<a href="gallery-regular.html">Gallery Regular</a>
												<ul>
													<li>
														<a href="gallery-regular.html">1 column</a>
													</li>
													<li>
														<a href="gallery-regular-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-regular-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery regular -->

											<!-- Gallery full width -->
											<li>
												<a href="gallery-fullwidth.html">Gallery Full Width</a>
												<ul>
													<li>
														<a href="gallery-fullwidth.html">2 column</a>
													</li>
													<li>
														<a href="gallery-fullwidth-3-cols.html">3 columns</a>
													</li>
													<li>
														<a href="gallery-fullwidth-4-cols.html">4 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery full width -->

											<!-- Gallery extended -->
											<li>
												<a href="gallery-extended.html">Gallery Extended</a>
												<ul>
													<li>
														<a href="gallery-extended.html">1 column</a>
													</li>
													<li>
														<a href="gallery-extended-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-extended-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery extended -->

											<!-- Gallery carousel -->
											<li>
												<a href="gallery-carousel.html">Gallery Carousel</a>
												<ul>
													<li>
														<a href="gallery-carousel.html">1 column</a>
													</li>
													<li>
														<a href="gallery-carousel-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-carousel-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery carousel -->

											<!-- Gallery tile -->
											<li>
												<a href="gallery-tile.html">Gallery Tile</a>
												<ul>
													<li>
														<a href="gallery-tile.html">Gallery Tile</a>
													</li>
													<li>
														<a href="gallery-tile2.html">Gallery Tile 2</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery tile -->

											<!-- Gallery left sidebar -->
											<li>
												<a href="gallery-left.html">Gallery Left Sidebar</a>
												<ul>
													<li>
														<a href="gallery-left.html">1 column</a>
													</li>
													<li>
														<a href="gallery-left-2-cols.html">2 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery left sidebar -->

											<!-- Gallery right sidebar -->
											<li>
												<a href="gallery-right.html">Gallery Right Sidebar</a>
												<ul>
													<li>
														<a href="gallery-right.html">1 column</a>
													</li>
													<li>
														<a href="gallery-right-2-cols.html">2 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery right sidebar -->

											<!-- Gallery item -->
											<li>
												<a href="gallery-single.html">Gallery Item</a>
												<ul>
													<li>
														<a href="gallery-single.html">Style 1</a>
													</li>
													<li>
														<a href="gallery-single2.html">Style 2</a>
													</li>
													<li>
														<a href="gallery-single3.html">Style 3</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery item -->
										</ul>
									</li>
									<!-- eof Gallery -->

									<!-- contacts -->
									<li>
										<a href="contact.html">Contact</a>
										<ul>
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
										</ul>
									</li>
									<!-- eof contacts -->

									<li>
										<a href="#" class="search_modal_button">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
					</div>
				</div>
			</header>

			<section class="page_breadcrumbs offset_breadcrumbs ds ms parallax section_padding_50">
				<div class="container with_top_border">
					<div class="row">
						<div class="col-sm-6 text-center text-sm-left">
							<h2>Mosaic</h2>
						</div>
						<div class="col-sm-6 text-center text-sm-right">
							<ol class="breadcrumb darklinks grey">
								<li>
									<a href="./">
							Home
						</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li class="active">Mosaic</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="isotope_container isotope row masonry-layout columns_bottom_margin_30">

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">

									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">

									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/02.jpg" alt="">
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
															<strong>12</strong>th</span>
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
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
															<strong>13</strong>th</span>
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/04.jpg" alt="">
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/05.jpg" alt="">
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
															<strong>9</strong>th</span>
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/06.jpg" alt="">
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
															<strong>7</strong>th</span>
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/07.jpg" alt="">
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
															<strong>5</strong>th</span>
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/08.jpg" alt="">
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
															<strong>28</strong>th</span>
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

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item">
										<div class="item-media">
											<img src="images/gallery/09.jpg" alt="">
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
															<strong>16</strong>th</span>
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

							</div>
							<!-- eof .isotope_container.row -->

							<div class="row">
								<div class="col-sm-12 text-center">
									<i class="fa fa-circle-o-notch fa-spin loadmore_spinner"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

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
								<img src="images/logo-dark.png" alt="" />
							</a>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque orrupti quos </p>
							<div class="media fontsize_18">
								<i class="fa fa-search highlight rightpadding_5"></i>
								address:
								<span class="grey">12 Ave., New York</span>
							</div>
							<div class="media fontsize_18">
								<i class="fa fa-envelope highlight rightpadding_5"></i>
								email:
								<span class="grey">info@giving.com</span>
							</div>
							<div class="media fontsize_18">
								<i class="fa fa-phone highlight rightpadding_5"></i>
								phone:
								<span class="grey">800 516 3290</span>
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
									<ul class="greylinks">
										<li>
											<div class="media">
												<div class="media-left media-middle">
													<img src="images/recent_post1.jpg" alt="" />
												</div>
												<div class="media-body media-middle">
													<h4><a href="blog-single-right.html">Missioners in charge</a></h4>
													<div class="entry-meta grey darklinks">
														<span class="entry-date">
															<time datetime="2017-03-13T08:50:40+00:00">
																23th of april
															</time>
														</span>
														<span>|</span>
														<span>
															<i class="fa fa-heart" aria-hidden="true"></i>
															2
														</span>
														<a href="blog-single-right.html#comments">
															<i class="fa fa-comment" aria-hidden="true"></i>
															4
														</a>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="media">
												<div class="media-left media-middle">
													<img src="images/recent_post2.jpg" alt="" />
												</div>
												<div class="media-body media-middle">
													<h4><a href="blog-single-right.html">Celebrating the adoption</a></h4>
													<div class="entry-meta grey darklinks">
														<span class="entry-date">
															<time datetime="2017-03-13T08:50:40+00:00">
																5th of april
															</time>
														</span>
														<span>|</span>
														<span>
															<i class="fa fa-heart" aria-hidden="true"></i>
															3
														</span>
														<a href="blog-single-right.html#comments">
															<i class="fa fa-comment" aria-hidden="true"></i>
															1
														</a>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="media">
												<div class="media-left media-middle">
													<img src="images/recent_post3.jpg" alt="" />
												</div>
												<div class="media-body media-middle">
													<h4><a href="blog-single-right.html">Charity for everyone</a></h4>
													<div class="entry-meta grey darklinks">
														<span class="entry-date">
															<time datetime="2017-03-13T08:50:40+00:00">
																25th of april
															</time>
														</span>
														<span>|</span>
														<span>
															<i class="fa fa-heart" aria-hidden="true"></i>
															6
														</span>
														<a href="blog-single-right.html#comments">
															<i class="fa fa-comment" aria-hidden="true"></i>
															18
														</a>
													</div>
												</div>
											</div>
										</li>
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
