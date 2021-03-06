<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no,date=no,address=no,email=no,url=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('app-run/css/ele.css') }}">
    <link rel="stylesheet" href="{{ mix('app-run/css/app.css') }}">
</head>
<body>
<div id="app">
    <router-view></router-view>
</div>

<script src="{{ mix('app-run/js/manifest.js') }}"></script>
<script src="{{ mix('app-run/js/vendor.js') }}"></script>
<script src="{{ mix('app-run/js/app.js') }}"></script>
</body>
</html>
