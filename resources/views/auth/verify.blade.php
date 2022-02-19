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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Footer -->
    <footer class="page-footer font-small blue"><div class="footer-copyright text-center py-3">© 2022 Copyright:<a href="http://my-home-concept.fr/fr/home-fr/" style="color:red;">Home Concept – 129 Avenue de Genève – 74000.</a></div></footer>
    <!-- Footer -->
    <!-- Footer -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
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

