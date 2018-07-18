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
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

<style type="text/css">
  
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>
</head>
<body>

    <div class="wrapper">
		<?php include('sidebar.php') ?>

        <!-- Page Content Holder -->
        <div id="content">
      			<?php include('header.php') ?>
      			<div class="container-fluid dashboard">
                <div class="row">
                    <div class="content">
                        <div class="col-md-6">
                            <h1>What do you want to do?</h1>
                        </div>
                        <div class="col-md-6">
                            <nav class='menu'>
                              <input checked='checked' class='menu-toggler' id='menu-toggler' type='checkbox'>
                              <!-- <label for='menu-toggler'></label> -->
                              <ul>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/travel.svg" > </a>
                                </li>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/confirmation.svg" > </a>
                                </li>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/my_travel.svg" > </a>
                                </li>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/request.svg" > </a>
                                </li>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/orders.svg" > </a>
                                </li>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/buy.svg" > </a>
                                </li>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/ship.svg" > </a>
                                </li>
                                <li class='menu-item'>
                                  <a href='#' target='_blank'> <img class="img-responsive" src="images/dashboard/company.svg" > </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div> 
                </div>
            </div>

        </div>
      </div>

	<script type="text/javascript">
	</script>
</body>
</html>