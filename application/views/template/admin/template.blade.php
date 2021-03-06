<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>@yield('title') | Admin</title>

  	<!-- Global stylesheets -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  	<link href="{{base_url()}}assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  	<link href="{{base_url()}}assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  	<link href="{{base_url()}}assets/css/core.css" rel="stylesheet" type="text/css">
  	<link href="{{base_url()}}assets/css/components.css" rel="stylesheet" type="text/css">
  	<link href="{{base_url()}}assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="{{base_url()}}assets/css/custom.css" rel="stylesheet" type="text/css">
  	<!-- /global stylesheets -->

  	<!-- Core JS files -->
  	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/loaders/pace.min.js"></script>
  	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery.min.js"></script>
  	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/bootstrap.min.js"></script>
  	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/loaders/blockui.min.js"></script>
  	<!-- /core JS files -->

  </head>
  <body>

    @include('template.admin.navbar')

    <!-- Page container -->
    <div class="page-container">

      <!-- Page content -->
      <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
          <div class="sidebar-content">

            <!-- User menu -->
  					<div class="sidebar-user">
  						<div class="category-content">
  							<div class="media">
  								<a href="#" class="media-left"><img src="{{base_url()}}assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
  								<div class="media-body">
  									<span class="media-heading text-semibold">Administrator</span>
  									<div class="text-size-mini text-muted">
  										<i class="icon-pin text-size-small"></i> &nbsp;Administrator
  									</div>
  								</div>

  								<div class="media-right media-middle">
  									<ul class="icons-list">
  										<li>
  											<a href="{{base_url('admin/setting')}}"><i class="icon-cog3"></i></a>
  										</li>
  									</ul>
  								</div>
  							</div>
  						</div>
  					</div>
					  <!-- /user menu -->

            <!-- Main navigation -->
            <div class="sidebar-category sidebar-category-visible">
              <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                  <!-- Main -->
  								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
  								{{-- <li class=""><a href="{{base_url('admin')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li> --}}
                  <li class=""><a href="{{base_url('admin/item')}}"><i class="icon-cube3"></i> <span>Item</span></a></li>
  								<!-- /main -->

                </ul>
              </div>
            </div>
            <!-- /Main navigation -->

          </div>
        </div>
        <!-- /Main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

          <!-- Page header -->
          <div class="page-header page-header-default">

  					<div class="breadcrumb-line">
  						<ul class="breadcrumb">
  							<li><a href="{{ base_url('admin') }}"><i class="icon-home2 position-left"></i> Home</a></li>
  							<li class="active">@yield('page-title')</li>
  						</ul>

  						<ul class="breadcrumb-elements">
  							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
  							<li class="dropdown">
  								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  									<i class="icon-gear position-left"></i>
  									Settings
  									<span class="caret"></span>
  								</a>

  								<ul class="dropdown-menu dropdown-menu-right">
  									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
  									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
  									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
  									<li class="divider"></li>
  									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
  								</ul>
  							</li>
  						</ul>
  					</div>
  				</div>
          <!-- Page header -->

          <!-- Content area -->
          <div class="content">

            @yield('content')

            <div class="footer text-muted">
              &copy; 2018. All Rights Reserved by Seduluran.com
				    </div>

          </div>
          <!-- /Content area -->

        </div>
        <!-- /Main content -->

      </div>
		  <!-- /Page content -->

    </div>
    <!-- /Page container -->
  </body>
  <!-- Theme JS files -->
  @yield('theme_js')
  <!-- /theme JS files -->
  @yield('custom_js')

</html>
