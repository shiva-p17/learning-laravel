<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Q</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower/bootstrap/dist/css/bootstrap.css') }}">
    


    
    

    <!-- Custom Fonts
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
-->
    
</head>

<body >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<!-- Navigation -->
<h4> welcome</h4>

</body>

<!-- All required libraries -->
<script type="text/javascript" src="{{ asset('bower/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src={{asset('bower/underscore/underscore-min.js')}}></script>
<!-- All required Directives -->

</html>

