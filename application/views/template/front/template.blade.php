<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') | Seduluran</title>

    <!-- Favicon -->
		<link rel="shortcut icon" href="{{base_url()}}assets/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{base_url()}}assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{base_url()}}assets/css/theme.css">
		<link rel="stylesheet" href="{{base_url()}}assets/css/theme-elements.css">
		<link rel="stylesheet" href="{{base_url()}}assets/css/theme-blog.css">
		<link rel="stylesheet" href="{{base_url()}}assets/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="{{base_url()}}assets/vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{base_url()}}assets/css/skins/skin-shop-9.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{base_url()}}assets/css/demos/demo-shop-9.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{base_url()}}assets/css/custom.css">

		<!-- Head Libs -->
		<script src="{{base_url()}}assets/vendor/modernizr/modernizr.min.js"></script>
  </head>
  <body>
    <div class="body">
      @include('template.front.header')

      <div class="main" role="main">

        @yield('content')

      </div>

      @include('template.front.footer')
    </div>

    <!-- Vendor -->
		<script src="{{base_url()}}assets/vendor/jquery/jquery.min.js"></script>
		<script src="{{base_url()}}assets/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="{{base_url()}}assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="{{base_url()}}assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="{{base_url()}}assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="{{base_url()}}assets/vendor/common/common.min.js"></script>
		<script src="{{base_url()}}assets/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="{{base_url()}}assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="{{base_url()}}assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="{{base_url()}}assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="{{base_url()}}assets/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="{{base_url()}}assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="{{base_url()}}assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="{{base_url()}}assets/vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{base_url()}}assets/js/theme.js"></script>


		<script src="{{base_url()}}assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="{{base_url()}}assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{base_url()}}assets/js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="{{base_url()}}assets/js/demos/demo-shop-9.js"></script>

		<!-- Theme Custom -->
		@yield('custom_js')
		<script src="{{base_url()}}assets/js/custom.js"></script>
		<script src="{{base_url()}}assets/js/cart.js"></script>
		<script src="{{base_url()}}assets/js/ajax_view.js"></script>
		<script src="{{base_url()}}assets/js/update.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{base_url()}}assets/js/theme.init.js"></script>
  </body>
</html>
