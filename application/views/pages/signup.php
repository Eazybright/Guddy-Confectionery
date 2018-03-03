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
		<div align="center">
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


			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h3>Create an account</h3><br>
						<form action="" method="POST" class="form-horizontal" role="form">
							<?php echo form_open(); ?>
              <div class="form-group">
                <?php if (validation_errors()!=null): ?>
                <div class="alert alert-danger" role="alert">
                <?php echo form_error('firstname'); ?>
                </div>
                <?php endif ?>
							<label class="control-label col-sm-3" for="firstname">Firstname:</label>
							<div class="col-sm-10">
								<input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>" id="firstname" placeholder="Enter firstname">
							</div>
						</div>

						<div class="form-group">
                <?php if (validation_errors()!=null): ?>
                <div class="alert alert-danger" role="alert">
                <?php echo form_error('lastname'); ?>
                </div>
              <?php endif; ?>
              <label class="control-label col-sm-3" for="lastname">Lastname:</label>
							<div class="col-sm-10">
								<input type="lastname"  name="lastname" value="<?php echo set_value('lastname'); ?>" id="lastname" placeholder="Enter lastname">
							</div>
						</div>

						<div class="form-group">
                <?php if (validation_errors()!=null): ?>
                <div class="alert alert-danger" role="alert">
                <?php echo form_error('username'); ?>
                </div>
              <?php endif; ?>
							<label class="control-label col-sm-3" for="username">Username:</label>
							<div class="col-sm-10">
								<input type="username"  name="username" value="<?php echo set_value('username'); ?>" id="username" placeholder="Choose a username">
							</div>
						</div>

						<div class="form-group">
                <?php if (validation_errors()!=null): ?>
                <div class="alert alert-danger" role="alert">
                <?php echo form_error('address'); ?>
                </div>
              <?php endif; ?>
							<label class="control-label col-sm-3" for="address">Address:</label>
							<div class="col-sm-10">
								<input type="address"  name="address" value="<?php echo set_value('address'); ?>" id="address" placeholder="Enter home address">
							</div>
						</div>

						<div class="form-group">
                  <?php if (validation_errors()!=null): ?>
                  <div class="alert alert-danger" role="alert">
                  <?php echo form_error('password'); ?>
                  </div>
                <?php endif; ?>
							<label class="control-label col-sm-3" for="password">Password:</label>
							<div class="col-sm-10">
								<input type="password"  name="password" value="<?php echo set_value('password'); ?>" id="password" placeholder="Choose a password">
							</div>
						</div>

						<div class="form-group">
                <?php if (validation_errors()!=null): ?>
                <div class="alert alert-danger" role="alert">
                <?php echo form_error('passconf'); ?>
                </div>
              <?php endif; ?>
							<label class="control-label col-sm-3" for="passconf">Confirm Password:</label>
							<div class="col-sm-10">
								<input type="password"  name="passconf" value="<?php echo set_value('passconf'); ?>" id="passconf" placeholder="Confirm your password">
							</div>
						</div>

						<div class="form-group">
                <?php if (validation_errors()!=null): ?>
                <div class="alert alert-danger" role="alert">
                <?php echo form_error('email'); ?>
                </div>
              <?php endif; ?>
							<label class="control-label col-sm-3" for="email">Email Address:</label>
							<div class="col-sm-10">
								<input type="email"  name="email" value="<?php echo set_value('email'); ?>" id="email" placeholder="Enter a valid email address">
							</div>
						</div>

						<div class="form-group">
                  <?php if (validation_errors()!=null): ?>
                  <div class="alert alert-danger" role="alert" >
                  <?php echo form_error('phone'); ?>
                  </div>
                <?php endif; ?>
							<label class="control-label col-sm-3" for="phone">Contact Number:</label>
							<div class="col-sm-10">
								<input type="text"  name="phone" value="<?php echo set_value('phone'); ?>" id="phone" placeholder="Enter a valid phone number">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success">Sign up</button>
							</div>
						</div>
									<h5>Already Registered? <a href="<?=base_url('home/login') ?>"> Login here</a></h5><br />
								</form>
							</div>

						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
		<center><em>&copy;2017-Guddies Team</em></center>
		</div>
			</div>


    <script src="<?= base_url() ?>assets/boot/bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/boot/jquery.js"></script>
	<script src="<?= base_url() ?>assets/boot/popper.js"></script>
</body>
</html>
