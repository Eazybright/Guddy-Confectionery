<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Paypal Payment</title>
</head>
	<body>

		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
				<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url('home/index')?> ">HOME<span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('home/about')?> ">ABOUT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="<?= base_url('home/contact')?> ">CONTACT</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="<?= base_url('home/complain')?> ">COMPLAIN</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('home/faq')?> ">FAQs</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0" method="GET" action="<?=base_url('home/search')?>">

						<input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</div>

		<form method="POST" action="<?= $this->config->item('posturl'); ?>">

				<input type="hidden" name="upload" value="1" />
				<input type="hidden" name="return" value="<?= $this->config->item('returnurl'); ?>" />
				<input type="hidden" name="cmd" value="_cart" />
				<input type="hidden" name="business" value="<?= $this->config->item('business'); ?>" />

				<?php
					echo $query."<br />";
					echo $products;

				 ?>

				<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" style="margin: 10%; " />



		</form>

	</body>
</html>
