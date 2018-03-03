<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Billing Info</title>
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

		<form name="billing" method="post" action="<?php echo base_url().'billing/save_order' ?>" >
			<input type="hidden" name="command" />
			<div align="center">
				<?php echo form_open(); ?>
				<?php if (validation_errors()!=null): ?>
						<div class="alert alert-danger" role="alert">
									<?php echo validation_errors(); ?>
						</div>
						<?php endif ?>
				<h1 align="center">Billing Info</h1>
				<table border="0" cellpadding="2px">
					<tr><td>Order Total:</td><td><strong>$<?php echo number_format($grand_total,2); ?></strong></td></tr>
					<tr><label for="name"><td>Your Name:</td></label>
					<td><input type="text" id="name" value="<?php echo set_value('name'); ?>" name="name" placeholder="Enter your name" /></td></tr>

					<tr><label for="email"><td>Email:</td></label>
					<td><input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address" /></td></tr>

					<tr><label for="phone"><td>Phone:</td></label>
					<td><input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>" placeholder="Enter number"  /></td></tr>

					<tr><td>&nbsp;</td><td><input type="submit" value="Place Order" /></td></tr>
				</table>
			</div>
		</form>
</body>
</html>
