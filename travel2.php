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
	<link rel="stylesheet" href="css/travel.css">
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
        <div id="content" >
      			<?php include('header.php') ?>
      			<div class="container-fluid travel ">
                <div class="col-md-12">
                    <div class="row layer-1">
                      <a href="#" class="pull-left">My Travels</a>
                      <a href="#" class="pull-right">Add New Travels</a>
                    </div>
                    <div class="row layer-2">
                        <ul class="nav navbar-nav">
                          <li><a href="#" class="active">Active Travels</a></li>
                          <li><a href="#">Upcoming Travels</a></li>
                          <li><a href="#">Successful Travels</a></li>
                          <li><a href="#">Cancelled Travels</a></li>
                          <li><a href="#">Archieved Travels</a></li>
                        </ul>
                    </div>
                    <div class="row layer-3">
                        <div class="details">
                          <span>19-05-2018</span> | <span>DHK-FLR</span>
                          <a href="#" class="active pull-right">Cancel</a>
                          <a href="#" class="active pull-right">Edit</a>
                        </div>
                    </div>
                    <div class="row layer-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-6">
                                  <table class="table table-responsive left-table" >
                                    <tr>
                                      <td rowspan="5"><img src="images/departure.svg"></td>
                                      <td>Departure</td>
                                      <td>Dhaka, Bangladesh</td>
                                    </tr>
                                    <tr>
                                      <td>Date</td>
                                      <td>19-05-2018</td>
                                    </tr>
                                    <tr>
                                      <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>Destination</td>
                                      <td>Florida, USA</td>
                                    </tr>
                                    <tr>
                                      <td>Date</td>
                                      <td>20-05-2018</td>
                                    </tr>
                                  </table>
                              </div><!-- /.row -->
                              <div class="col-md-6">
                                  <table class="table table-responsive">
                                    <tr>
                                      <td rowspan="5"><img src="images/departure.svg"></td>
                                      <td>Departure</td>
                                      <td>Dhaka, Bangladesh</td>
                                    </tr>
                                    <tr>
                                      <td>Date</td>
                                      <td>19-05-2018</td>
                                    </tr>
                                    <tr>
                                      <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>Destination</td>
                                      <td>Florida, USA</td>
                                    </tr>
                                    <tr>
                                      <td>Date</td>
                                      <td>20-05-2018</td>
                                    </tr>
                                  </table>
                              </div><!-- /.row -->
                            </div>
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