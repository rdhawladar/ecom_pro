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
	<link rel="stylesheet" href="css/setting-payout.css">
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
      			<div class="container-fluid setting-payout">
                <div class="col-md-12">
                    <div class="layout-1">
                        <a href="#">Payout</a>
                        <a href="#" class="pull-right">How it works!</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="layer-2">
                        <div class="row">
                                <div class="col-lg-6">
                                      <div class="col-md-3">
                                        <label>Payment Amount</label>
                                      </div>
                                      <div class="col-md-9">
                                        <span class="dollar">$</span> <input class="form-control" type="text" name="amount" value="5042">
                                        
                                      </div>
                                </div><!-- /.row -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Withdraw Method</label>
                                        <select class="form-control" id="sel1">
                                            <option>Airport Name</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div><!-- /input-group -->
                                </div><!-- /.row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                  <a href="#" class="">Cancel</a>
                  <a href="#" class="btn btn-common pull-right">Withdraw</a>
                </div>
            </div>

        </div>
      </div>

</body>
</html>