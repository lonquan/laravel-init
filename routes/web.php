<?php
// 授权登录
use App\Http\Controllers\Auth\WxLogin;

Route::prefix('auth')->group(function () {
    Route::get('open-wechat', WxLogin::class);
});
