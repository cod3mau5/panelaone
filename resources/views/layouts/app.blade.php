<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cape Travel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: url('../img/pass.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }
        .panel-default {
            border: 0;
        }
        .panel-heading {
            color: #fff !important;
            background: url('../img/login_bg.png');
            border-radius: 0;
            border: 0;
            letter-spacing: 0.1rem;
        }
        .panel-body {
            background: -moz-linear-gradient(left, rgba(30,87,153,0.3) 0%, rgba(125,185,232,0) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, rgba(30,87,153,0.3) 0%,rgba(125,185,232,0) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, rgba(30,87,153,0.3) 0%,rgba(125,185,232,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#007db9e8',GradientType=1 ); /* IE6-9 */
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
