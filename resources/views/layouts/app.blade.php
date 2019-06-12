<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
    <!-- /global stylesheets -->

</head>
<body>

@auth
<!-- Barra de navegacion -->
@include('parciales.barra_navegacion')
<!-- /Barra de navegacion -->
@endauth

<!-- Contenedor de pagina -->
<div class="page-container">

    <!-- Contenido de pagina-->
    <div class="page-content">

        @auth
        <!-- Barra lateral principal -->
        @include('parciales.barra_lateral_principal')
        <!-- /Barra lateral principal -->
        @endauth

        <!-- Contenido principal -->
        <div class="content-wrapper">

            <!-- Area de contenido -->
            <div class="content">

                <!-- Form horizontal -->
                @yield('content')
                <!-- /form horizontal -->

                <!-- Pie de pagina -->
                @include('parciales.pie_pagina')
                <!-- /Pie de pagina -->

            </div>
            <!-- /Area de contenido -->

        </div>
        <!-- /Contenido principal -->

    </div>
    <!-- /Contenido de pagina -->

</div>
<!-- /Contenedor de pagina-->


    <!-- Core JS files -->
    <script src="{{ asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/libraries/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->


    @yield('theme_js_files')
</body>
</html>
