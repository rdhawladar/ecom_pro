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
  <script src="js/script.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
</head>
<body>
    <div class="wrapper">
		<?php include('sidebar.php') ?>

        <!-- Page Content Holder -->
        <div id="content" >
      			<?php include('header.php') ?>
      			<div class="container-fluid setting travel ">
                <div class="col-md-12">
                    <div class="row layer-1">
                      <a href="#" class="pull-left">My Settings</a>
                      <a href="#" class="pull-right">Refer a friend</a>
                    </div>
                    <div class="row layer-2">
                        <ul class="nav navbar-nav">
                          <li><a href="setting.php" class="active">Profile</a></li>
                          <li><a href="#">Change Password</a></li>
                          <li><a href="setting-payment.php">Payment</a></li>
                        </ul>
                    </div>
                    <div class="row layer-3">
                        <div class="details">
                          <span>Welcome Back!</span>
                          <a href="#" class="active pull-right">Edit</a>
                          <a href="#" class="active pull-right">Delete My Account</a>
                        </div>
                    </div>
                    <div class="row layer-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-6">
                                  <table class="table table-responsive left-table" >
                                    <tr>
                                      <td rowspan="7"><img src="images/user.jpg" class="img-responsive profile-img"></td>
                                      <td>Name</td>
                                      <td>John Doe</td>
                                    </tr>
                                    <tr>
                                      <td>Location</td>
                                      <td>Dhaka, Bangladesh</td>
                                    </tr>
                                    <tr>
                                      <td>Gender</td>
                                      <td>Male</td>
                                    </tr>
                                    <tr>
                                      <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>About Me</td>
                                      <td>Florida, USA</td>
                                    </tr>
                                    <tr>
                                      <td>Registered</td>
                                      <td>20-05-2018</td>
                                    </tr>
                                    <tr>
                                      <td colspan="3">

                                          <a href="#" class="btn btn-round btn-common">Change Photo</a>
                                          <a href="#" class="btn btn-round btn-common">Change Password</a>
                                      </td>
                                    </tr>
                                  </table>
                              </div><!-- /.row -->
                              <div class="col-md-6">
                                  <table class="table table-responsive">
                                    <tr>
                                      <td rowspan="6"><img class="img-responsive location-img" src="images/location.svg"></td>
                                      <td>Address</td>
                                      <td>522/2, Metro Lane</td>
                                    </tr>
                                    <tr>
                                      <td>City</td>
                                      <td>Dhaka</td>
                                    </tr>
                                    <tr>
                                      <td>State</td>
                                      <td>Mirpur</td>
                                    </tr>
                                    <tr>
                                      <td>Zipcode</td>
                                      <td>1216</td>
                                    </tr>
                                    <tr>
                                      <td>Country</td>
                                      <td>Bangladesh</td>
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
</body>
</html>