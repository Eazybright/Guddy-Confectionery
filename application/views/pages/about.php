<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/about.css" type="text/css">
</head>
<body>
	<div class="intro">
		<ul>
		  <li><a href="<?php echo base_url('home/index'); ?>">HOME</a></li>

		  <li><a href="<?php echo base_url('home/about'); ?>">ABOUT US</a></li>

		  <li><a href="<?php echo base_url('home/contact'); ?>">CONTACT</a></li>

		  <li><a href="<?php echo base_url('home/complain'); ?>">COMPLAIN</a></li>

		  <li><a href="<?php echo base_url('home/faq'); ?>">FAQS</a></li>

      <li style="float: right; margin: 15px;">
  		  <form class="form-inline my-2 my-lg-0" method="GET" action="<?=base_url('home/search')?>">

  			<input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
  			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  		</form>
      </li>

    </ul>
	</div>

	<div class="label" style="margin: 10% 20% 0 20%;">
        <img src="<?= base_url() ?>assets/catfishsoup.jpg" class="img-fluid" alt="">
	</div>

	<div class="content">
			<h4>Vision :</h4>
			<p>To provide quality dishes to everybody</p>

			<h4>Mission :</h4>
			<p>To be the best food suppliers</p>


			<h4>Our Team :</h4>
			<p>A team of 45 workers</p>
	</div>
	<center><em>&copy;2017-Guddies Team</em></center>
</body>
</html>
