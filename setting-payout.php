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

                    <div class="row board">
                        <div class="col-md-6">
                            <div class="row top">
                                <div class="content">
                                  <div class="col-md-6">
                                      <span>Purchased Amount</span>
                                  </div>
                                  <div class="col-md-6 payout-input">
                                    <span>$</span> <input class="form-control" type="text" name="payout-input" value="5042"      >
                                  </div>
                                </div>                              
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="row top">
                                <div class="content">
                                  <div class="col-md-6">
                                      <span>Withdraw Method</span>
                                  </div>
                                  <div class="col-md-6 payout-input">
                                    <select class="form-control">
                                       <option>PP-Booth</option>
                                    </select>
                                  </div>
                                </div>                              
                            </div>
                          
                        </div>
                    </div>
                    

                    <div class="row board second">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="content">
                                  <div class="col-md-4">
                                      <span>Enter Booth Code</span>
                                  </div>
                                  <div class="col-md-8 payout-input">
                                    <input class="form-control" type="text" name="payout-input" placeholder="DD5674">
                                    <div>
                                      <img src="images/demo.jpg" class="img-responsive" style="width: 15%; float: left; margin-right: 15px; border-radius: 10px; ">
                                      <h4 style="display: inline-block; width: 60%; ">Dresden Airport, Germany DRS.</h4>
                                      
                                    </div>
                                  </div>
                                </div>                              
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="content">
                                  <div class="col-md-1">
                                      <span>Or</span>
                                  </div>
                                  <div class="col-md-6 payout-input">
                                    <a href="#" class="btn btn-common btn-round">Scan QR Code</a>
                                  </div>
                                </div>                              
                            </div>
                          
                        </div>
                    </div>

                    <div class="row layer-1">
                      <a href="#" class="pull-left">Cancel</a>
                      <a href="#" class="pull-right btn btn-common btn-round"  data-toggle="modal" data-target="#withdrawModal">Withdraw</a>
                    </div>

                </div>
            </div>

        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Payout Confirmation</h5>
            </div>
            <div class="modal-body">
                          <div class="row layer-4">
                                <div class="col-md-12">
                                      <table class="table table-responsive table-borderless" >
                                        <tr>
                                          <td>Payout Amount</td>
                                          <td>$5042</td>
                                          <td rowspan="3" colspan="3" class="payout-image"><img src="images/demo.jpg" class="img-responsive"></td>
                                        </tr>
                                        <tr>
                                          <td>Withdraw Method</td>
                                          <td>PP-Booth</td>
                                        </tr>
                                        <tr>
                                          <td>Booth Id</td>
                                          <td>DD5674 (Dresden Airport, Germany - DRS )</td>
                                        </tr>
                                      </table>
                                </div>
                                
                              
                          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-common btn-round btn-same" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-common btn-round btn-same">Confirm</button>
            </div>
          </div>
        </div>
      </div>
</body>
</html>