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
			<div class="container">
			    <div class="well well-sm">
			        <strong>Display</strong>
			        <div class="btn-group">
			            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
			            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
			                class="glyphicon glyphicon-th"></span>Grid</a>
			        </div>
			        <div class="pull-right">
			        	<p>More than 500 products found.</p>
			        </div>
			    </div>
			    <div id="products" class="row list-group">
			    	<?php 
			    		for($i=1; $i<8; $i++) {
					?>
				        <div class="item col-xs-3 col-lg-3">
				            <div class="thumbnail">
				            	<a href="#" class="btn btn-danger">-10%</a>
				                <img class="group list-group-image" src="images/mobile.jpg" alt="" />
				                <img class="group hover-icon-eye" src="images/details.svg" alt="" />
				                <img class="group hover-icon-cart" src="images/add_to_cart.svg" alt="" />
				                <div class="caption">
				                    <h4 class="group inner list-group-item-heading">
				                        Product title</h4>
				                    <div class="row">
				                        <div class="col-xs-12 col-md-6">
				                            <p class="lead">
				                                $21.000</p>
				                        </div>
				                        <div class="col-xs-12 col-md-6">
				                        	<img class="pull-right heart" src="images/favourite.svg">
				                            
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
					<?php 			    			
			    		}
			    	?>
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