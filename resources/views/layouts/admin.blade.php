<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  
  <link
    rel="icon"
    href="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/corporate-company-logo-design-template-2402e0689677112e3b2b6e0f399d7dc3_screen.jpg?ts=1561532453"
    sizes="32x32"
  />

  @stack('prepend-style')

	<!-- Font Awesome -->
	<link rel="stylesheet" href="/admin_gajicovid/docs/assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Bootstrap -->
	<link href="/admin_gajicovid/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="/admin_gajicovid/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="/admin_gajicovid/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="/admin_gajicovid/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="/admin_gajicovid/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="/admin_gajicovid/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="/admin_gajicovid/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="/admin_gajicovid/vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="/admin_gajicovid/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Custom Theme Style -->
  <link href="/admin_gajicovid/build/css/custom.min.css" rel="stylesheet">
  
  @stack('addon-style')
</head>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Hi {{ Auth::user()->name }}!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/admin_gajicovid/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('alternatif.index') }}"><i class="fa fa-file-text"></i> Data Alternatif </a>
                  </li>
                  <li><a href="{{ route('karyawan.index') }}"><i class="fa fa-user"></i> Data Karyawan </a>
                  </li>
                  <li><a href="{{ route('skala.index') }}"><i class="fa fa-tachometer"></i> Skala </a>
                  </li>
                  <li><a href="{{ route('kriteria.index') }}"><i class="fa fa-check-square"></i> Kriteria </a>
                  </li>
                  <li><a href="{{ route('subkriteria.index') }}"><i class="fa fa-check-square-o"></i> Subkriteria </a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a
                href="{{ route('logout') }}"
                data-toggle="tooltip" data-placement="top" title="Logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              >
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="/admin_gajicovid/production/images/img.jpg" alt="">Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a
                      href="{{ route('logout') }}"
                      class="dropdown-item"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                      <i class="fa fa-sign-out pull-right"></i> Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
			<!-- /top navigation -->

			@yield('content')

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
  </div>
  
  @stack('prepend-script')

	<!-- jQuery -->
	<script src="/admin_gajicovid/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="/admin_gajicovid/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="/admin_gajicovid/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="/admin_gajicovid/vendors/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="/admin_gajicovid/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="/admin_gajicovid/vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="/admin_gajicovid/vendors/moment/min/moment.min.js"></script>
	<script src="/admin_gajicovid/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="/admin_gajicovid/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="/admin_gajicovid/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="/admin_gajicovid/vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="/admin_gajicovid/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="/admin_gajicovid/vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="/admin_gajicovid/vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="/admin_gajicovid/vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="/admin_gajicovid/vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="/admin_gajicovid/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="/admin_gajicovid/vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
  <script src="/admin_gajicovid/build/js/custom.min.js"></script>
  
  @stack('addon-script')

</body>
</html>
