<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('admin-assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{asset('admin-assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('admin-assets/css/sb-admin.css')}}" rel="stylesheet">
</head>
@yield('navigation')
@yield('content')
@yield('scripts')
@yield('footer')
</html>
