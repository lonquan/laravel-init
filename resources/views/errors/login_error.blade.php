<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no,date=no,address=no,email=no,url=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>统一登录中心...</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html, body{
            width: 100%;
            height: 100%;
        }

        .tips {
            display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            color: #F56C6C;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="tips">{!! $msg !!}</div>
</body>
</html>
