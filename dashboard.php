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
      			<div class="container-fluid">
                <div class="col-md-6">
                    <h1>What do you want to do?</h1>
                </div>
                <div class="col-md-6">
<nav class='menu'>
  <input checked='checked' class='menu-toggler' id='menu-toggler' type='checkbox'>
  <label for='menu-toggler'></label>
  <ul>
    <li class='menu-item'>
      <a class='fa fa-facebook' href='https://www.facebook.com/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-google' href='https://www.google.com/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-dribbble' href='https://dribbble.com/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-codepen' href='https://codepen.io/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-linkedin' href='https://www.linkedin.com/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-github' href='https://github.com/' target='_blank'></a>
    </li>
  </ul>
</nav>
 
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