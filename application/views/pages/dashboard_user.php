 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard_user.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <meta charset="UTF-8" />
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

  <div class="container" style="top: 0;">
    <div class="row-profile">
      <div class="col-md-3">
        <div class="profile-sidebar">
          <div class="profile-user-pic">
            <img src="<?= base_url() ?>assets/avatar.png" alt="" class="img-responsice img-circle" />
          </div>
          <div class="profile-user-title">
            <div class="profile-user-name">
              Kolawole Ezekiel
            </div>
            <div class="profile-user-job">
              Developer
            </div>
          </div>
          <div class="profile-user-buttons">
            <button class="btn btn-success btn-sm">Follow</button>
            <button class="btn btn-success btn-sm">Message</button>
          </div>
          <div class="profile-user-menu" style="text-decoreation: none;">
            <ul class="nav">
              <li class=""><a href=""><i class="glyphicon glyphicon-home"></i>Overview</a></li>
              <li class="active"><a href=""><i class="glyphicon glyphicon-ok"></i>About Me</a></li>
              <li class="active"><a href=""><i class="glyphicon glyphicon-user"></i>Overview</a></li>
              <li class="active"><a href="<?= base_url('products/index'); ?>"><i class="glyphicon glyphicon-flag"></i>Shop</a></li>
            </ul>
            <a href="<?=base_url('home/logout') ?>"> <button class="btn btn-primary"> Logout<button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

		<script src="<?= base_url() ?>boot/bootstrap.js"></script>
		<script src="<?= base_url() ?>boot/jquery.js"></script>
		<script src="<?= base_url() ?>boot/popper.js"></script>
    </body>
</html>
