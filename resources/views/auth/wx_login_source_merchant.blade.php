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
</head>
<body>
<script type="text/javascript">
  window.top.location.href = '{{ config('app.merchant_url')  }}';
</script>
</body>
</html>
