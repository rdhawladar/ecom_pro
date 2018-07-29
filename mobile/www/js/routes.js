routes = [
  {
    path: '/',
    url: './index_mob.php',
  },
  {
    path: '/register/',
    url: './register.php',
  },
  {
    path: '/about/',
    url: './pages/about.php',
  },
  {
    path: '/catalog/',
    componentUrl: './pages/catalog.php',
  },
  {
    path: '/product/:id/',
    componentUrl: './pages/product.php',
  },
  {
    path: '/settings/',
    url: './pages/settings.php',
  },
  {
    path: '/product-home/',
    url: './pp-pages/product-home.php',
  },
  {
    path: '/search/',
    url: './pp-pages/search.php',
  },
  // Page Loaders & Router
  {
    path: '/page-loader-template7/:user/:userId/:posts/:postId/',
    templateUrl: './pages/page-loader-template7.php',
  },
  {
    path: '/page-loader-component/:user/:userId/:posts/:postId/',
    componentUrl: './pages/page-loader-component.php',
  },
  {
    path: '/request-and-load/user/:userId/',
    async: function (routeTo, routeFrom, resolve, reject) {
      // Router instance
      var router = this;

      // App instance
      var app = router.app;

      // Show Preloader
      app.preloader.show();

      // User ID from request
      var userId = routeTo.params.userId;

      // Simulate Ajax Request
      setTimeout(function () {
        // We got user data from request
        var user = {
          firstName: 'Vladimir',
          lastName: 'Kharlampidi',
          about: 'Hello, i am creator of Framework7! Hope you like it!',
          links: [
            {
              title: 'Framework7 Website',
              url: 'http://framework7.io',
            },
            {
              title: 'Framework7 Forum',
              url: 'http://forum.framework7.io',
            },
          ]
        };
        // Hide Preloader
        app.preloader.hide();

        // Resolve route to load page
        resolve(
          {
            componentUrl: './pages/request-and-load.php',
          },
          {
            context: {
              user: user,
            }
          }
        );
      }, 1000);
    },
  },
  // Default route (404 page). MUST BE THE LAST
  {
    path: '(.*)',
    url: './pages/404.php',
  },
];
