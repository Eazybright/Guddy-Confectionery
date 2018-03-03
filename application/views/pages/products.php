<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/order.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Guddies Confectionery</title>

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

	<h1 align="center" style="margin: 10% 0 0 40%; position: absolute; color: #B22222;">Products</h1><br />

  <div class="row" style="text-align: center;">
  		<?php
  			foreach ($products as $product){
  				$id = $product['serial'];
  				$name = $product['name'];
  				$price = $product['price'];
  		?>
    <div class="col-md-2  img-thumbnail" style="margin: 6px; margin-left: 5%;  margin-top: 5%;">

        	<img src="<?= base_url(). $product['picture']?>"  class="img-responsive" style="width: 70%; height: 60%; border-radius: 50%;"/>
          <br>
            <b style="color: #999;"><?php echo $name; ?></b><br />
                    <b style="color: #999;">Price:</b><big style="color: red; font-weight: bold; clear: both;">
                    $<?php echo $price; ?></big>
                    <?php
					echo form_open('Cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Add to cart');
					echo form_close()."<br /><br />";
					?>
      </div>
      <?php
          }
        ?>
      </div>

    <script src="<?= base_url() ?>assets/boot/bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/boot/jquery.js"></script>
	<script src="<?= base_url() ?>assets/boot/popper.js"></script>
</body>
</html>
