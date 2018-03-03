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
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>
<div class="container-fluid">
    <div class="row" style="padding: 75px;">
        <div class="col-md-6">
            <div class="row">
                <div class="col"> <img src="<?= base_url() ?>assets/kit.jpg" class="img-fluid" alt=""></div>
                <div class="col"> <img src="kiti.jpg" class="img-fluid" alt=""></div>
            </div>
            <div class="row">
                <div class="col"> <img src="<?= base_url() ?>assets/kitchen.jpg" class="img-fluid" alt=""></div>
                <div class="col"> <img src="<?= base_url() ?>assets/kitc.jpg" class="img-fluid" alt=""></div>
            </div>
            <div class="row">
                <div class="col"> <img src="<?= base_url() ?>assets/kitik.jpg" class="img-fluid" alt=""></div>
                <div class="col"> <img src="<?= base_url() ?>assets/ki.jpg" class="img-fluid" alt=""></div>
            </div>



        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" class="form-horizontal" role="form">
						<?php echo form_open(); ?>
                        <div class="form-group">

                           <h5>Please login to access the order page</h5>

							<?php echo form_error('username'); ?>
                            <label class="control-label col-sm-3" for="username">Username:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username"
								value="<?php echo set_value('username'); ?>" placeholder="Username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="password">Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" value="<?php echo set_value('password'); ?>"
								placeholder="Enter password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox"/> Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Sign in</button>
                            </div>
                        </div>
                        <h5>Don't have an account? <a href="<?=base_url('home/signup') ?>"> Sign up here</a></h5>
                    </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
<footer>
    <center>copyright 2017</center>
</footer>

    <script src="boot/bootstrap.js"></script>
<script src="boot/jquery.js"></script>
<script src="boot/popper.js"></script>
</body>
</html>
