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

 <div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <div class="input-group-btn">

        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </button>
        	<img src="images/search.svg" class="form-control"> 
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
  <select class="form-control" id="sel1">
    <option>Country</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
    </div><!-- /input-group -->
</div><!-- /.row -->
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