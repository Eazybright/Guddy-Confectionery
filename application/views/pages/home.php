<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
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
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('MyCalendar/display')?> ">VIEW CALENDAR</a>
          </li>
				</ul>
				<form class="form-inline my-2 my-lg-0" method="GET" action="<?=base_url('home/search')?>">

					<input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</div>
	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-6 img-responsive img-thumbnail" style="margin-top: 5%;">
				<div class="row" style="margin-top: 5%;">
					<div class="col"> <img src="<?= base_url() ?>assets/kitchen.jpg" class="img-fluid" alt="" style="border-radius: 50%;"></div>
					<div class="col"> <img src="<?= base_url() ?>assets/kiti.jpg" class="img-fluid" alt=""style="border-radius: 50%;"></div>
				</div>
				<div class="row">
					<div class="col"> <img src="<?= base_url() ?>assets/plantain.jpg" class="img-fluid" alt="" style="border-radius: 50%;"></div>
					<div class="col"> <img src="<?= base_url() ?>assets/kitc.jpg" class="img-fluid" alt="" style="border-radius: 50%;"></div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card" style="margin-top: 10%;">
					<div class="card-body">

						<h3>Please login</h3><br>
						<form action="" method="POST" class="form-horizontal" role="form">
							<?php echo form_open('home/login'); ?>
						<div class="form-group">
              <?php echo form_error('username'); ?>
							<label class="control-label col-sm-3" for="username"><b>Username:</b></label>
							<div class="col-sm-10">
								<input type="text" name="username" value="<?php echo set_value('username'); ?>" id="username" placeholder="Username">
							</div>
						</div>

						<div class="form-group">
              <?php echo form_error('password'); ?>
							<label class="control-label col-sm-3" for="password"><b>Password:</b></label>
							<div class="col-sm-10">
								<input type="password"  name="password" value="<?php echo set_value('password'); ?>" id="password" placeholder="Enter password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label><input type="checkbox" name="remember" id="remember"><b> Remember me</b></label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success">Sign in</button>
							</div>
						</div>
									<h5><i>Don't have an account?</i><a href="<?=base_url('home/signup') ?>"> Sign up here</a></h5><br />
								</form>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>

				</div>
			</div>

      <script src="<?= base_url() ?>assets/boot/jquery.js"></script>
      <script src="<?= base_url() ?>assets/boot/popper.js"></script>
      <script src="<?= base_url() ?>assets/boot/bootstrap.js"></script>
</body>
</html>
