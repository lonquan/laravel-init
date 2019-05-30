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
    <title>黔西南州第四届全民运动会</title>
    <style>
        body{
            background: #0164c2 url("https://cdn.antapis.com/h5/0601/bg-repeat.png?imageslim") repeat center top;
            background-size: 80%;
        }
    </style>
</head>
<body>
<div id="app">
    <router-view></router-view>
</div>

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
