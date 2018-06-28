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
			<div class="container-fluid request">

                <div class="col-lg-12 input-box">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <!-- Button and dropdown menu -->
                          <img src="images/departure.svg" style="width: 20%">
                          <a class="btn" style="margin-right: 30px; ">Select Departure 

                          </a>
                        </div>
                        <select class="form-control text-danger" id="sel1">
                            <option>19-05-2018 | DHK - FLR</option>
		                      <option>19-05-2018 | DHK - FLR</option>
		                      <option>19-05-2018 | DHK - FLR</option>
                        </select>
                      </div>
                </div><!-- /.row -->
			    <div class="col-md-12">
			    	

				    <h5>Available shipping request.</h5>
				    <div id="products" class="row list-group">
				    	<?php 
				    		for($i=1; $i<8; $i++) {
						?>
					        <div class="request-item col-xs-3 col-lg-3">
					            <div class="thumbnail">
					            	<a href="#" class="btn btn-danger">-10%</a>
					                <img class="group list-group-image" src="images/mobile.jpg" alt="" />
					                <img class="group hover-icon-eye" src="images/details.svg" alt="" />
					                <img class="group hover-icon-cart" src="images/add_to_cart.svg" alt="" />
					                <div class="caption col-md-12">
					                	<div class="row">
					                		<div class="col-md-10">
							                    <h5 class="group inner list-group-item-heading">
							                        Product Title</h5>
							                    <h5 class="group inner list-group-item-heading">
							                        Product description</h5>
					                		</div>
					                		<div class="col-md-2 ">
					                            <a href="#" class="btn btn-common pull-right">$210</a>
					                			
					                		</div>
					                		
					                	</div>
					                	<div class="row">
					                		<div class="col-md-6">
					                			
					                            <a  href="#" class="btn btn-common pull-left collect">Collect</a>
					                		</div>
					                		<div class="col-md-6">
					                			
					                            <a href="#" class="btn btn-common pull-right contact">Contact</a>
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