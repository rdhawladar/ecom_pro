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

  <!-- For desktop element -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/product-details.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/payment.css">
  <link rel="stylesheet" href="css/setting.css">
  <link rel="stylesheet" href="css/payout-success.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>



  <!-- mobile  -->
  <link rel="stylesheet" href="framework7/css/framework7.min.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/app.css">

</head>
<body>
  <div id="app">
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar"></div>
    <!-- Left panel with cover effect-->
    <div class="panel panel-left panel-cover theme-dark">
      <div class="view">
        <div class="page">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="title">Left Panel</div>
            </div>
          </div>
          <div class="page-content">
            <div class="block">Left panel content goes here</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Views/Tabs container -->
    <div class="views tabs ios-edges">
      <!-- Tabbar for switching views-tabs -->
      <div class="toolbar tabbar-labels toolbar-bottom-md">
        <div class="toolbar-inner">
          <a href="#view-home" class="tab-link tab-link-active">
            <i class="icon f7-icons ios-only">home</i>
            <i class="icon f7-icons ios-only icon-ios-fill">home_fill</i>
            <i class="icon material-icons md-only">home</i>
            <span class="tabbar-label">Dashboard</span>
          </a>
          <a href="#view-catalog" class="tab-link">
            <i class="icon f7-icons ios-only">list</i>
            <i class="icon f7-icons ios-only icon-ios-fill">list_fill</i>
            <i class="icon material-icons md-only">view_list</i>
            <span class="tabbar-label">Ship</span>
          </a>
          <a href="#view-search" class="tab-link">
            <i class="icon f7-icons ios-only">search</i>
            <i class="icon f7-icons ios-only icon-ios-fill">search_fill</i>
            <i class="icon material-icons md-only">search</i>
          </a>
          <a href="#view-catalog" class="tab-link">
            <i class="icon f7-icons ios-only">list</i>
            <i class="icon f7-icons ios-only icon-ios-fill">list_fill</i>
            <i class="icon material-icons md-only">view_list</i>
            <span class="tabbar-label">Inbox</span>
          </a>
          <a href="#view-settings" class="tab-link">
            <i class="icon f7-icons ios-only">settings</i>
            <i class="icon f7-icons ios-only icon-ios-fill">settings_fill</i>
            <i class="icon material-icons md-only">settings</i>
            <span class="tabbar-label">Settings</span>
          </a>


        </div>
      </div>

      <!-- Top NavbarTabbar for switching views-tabs -->
      <div class="toolbar-top-md">
          <!-- Top Navbar -->
          <div class="navbar">
            <div class="navbar-inner">
              <div class="left">
                <a href="#" class="link icon-only panel-open" data-panel="left">
                  <i class="icon f7-icons ios-only">menu</i>
                  <i class="icon material-icons md-only">menu</i>
                </a>
              </div>
              <div class="title sliding">Home</div>
              <div class="right">
                <a href="#" class="link icon-only panel-open" data-panel="right">
                  <i class="icon f7-icons ios-only">menu</i>
                  <i class="icon material-icons md-only">menu</i>
                </a>
              </div>
            </div>
          </div>
      </div>
      <!-- Your main view/tab, should have "view-main" class. It also has "tab-active" class -->
      <div id="view-home" class="view view-main tab tab-active">
        <!-- Page, data-name contains page name which can be used in page callbacks -->
        <div class="page" data-name="home">

          <!-- Top Navbar -->
          <div class="page-content">
            <div class="list">
                  <a href="#view-product-home" class="item-content tab-link">
                    <div class="item-inner">
                      <div class="item-title">Home</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="#view-product-details" class="item-content tab-link">
                    <div class="item-inner">
                      <div class="item-title">Product Details</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="#view-search" class="item-content tab-link">
                    <div class="item-inner">
                      <div class="item-title">Search</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="#view-cart" class="item-content tab-link">
                    <div class="item-inner">
                      <div class="item-title">Cart</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="#view-dashboard" class="item-content tab-link">
                    <div class="item-inner">
                      <div class="item-title">Dashboard</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="/payment/" class="item-content">
                    <div class="item-inner">
                      <div class="item-title">Payment</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="/payout/" class="item-content">
                    <div class="item-inner">
                      <div class="item-title">Payout</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="#view-setting" class="item-content tab-link">
                    <div class="item-inner">
                      <div class="item-title">Settings</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="/payout-success/" class="item-content">
                    <div class="item-inner">
                      <div class="item-title">Payout Success</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="/add-travel/" class="item-content">
                    <div class="item-inner">
                      <div class="item-title">Add Trave</div>
                    </div>
                  </a>
            </div>

            <div class="list">
                  <a href="/my-travel/" class="item-content">
                    <div class="item-inner">
                      <div class="item-title">My Travel</div>
                    </div>
                  </a>
            </div>

            <div class="list">
              <ul>
                <li>
                  <a href="/about/" class="item-content item-link">
                    <div class="item-inner">
                      <div class="item-title">About</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="block-title">Modals</div>
            <div class="block block-strong">
              <div class="row">
                <div class="col-50">
                  <a href="#" class="btn-common button button-raised button-fill popup-open" data-popup="#my-popup">Popup</a>
                </div>
                <div class="col-50">
                  <a href="#" class="button btn-common button-raised  button-fill login-screen-open" data-login-screen="#my-login-screen">Login Screen</a>
                </div>
              </div>
            </div>

            <div class="block-title">Panels</div>
            <div class="block block-strong">
              <div class="row">
                <div class="col-50">
                  <a href="#" class="button button-raised button-fill panel-open" data-panel="left">Left Panel</a>
                </div>
                <div class="col-50">
                  <a href="#" class="button button-raised button-fill panel-open" data-panel="right">Right Panel</a>
                </div>
              </div>
            </div>

            <div class="block-title searchbar-hide-on-search">Page Loaders & Router</div>
            <div class="list links-list searchbar-hide-on-search">
              <ul>
                <li>
                  <a href="/page-loader-template7/vladimir/123/about-me/1/?start=0&end=30#top">Template7 Page</a>
                </li>
                <li>
                  <a href="/page-loader-component/vladimir/123/about-me/1/?start=0&end=30#top">Component Page</a>
                </li>
                <li>
                  <a href="/load-something-that-doesnt-exist/">Default Route (404)</a>
                </li>
                <li>
                  <a href="/request-and-load/user/123456/">Request Data & Load</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Catalog View -->
      <div id="view-catalog" class="view tab">
        <!-- Catalog page will be loaded here dynamically from /catalog/ route -->
      </div>

      <div id="view-settings" class="view tab">
      </div>

      <div id="view-product-home" class="view tab">
      </div>

      <div id="view-product-details" class="view tab">
      </div>

      <div id="view-search" class="view tab">
      </div>

      <div id="view-cart" class="view tab">
      </div>

      <div id="view-setting" class="view tab">
      </div>

      <div id="view-dashboard" class="view tab">
      </div>
    </div>

    <!-- Popup -->
    <div class="popup" id="my-popup">
      <div class="view">
        <div class="page">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="title">Popup</div>
              <div class="right">
                <a href="#" class="link popup-close">Close</a>
              </div>
            </div>
          </div>
          <div class="page-content">
            <div class="block">
              <p>Popup content goes here.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Withdraw -->
    <div class="popup popup-payout" id="my-withdraw">
      <div class="view">
        <div class="page payout-page">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="title">Payout Confirmation</div>
            </div>
          </div>
          <div class="page-content">
            <div class="block layer-4">
                <table class="table table-responsive table-payout text-left " >
                  <tr>
                    <td>Payout Amount</td>
                    <td>$5042</td>
                  </tr>
                  <tr>
                    <td>Withdraw Method</td>
                    <td>PP-Booth</td>
                  </tr>
                  <tr>
                    <td>Booth Id</td>
                    <td><img src="images/demo.jpg" class="img-responsive payout-confirm-img">DD5674 (Dresden Airport, Germany - DRS )</td>
                  </tr>
                </table>
                 <div class="col-xs-6">
                        <a href="#" class="col button button-round button-fill  link popup-close">Cancel</a>

                  </div>
                 <div class="col-xs-6">
                        <a href="#" class="col button button-round button-fill  link popup-close" data-popup="#my-withdraw">Withdraw</a>

                  </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login Screen -->
    <div class="login-screen" id="my-login-screen">
      <div class="view">
        <div class="page">
          <div class="page-content login-screen-content">
            <div class="login-screen-title">Login</div>
            <div class="list">
              <ul>
                <li class="item-content item-input">
                  <div class="item-inner">
                    <div class="item-title item-label">Username</div>
                    <div class="item-input-wrap">
                      <input type="text" name="username" placeholder="Your username">
                    </div>
                  </div>
                </li>
                <li class="item-content item-input">
                  <div class="item-inner">
                    <div class="item-title item-label">Password</div>
                    <div class="item-input-wrap">
                      <input type="password" name="password" placeholder="Your password">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="list">
              <ul>
                <li>
                  <a href="#" class="item-link list-button login-button">Sign In</a>
                </li>
              </ul>
              <div class="block-footer">Some text about login information.<br>Click "Sign In" to close Login Screen</div>
            </div>
          </div>
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
