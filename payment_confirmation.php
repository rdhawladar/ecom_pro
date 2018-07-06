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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
</head>
<body>

    <div class="wrapper payment-confirmation">
		<?php include('sidebar.php') ?>

        <!-- Page Content Holder -->
        <div id="content">
			<?php include('header.php') ?>
			<div class="container-fluid">
				
				<div class="col-md-12">
					<h4>Payment Confirmation</h4>
					<div class="alert">
						<h2>Payment Successful!</h2>
						<div class="row layout">
							<div class="col-md-3 left-bar lay-l">
								<h4>Transaction ID</h4>
								<h1><b>B5879</b></h1>
							</div>

							<div class="col-md-6 col-sm-offset-3 lay-r">
								<h4>Bought Products</h4>
								<a href="#" class="btn btn-common">Check Products </a>
								<a href="#" class="btn btn-common">Download Invoice</a>
							</div>
						</div>
					</div>
					<div>
						<p>General information of delivery and Shipping term & condition will described here.</p>
						<br>
						<p>A copy of invoice sent to your mail. If you have any query please contact to our support (Contact details are on footer)</p>
						<p>Thanks. <br>PeerPosted Team</p><br>
					</div>
					<p class="color-light">Contact</p>
					<div class="row bottom">
						<div class="col-md-4">
							<img class="img-responsive" src="images/demo.jpg">
							<div class="col-md-8">
								<p><b>Booth</b><br><span class="color-light">Dreseden Airport, Germany <br>DRS<br>+567838877<br>pp-drs@peerposted.com</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="images/demo.jpg">
							<div class="col-md-8">
								<p><b>Support</b> <br><span class="color-light">678B/2, Dhaka, Bangladesh<br>+880154879663<br>support@peerposted.com</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="images/demo.jpg">
							<div class="col-md-8">
								<p><b>Germany Office</b><br><span class="color-light">Wilane Street, Berlin,AA32, Germany<br>+52489766545-7<br>germany@peerposted.com</span></p>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
        </div>
    </div>

	<script type="text/javascript">
		$(document).ready(function () {
			$('#sidebar-header, #hidden-search-icon').on('click', function () {
				$('#sidebar').toggleClass('active');
			});
		});

		// Slider range for price 
		$("#ex16b").slider({ min: 0, max: 1000, value: [0, 1000], focus: true });


		// Grid system view
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
	</script>
</body>
</html>