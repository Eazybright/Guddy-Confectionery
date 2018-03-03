<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/main.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script>
    function clear_cart() {
    	var result = confirm('Are you sure want to clear all bookings?');

    	if(result) {
    		window.location = "<?php echo base_url(); ?>cart/remove/all";
    	}else{
    		return false; // cancel button
    	}
    }
</script>
</head>
<body>
  <div class="order">
  <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('products/index')?> ">ORDER</a>
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
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>
  </div>
<body>

		<div style="margin: 50px auto; width:600px;" >
			<div style="padding-bottom:10px">
				<h1 align="center">Your Shopping Cart</h1>
				<input type="button" value="Continue Shopping" onclick="window.location='products'" />
			</div>
			<div style="color:#F00"><?php echo $message?></div>
			<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
				<?php if ($cart = $this->cart->contents()): ?>
				<tr bgcolor="#FFFFFF" style="font-weight:bold">
					<td>Serial</td>
					<td>Name</td>
					<td>Price</td>
					<td>Qty</td>
					<td>Amount</td>
					<td>Options</td>
				</tr>
				<?php
				echo form_open('cart/update_cart');
				$grand_total = 0; $i = 1;

				foreach ($cart as $item):
					echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
					echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
					echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
					echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
					echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
				?>
				<tr bgcolor="#FFFFFF">
					<td>
						<?php echo $i++; ?>
					</td>
					<td>
						<?php echo $item['name']; ?>
					</td>
					<td>
						$ <?php echo number_format($item['price'],2); ?>
					</td>
					<td>
						<?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
					</td>
					<?php $grand_total = $grand_total + $item['subtotal']; ?>
					<td>
						$ <?php echo number_format($item['subtotal'],2) ?>
					</td>
					<td>
						<?php echo anchor('cart/remove/'.$item['rowid'],'Cancel'); ?>
					</td>
					<?php endforeach; ?>
				</tr>
				<tr>
					<td><b>Order Total: $<?php echo number_format($grand_total,2); ?></b></td>
					<td colspan="5" align="right"><input type="button" value="Clear Cart" onclick="clear_cart()">
							<input type="submit" value="Update Cart">
							<?php echo form_close(); ?>
							<input type="button" value="Place Order" onclick="window.location='billing'"></td>
				</tr>
				<?php endif; ?>
			</table>

		</div>
		<script src="<?= base_url() ?>assets/boot/bootstrap.js"></script>
		<script src="<?= base_url() ?>assets/boot/jquery.js"></script>
		<script src="<?= base_url() ?>assets/boot/popper.js"></script>

</body>
</html>
