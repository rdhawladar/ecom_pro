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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
</head>
<body>

    <div class="wrapper">
		<?php include('sidebar.php') ?>

        <!-- Page Content Holder -->
        <div id="content">
			<?php include('header.php') ?>
			<div class="container-fluid">
				
				<h1>My Cart</h1>
				<table id="cart" class="table table-condensed">
					<tbody>
						<tr>
							<td class="col-md-1">1</td>
							<td class="col-md-5">
								<div class="row">
									<div class="col-sm-2 hidden-xs">
										<img src="images/mobile.jpg" alt="..." class="img-responsive"/>
									</div>
									<div class="col-sm-8">
										<h4 class="nomargin">Product 1</h4>
										<img src="images/demo.jpg" alt="..." class="img-responsive img-vendor"/>
									</div>
								</div>
							</td>
							<td class="col-md-1">
								<div class="input-group input-group-sm qnt-input">
									
									<input type="number" class="form-control" min="1" value="1" aria-describedby="sizing-addon3">
									<span class="btn btn-common qnt-add input-group-addon" id="sizing-addon3"><i class="glyphicon glyphicon-plus"></i></span>
								</div>
							</td>
							<td class="col-md-1"></td>
							<td class="col-md-1"><strong>$1.99</strong></td>
							<td class="col-md-1">
								<a class=><i class="glyphicon glyphicon-remove"></i></a>								
							</td>
						</tr>
						<tr>
							<td class="col-md-1">1</td>
							<td class="col-md-5">
								<div class="row">
									<div class="col-sm-2 hidden-xs">
										<img src="images/mobile.jpg" alt="..." class="img-responsive"/>
									</div>
									<div class="col-sm-8">
										<h4 class="nomargin">Product 1</h4>
										<img src="images/demo.jpg" alt="..." class="img-responsive img-vendor"/>
									</div>
								</div>
							</td>
							<td class="col-md-1">
								<div class="input-group input-group-sm qnt-input">
									
									<input type="number" class="form-control" min="1" value="1" aria-describedby="sizing-addon3">
									<span class="btn btn-common qnt-add input-group-addon" id="sizing-addon3"><i class="glyphicon glyphicon-plus"></i></span>
								</div>
							</td>
							<td class="col-md-1"></td>
							<td class="col-md-1"><strong>$1.99</strong></td>
							<td class="col-md-1">
								<a class=><i class="glyphicon glyphicon-remove"></i></a>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>$1.99</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn color-text"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong></strong></td>
							<td><a href="#" class="btn btn-common btn-block">Continue to Cart <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
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