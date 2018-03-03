<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COMPLAIN</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-3">
					<h3 class="text-center" id="ni">Displeased with our services?</h3><br>
					<div class="card" style="width: 23rem;" >
						<div class="card">
							<div class="card-body">
							<div class="form-group">
                <?php echo form_open(); ?>

                <?php if (validation_errors()!=null): ?>
								<div class="alert alert-danger" role="alert">
                  <?php echo validation_errors(); ?>
								</div>
              <?php endif; ?>
								<label for="email">Email address:</label>
								<input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control" />

								<label for="comment">Please enter your complaint here:</label>
								<textarea name="comment" name="comment" id="comment" value="<?php echo set_value('comment'); ?>" cols=28 rows=4 wrap></textarea>
								<div><br/><br>
									<button type="submit" class="btn btn-primary" style="width: 9rem;">
										submit complaint
									</button>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<center><em>&copy;2017-Guddies Team</em></center>
		</div>
			<script src="boot/bootstrap.js"></script>
			<script src="boot/jquery.js"></script>
			<script src="boot/popper.js"></script>
</body>
</html>
