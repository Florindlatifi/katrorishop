<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
       <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">

<!--
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">
-->

    <!-- Styles -->
    <link href="{{ asset('css/mainStyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css.style.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/selectize.css') }} ">
    <link rel="stylesheet" href=" {{ asset(' css/user.css ')}} ">
    <link rel="stylesheet" href=" {{ asset(' css/css/bootstrap.css') }} ">
    <link rel="stylesheet" href=" {{ asset(' fonts/font-awesome.css ')}} ">




    
</head>
<body>