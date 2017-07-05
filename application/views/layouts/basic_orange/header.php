<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Charity Home || Charity and Donation HTML5 Template</title>

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
					<input type="text" placeholder="Search Course" name="q">
				</form>
			</div>
		</div>
	</nav> <!-- /.mainmenu-area -->