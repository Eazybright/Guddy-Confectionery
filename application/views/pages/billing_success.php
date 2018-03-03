<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Billing Success</title>

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

	<div align="center">
	<h1><?php echo  "<P>Thank You! your order has been placed!</p><br />";?>
  <?php
    foreach($cart as $item){
      echo "id = ".$item['id']."<br />";
      echo "qty = ".$item['qty']."<br />";
      echo "price = ".$item['price']."<br />";

    }
   ?>
          <?php echo anchor('paypal/index', 'Click here to pay your bill')."<br /><br />"; ?>
		</h1>
	</div>

		<script src="<?= base_url() ?>assets/boot/bootstrap.js"></script>
		<script src="<?= base_url() ?>assets/boot/jquery.js"></script>
		<script src="<?= base_url() ?>assets/boot/popper.js"></script>
</body>
</html>
