	<nav class="top-navbar">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Peerposted</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="travel.php">Add Travel</a></li>
					<li><a href="travel2.php">Add Travel 2</a></li>
					<li><a href="order.php">Orders</a></li>
					<li><a href="payment_confirmation.php">Payment Confirmation</a></li>
					<li><a href="request.php">Request</a></li>
					<li><a href="setting.php">Setting</a></li>
					<li><a href="setting-payment.php">Setting Payment</a></li>
					<li><a href="#" data-toggle="modal" data-target="#loginModal">Log In</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><img src="images/cart.svg"></a></li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" role="button" ><img src="images/user.jpg" class="user_img"> </a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

<!-- Login Modal -->
<div class="modal fade bs-example-modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-6 padding-0">
      			<img class="img-responsive img-right" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" >
      		</div>
      		<div class="col-md-6">
      			<div class="right-half">
	      				
	      			
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <br><br>
		      		<h4 class="login-title">Someone is waiting ...<br> Start helping him by Log in</h4>
					<form class="form-horizontal">
					  <div class="form-group">
					    <div class="col-sm-12">
					      <input type="email" class="form-control" id="inputEmail3" placeholder="email/username">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-12">
					      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					    </div>
					  </div>
					  <button type="submit" class="btn btn-login">Login</button>
					</form>
					<div class="social-icon-modal">
						<p>Social Login: </p>
						<img src="images/social/twitter.svg">
						<img src="images/social/instagram.svg">
						<img src="images/social/facebook.svg">
					</div>
					<p class="modal-bottom"><a href="#">Forget Password </a> | <a href="#">Sign Up</a></p>
      			</div>
      		</div>
      	</div>
      </div>
    </div>
  </div>
</div>
<!-- !END Login Modal  -->