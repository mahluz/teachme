<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Course</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/responsive.css">



</head>
<body>

	<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="<?= base_url() ?>">
					<img src="<?= base_url() ?>assets/img/logo/logo_new.png" alt="Awesome Image"/>
				</a>
			</div>
		</div>
	</header> <!-- /.header -->

	<nav class="mainmenu-area stricky">
		<div class="container">
			<div class="navigation pull-left">
				<div class="nav-header">
					<ul>
						<li>
							<a href="<?= base_url() ?>">Home</a>
						</li>
						<li><a href="<?= base_url('welcome/about') ?>">About</a></li>						
						<li><a href="<?= base_url('auth/login') ?>">Login</a></li>
					</ul>
				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<div class="search-box pull-right">
				<form action="<?=base_url('welcome/search'); ?>" method="get" role="search">
					<input type="text" placeholder="Cari kursus" name="q">
				</form>
			</div>
		</div>
	</nav> <!-- /.mainmenu-area -->

	<section class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<li data-transition="parallaxvertical">
					<img src="<?php base_url() ?>assets/img/cover/banner-1.jpg"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="225"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="500">
						Kursus!
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="290"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1000">
						Online No.1 di Indonesia
				    </div>
					<div class="tp-caption sfl tp-resizeme"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="368"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2300">
						<a href="#" class="thm-btn">Read more</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme"
				        data-x="left" data-hoffset="185"
				        data-y="top" data-voffset="368"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Learn More</a>
				    </div>
				</li>
				<li data-transition="parallaxvertical">
					<img src="<?php base_url() ?>assets/img/cover/banner-2.jpg"  alt=""  width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="249"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="500">
						Belajar Mudah
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="318"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1000">
						Dimanapun dan Kapanpun
				    </div>
					<div class="tp-caption sfl tp-resizeme"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="386"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2300">
						<a href="#" class="thm-btn">Read more</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme"
				        data-x="left" data-hoffset="185"
				        data-y="top" data-voffset="386"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Learn More</a>
				    </div>
				</li>
			</ul>
		</div>
	</section>

	<section class="call-to-action">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="call-to-action-corner col-md-4" style="background-image: url(img/call-to-action/left-box-bg.jpg);">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="glyphicon glyphicon-user"></i>
							</div>
						</div>
						<div class="content-box">
							<h3>SD</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum availabl </p>
							<a href="#" class="thm-btn inverse">Read more</a>
						</div>
					</div>
				</div>
				<div class="call-to-action-center col-md-4" style="background-image: url(img/call-to-action/center-box-bg.jpg);">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="flaticon-social"></i>
							</div>
						</div>
						<div class="content-box">
							<h3>SMP</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum availabl </p>
							<a href="#" class="thm-btn inverse">Read more</a>
						</div>
					</div>
				</div>
				<div class="call-to-action-corner col-md-4" style="background-image: url(img/call-to-action/right-box-bg.jpg);">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="fa fa-child"></i>
							</div>
						</div>
						<div class="content-box">
							<h3>SMA</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum availabl </p>
							<a href="#" class="thm-btn inverse">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="recent-causes sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Form Pencarian!</h2>
				<p>Cari kursus disini...</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
			<div class="row">
				<form action="<?=base_url('welcome/search'); ?>" method="get" role="search">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Cari kursus" name="q">
					</div>
				</form>
	        </div>
		</div>
	</section>
	
	<footer class="footer sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="#">
							<img src="<?php base_url() ?>assets/img/logo/logo_new.png" alt="Awesome Image"/>
						</a>
						<p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
						<ul class="contact">
							<li><i class="fa fa-map-marker"></i> <span>Semarang State University</span></li>
							<li><i class="fa fa-phone"></i> <span>(+62) 85868226304 (Whatsapp)</span></li>
							<li><i class="fa fa-envelope-o"></i> <span>zulham724@gmail.com</span></li>
						</ul>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="footer-widget quick-links">
						<h3 class="title">Pages</h3>
						<ul>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 latest-post col-sm-6">
					<div class="footer-widget latest-post">
						<h3 class="title">Latest News</h3>
						<ul>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget contact-widget">
						<h3 class="title">Contact Form</h3>
						<form action="inc/sendemail.php" class="contact-form" id="footer-cf">
							<input type="text" name="name"  placeholder="Full Name">
							<input type="text" name="email" placeholder="Email Address" >
							<textarea name="message" placeholder="Your Message"></textarea>
							<button type="submit">Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<section class="footer-bottom">
		<div class="container text-center">
			<p>Theme Edited By <a href="http://facebook.com/zulham.achmad">Zulham Azwar Achmad</a> with love</p>
		</div>
	</section>


	<!-- main jQuery -->
	<script src="<?php base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script src="<?php base_url() ?>assets/js/jquery.bxslider.min.js"></script>
	<!-- appear js -->
	<script src="<?php base_url() ?>assets/js/jquery.appear.js"></script>
	<!-- circle progress -->
	<script src="<?php base_url() ?>assets/js/circle-progress.js"></script>
	<!-- owl carousel -->
	<script src="<?php base_url() ?>assets/js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="<?php base_url() ?>assets/js/jquery-parallax.js"></script>
	<!-- validate -->
	<script src="<?php base_url() ?>assets/js/validate.js"></script>
	<!-- mixit up -->
	<script src="<?php base_url() ?>assets/js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="<?php base_url() ?>assets/js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="<?php base_url() ?>assets/js/jquery.easing.min.js"></script>
	<!-- count to -->
	<script src="<?php base_url() ?>assets/js/jquery.countTo.js"></script>
	<!-- easyPieChart -->
	<script src="<?php base_url() ?>assets/js/easypiechart.min.js"></script
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script src="<?php base_url() ?>assets/js/gmap.js"></script>

	<!-- isotope script -->
	<script src="<?php base_url() ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="<?php base_url() ?>assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>
	
	<!-- revolution scripts -->

	<script src="<?php base_url() ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php base_url() ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>


	<!-- thm custom script -->
	<script src="<?php base_url() ?>assets/js/custom.js"></script>


</body>
</html>