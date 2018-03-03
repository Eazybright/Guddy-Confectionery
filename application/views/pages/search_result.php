<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SEARCH RESULT</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/jquery.ui.all.css" type="text/css" />
	<script type="text/javascript" scr="<?= base_url() ?>asssets/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" scr="<?= base_url() ?>asssets/jquery-ui-1.8.2.custom.min.js"></script>
	<script type="text/javascript">
		$document.ready(function(){
			$('#products').autocomplete({
				source: "<?= base_url('home/search'); ?>"
			});
		});
    </script>
</head>
<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">

					   <li class="nav-item">
								<a class="nav-link active" href="<?= base_url('home/index') ?>">HOME</a><span class="sr-only">(current)</span>
							</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('home/about')?> ">ABOUT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="<?= base_url('home/contact')?> ">CONTACT</a>
						</li>

						<li class="nav-item active">
							<a class="nav-link " href="<?= base_url('home/complain')?> ">COMPLAIN</a><span class="sr-only">(current)</span>
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
    <br /><br />
    <p>Search results for "<?= $query?>"</p>

    <div class="row" style="text-align: center;">
        <?php
          foreach( $products as $product): ?>
          <?php
           $id = $product->serial;
    				$name = $product->name;
    				$price = $product->price;

    	  ?>
        <div class="col-md-2  img-thumbnail" style="margin: 6px; margin-left: 5%;">

            	<img src="<?= base_url(). $product->picture ?>"  class="img-responsive" style="width: 70%; height: 60%; border-radius: 50%;"/>
              <br>
                <b><?php echo $name; ?></b>
                        Price:<big style="color:green">
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
          <?php endforeach; ?>
      </div>
</body>
</html>
