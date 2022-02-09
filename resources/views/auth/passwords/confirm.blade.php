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
        <style>
                    body {
                      background-image: url("/img/back2.png");
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-position: center;
                      background-size: cover;

                    }
                    </style>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<footer class="page-footer font-small blue"><div class="footer-copyright text-center py-3">© 2022 Copyright:<a href="https://github.com/elmahdiouhssain/" style="color:red;">Elmahdi ouhssain.</a></div></footer>
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

