<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--
  Customize this policy to fit your own app's needs. For more guidance, see:
      https://github.com/apache/cordova-plugin-whitelist/blob/master/README.md#content-security-policy
  Some notes:
      * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
      * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
      * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
          * Enable inline JS: add 'unsafe-inline' to default-src
  -->
  <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap: content:">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="theme-color" content="#2196f3">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">
  <title>My App</title>
  
  <!-- Bootstrap and desktop  -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>

  <!-- Mobile framework -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="framework7/css/framework7.min.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>

  <div id="app" class="loginModal">

    <!-- Views/Tabs container -->
    <div class="views tabs ios-edges">
      <div class="toolbar tabbar-labels toolbar-bottom-md">
        <div class="toolbar-inner">

          <div class="col-xs-12">
                <div class="col-xs-6 text-left">
                   <p>PEERPOSTED &COPY; 2018</p>
                </div>
                <div class="col-xs-6 text-right">
                    <div class="footer-icon">
                        <img src="images/social/twitter.svg">
                        <img src="images/social/instagram.svg">
                        <img src="images/social/facebook.svg" class="facebook">
                    </div>
                </div>
            
          </div>
        </div>
      </div>

      <div class="page" data-name="home">
        <!-- Scrollable page content-->
        <div class="page-content">
            <!-- Login Modal -->
            <div class="login-content">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="right-half">
                      
                      <img class="img-responsive img-right" src="images/logo.png" > 
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
                    <button type="submit" class="btn btn-round btn-common btn-login ">Login</button>
                  </form>
                  <div class="social-icon-modal">
                    <p>Social Login: </p>
                    <img src="images/social/twitter.svg">
                    <img src="images/social/instagram.svg">
                    <img src="images/social/facebook.svg">
                  </div>
                  <p class="modal-bottom"><a href="#">Forget Password </a> | <a href="#"> Register</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- !END Login Modal  -->
        </div>
      </div>
    </div>
  </div>
  <!-- Cordova -->
  <!--
  <script src="cordova.js"></script>
  -->

  <!-- Framework7 library -->
  <script src="framework7/js/framework7.min.js"></script>

  <!-- App routes -->
  <script src="js/routes.js"></script>

  <!-- Your custom app scripts -->
  <script src="js/app.js"></script>
</body>
</html>