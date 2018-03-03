<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frequently Asked Questions</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
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
<center><h1>FAQS</h1></center>
<div class="container-fluid">
    <div class="row" style="padding-top: 30px">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>What is the company about?</h3>
                    <p>The company is about delivering food to your doorstep</p>
                    <br>
                    <h3>How can I order?</h3>
                    <p>You have to sign in with your username and password.If you don't have an account,you have to create an account with us  </p>
                    <br>
                    <h3>When will I get my order</h3>
                    <p>within a range of 15-30 mins and you can call our office if your order is not delivered within the stipulated time</p>
                    <br>
                    <h3>How do i pay for my order?</h3>
                    <p>So as not to make our costumers angry in cases where they are displeased with our services we allow payment on delivery </p>
                    <p>whereby you give the money to the delivery personality after you might have checked your order and ensure it suits your taste</p><br>
                    <h3>I am not happy with my delivery</h3>
                    <p>As much as we can, we try our possible best to ensure that our costumers enjoy our services but in extreme cases where we are unable to </p>
                    <p>meet up with that, we have created an avenue for you to complain and efficiently get across to us just click on complain in your nav bar</p>
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
