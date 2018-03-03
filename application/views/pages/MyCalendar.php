<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyCalendar View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ;?>assets/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ;?>assets/calendar.css">
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

  <div class="content">
    <?php echo $calendar; ?>
  </div>

</body>
</html>
