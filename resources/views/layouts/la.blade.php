<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
	<html prefix="og: http://ogp.me/ns#">
	<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if(isset($title))<title>Commercial managment | {{ $title }}</title> @else <title>Commercial managment | 2022</title> @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('/css/all.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
	<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('static/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/buttons.dataTables.min.css') }}">

    <link href="{{ asset('/calendar/fullcalendar.css') }}" rel="stylesheet" media="screen">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="apple-touch-icon" href="{{ asset('static/favicon.ico') }}"/>
	<meta name="theme-color" content="#dc3545">
	<meta name="msapplication-navbutton-color" content="#dc3545">
	</head>

	<body>

		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{ route('dashboard') }}">COMMERCIAL MANAGMENT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav  mr-auto">

          <li class="nav-item active ">
            <a class="nav-link" href="{{ route('customerslist') }}"><i class="fas fa-users"></i> CUSTOMERS</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="{{ route('supplierslist') }}"><i class="fas fa-shipping-fast"></i> SUPPLIERS</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="{{ route('invoiceslist') }}"><i class="fas fa-file-invoice"></i> INVOICES</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="{{ route('productslist') }}"><i class="fas fa-box"></i> PRODUCTS</a>
          </li>
          </div>
          
        </ul>
          <a href="{{ route('log.out') }}" class="btn btn-outline-danger my-2 my-sm-0" onclick="return confirm('Vous etez sur déconnecter la session ?')"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
      </div>
                   <style>
                    body {
                      background-image: url("/img/back2.png");
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-position: center;
                      background-size: cover;

                    }
                    </style>

    </nav>

	@yield('content')

	</body>

    <!-- Footer -->
	<footer class="page-footer font-small blue"><div class="footer-copyright text-center py-3">© 2022 Copyright:<a href="https://github.com/elmahdiouhssain/" style="color:red;">Elmahdi ouhssain.</a></div></footer>
	<!-- Footer -->

	<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('/js/modernizr.min.js') }}"></script>

    <script src="{{ asset('/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('/calendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('/calendar/fr.js') }}"></script>
    <script src="{{ asset('/calendar/gcal.min.js') }}"></script>

	<script src="{{ asset('/js/popper.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.js') }}"></script>

    </body>
    </html>