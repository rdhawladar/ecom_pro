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

       

                <div class="col-md-12" style="margin: 20px auto;">
                  <?php for($i = 1; $i<=3; $i++) {?>
                    <div class="row" style="background: #FBFCFE; margin: 20px auto; padding: 15px;">
                            <div class="col-lg-6">
                              <div class="input-group">
                                  <div class="input-group">
                                    <div class="input-group-btn">
                                      <!-- Button and dropdown menu -->
                                      <img src="images/destination.svg" style="width: 20%">
                                      <a class="btn" style="margin-right: 30px; ">alskdf alsdkfj 

                                      </a>
                                    </div>
                                    <select class="form-control" id="sel1" style="border:none; box-shadow: 0 0 0; background: #FBFCFE;">
                                      <option><span style="color: red;">Country</span></option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>
                                  </div>
                              </div><!-- /input-group -->
                            </div><!-- /.row -->

                            <div class="col-lg-6">
                              <div class="input-group">
                                  <div class="input-group">
                                    <div class="input-group-btn">
                                      <!-- Button and dropdown menu -->
                                      <img src="images/airport.svg" style="width: 20%">
                                      <a class="btn" style="margin-right: 30px; ">alskdf alsdkfj 

                                      </a>
                                    </div>
                                    <select class="form-control" id="sel1" style="border:none; box-shadow: 0 0 0; background: #FBFCFE;">
                                      <option>Country</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>
                                  </div>
                              </div><!-- /input-group -->
                            </div><!-- /.row -->
                          
                    </div>
                  <?php }?>
                </div>
                <a href="" class="btn btn-common" style="background: url(images/destination.svg) no-repeat #43C1B6;
    background-size: 16% 57%;
    padding: 1% 5%;
    background-position: 10px ">Add Return Route</a>
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