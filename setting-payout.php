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
      			<div class="container-fluid setting-payment setting-payout travel">
                <div class="col-md-12">
                    <div class="row layer-1">
                      <a href="#" class="pull-left">Payout</a>
                      <a href="#" class="pull-right">How it Works!</a>
                    </div>

                    <div class="row layer-2">
                        <ul class="nav navbar-nav">
                          <li><a href="setting.php">Profile</a></li>
                          <li><a href="#">Change Password</a></li>
                          <li><a href="setting-payment.php" class="active">Payment</a></li>
                        </ul>
                    </div>

                    <div class="row board">
                        <p><b>Traveller Board </b></p>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="content">
                                  <div class="col-md-4">
                                      <span>Payout Amount</span>
                                  </div>
                                  <div class="col-md-8 payout-input">
                                    <span>$</span>
                                    <input class="form-control " type="text" name="" value="5042">
                                      
                                  </div>
                                </div>
                              
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="content right">
                                  <div class="col-md-4">
                                      <span>Available Amount</span>
                                  </div>
                                  <div class="col-md-4">
                                      <span class="dollar"> <b>$5042</b> </span>
                                  </div>
                                  <div class="col-md-4 text-right">
                                      <a href="#" class="btn btn-common btn-round payout">Pay Out</a>
                                  </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>

                    <div class="row board">
                        <p><b>Buyer Board </b></p>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="content left">
                                  <div class="col-md-6">
                                      <span>Purchased Amount</span>
                                  </div>
                                  <div class="col-md-6 text-right">
                                      <span class="dollar"><b>$200</b></span>
                                  </div>
                                </div>                              
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="content right">
                                  <div class="col-md-4">
                                      <span>XXXXX Amount</span>
                                  </div>
                                  <div class="col-md-4">
                                      <span class="dollar"> <b>$323</b> </span>
                                  </div>
                                  <div class="col-md-4 text-right">
                                      <a href="#" class="btn btn-common btn-round payout">Contact</a>
                                  </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p><b>General Setting</b></p>
                            <div class="details  layer-3">
                              <span>Payment Action</span>
                              <a href="#" class="active pull-right">Cancel</a>
                              <a href="#" class="active pull-right">Save</a>
                            </div>
                        </div>
                    </div>


                    <div class="row final-layer">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="content">
                                  <div class="col-md-3 left">
                                      <div class="row">
                                          <div class="card">
                                              <div class="col-md-2">
                                                    <img src="images/card.svg" class="img-responsive card-icon">
                                              </div>
                                              <div class="col-md-6">
                                                    <img src="images/demo.jpg" class="img-responsive card-type">
                                                    <img src="images/demo.jpg" class="img-responsive card-type">
                                                    <img src="images/demo.jpg" class="img-responsive card-type">
                                              </div>
                                            
                                            
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-md-4 center">
                                      <div class="middle text-center">
                                          <h3>...XXXX 4589</h3>
                                          <a href="#" class="btn btn-common btn-same"> Edit</a>
                                          <a href="#" class="btn btn-common btn-same"> Remove</a>
                                      </div>
                                      <div class="middle text-center">
                                          <h3>...XXXX 4589</h3>
                                          <a href="#" class="btn btn-common btn-same"> Edit</a>
                                          <a href="#" class="btn btn-common btn-same"> Remove</a>
                                      </div>
                                  </div>
                                  <div class="col-md-5 text-right right">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="no" placeholder="XXXX-XXXX-XXXX-4321">
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="date" placeholder="DD-MM-YYYY">
                                            </div>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" name="ccv" placeholder="CCV">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 text-left" >
                                                <input type="checkbox" name="">
                                                <label>Primary Card</label>
                                            </div>
                                            <div class="col-md-9 text-center" >
                                                <a href="#" class="btn btn-common btn-round">Add New Card</a>
                                            </div>
                                          
                                        </div>
                                  </div>
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