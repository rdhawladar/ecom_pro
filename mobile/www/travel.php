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
  <script src="js/script.js"></script>


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
                <p>Add your travel. It's easy...</p>
                    <div class="row" style="background: #FBFCFE; margin: 20px auto; padding: 15px;">
                            <div class="col-lg-6">
                              <div class="input-group">
                                  <div class="input-group">
                                    <div class="input-group-btn">
                                      <!-- Button and dropdown menu -->
                                      <img src="images/departure.svg" style="width: 20%">
                                      <a class="btn" style="margin-right: 30px; ">Select Departure 

                                      </a>
                                    </div>
                                    <select class="form-control" id="sel1" style="border:none; box-shadow: 0 0 0; background: #FBFCFE; color: red;">
                                      <option><span >Country</span></option>
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
                                      <a class="btn" style="margin-right: 30px; ">Select Airport

                                      </a>
                                    </div>
                                    <select class="form-control" id="sel1" style="border:none; box-shadow: 0 0 0; background: #FBFCFE; color: red;">
                                      <option>Airport Name</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>
                                  </div>
                              </div><!-- /input-group -->
                            </div><!-- /.row -->
                          
                    </div>
                    <div class="row" style="background: #FBFCFE; margin: 20px auto; padding: 15px;">
                            <div class="col-lg-6">
                              <div class="input-group">
                                  <div class="input-group">
                                    <div class="input-group-btn">
                                      <!-- Button and dropdown menu -->
                                      <img src="images/destination.svg" style="width: 20%">
                                      <a class="btn" style="margin-right: 30px; ">Select Destination

                                      </a>
                                    </div>
                                    <select class="form-control" id="sel1" style="border:none; box-shadow: 0 0 0; background: #FBFCFE; color: red;">
                                      <option><span >Country</span></option>
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
                                      <a class="btn" style="margin-right: 30px; ">Select Airport

                                      </a>
                                    </div>
                                    <select class="form-control" id="sel1" style="border:none; box-shadow: 0 0 0; background: #FBFCFE; color: red;">
                                      <option>Airport Name</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>
                                  </div>
                              </div><!-- /input-group -->
                            </div><!-- /.row -->
                          
                    </div>
                    <div class="row" style="background: #FBFCFE; margin: 20px auto; padding: 15px;">
                            <div class="col-lg-6">
                              <div class="input-group">
                                  <div class="input-group">
                                    <div class="input-group-btn">
                                      <!-- Button and dropdown menu -->
                                      <img src="images/calender.svg" style="width: 20%">
                                      <a class="btn" style="margin-right: 30px; ">Stay From

                                      </a>
                                    </div>
                                    <input type="date" name="" style="background: #FBFCFE; border: none; color: red; ">

                                  </div>
                              </div><!-- /input-group -->
                            </div><!-- /.row -->

                            <div class="col-lg-6">
                              <div class="input-group">
                                  <div class="input-group">
                                    <div class="input-group-btn">
                                      <!-- Button and dropdown menu -->
                                      <img src="images/calender.svg" style="width: 20%">
                                      <a class="btn" style="margin-right: 30px; ">Stay To

                                      </a>
                                    </div>
                                    <input type="date" name="" style="background: #FBFCFE; border: none; color: red;">
                                  </div>
                              </div><!-- /input-group -->
                            </div><!-- /.row -->
                          
                    </div>
                </div>
                <a href="" class="btn btn-common" style="background: url(images/destination.svg) no-repeat #43C1B6;background-size: 16% 57%;padding: 1% 5%;background-position: 10px ">Add Return Route</a>
            </div>

        </div>
      </div>

</body>
</html>