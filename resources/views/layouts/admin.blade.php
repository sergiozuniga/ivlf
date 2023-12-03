<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ config('app.name', 'IVLF') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendor/icheck-bootstrap/css/icheck-bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/adminltev3.css') }}" rel="stylesheet" />
  @yield('styles')
</head>
<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
  @include('layouts.header')
  @yield('content')
  @yield('scripts')
</body>
</html>
