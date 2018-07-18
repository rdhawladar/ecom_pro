<!DOCTYPE html>
<html>
<head>
	<title></title>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/order.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
</head>
<body>

    <div class="wrapper order">
		<?php include('sidebar.php') ?>

        <!-- Page Content Holder -->
        <div id="content">
			<?php include('header.php') ?>
			<div class="container-fluid">
				
				<div class="col-md-12">
					<h4>Payment</h4>
					<h4 class="alert"><span>Total Payable </span><span 		class="pull-right text-danger"><b>$968</b></span></h4>
					<div class="row">
						<div class="col-md-3 left-bar layout-2">
							<h4>Pay With</h4>
							<p><img class="card" src="images/card.svg"></p>
							<p><img class="payoneer" src="images/amazon.svg"></p>
							<p><img class="paypal" src="images/amazon.svg"></p>
						</div>

						<div class="col-md-5">
							<br><br><br>
							<form>
								<div class="form-group">
								  <div class="col-10">
								    <input class="form-control" type="text" placeholder="XXXX-XXXX-XXXX-4321" id="example-text-input">
								  </div>
								</div>
								<div class="form-group row">
									<div class="col-md-8">
								    	<input class="form-control" type="date" placeholder="DD-MM-YYYY">
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="pwd" placeholder="CVV">
									</div>
								</div>
								<div class="checkbox">
									<label><input type="checkbox"> Save for later</label>
								</div>
							</form>
						</div>

						<div class="col-md-4">
							<h4 class="saved-card">Saved Cards</h4>
							<button class="btn btn-active save-1">....XXXX 4589</button>
							<button class="btn btn-common save-2">....XXXX 4589</button>
						</div>
						
					</div>
					<div class="col-md-12 footer">
						<a href="#" class="btn color-text"><i class="fa fa-angle-left"></i> Continue Shopping </a>
						
						<a href="#" class="btn btn-common pull-right">Continue to Cart <i class="fa fa-angle-right"></i></a>
						
					</div>
					
				</div>
					<!-- <a href="#" class="btn color-text"><i class="fa fa-angle-left"></i> Continue Shopping</a>
					<a href="#" class="btn btn-common btn-block">Continue to Cart <i class="fa fa-angle-right"></i></a> -->
			</div>
        </div>
    </div>
</body>
</html>