<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Auth;
use Cookie;
use EasyWeChat\Factory;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WxLogin extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'code'   => 'required',
            'state'  => 'required',
            'source' => 'required|in:m_login',
        ]);

        // 获取授权用户
        try {
            $openPlatform = Factory::officialAccount(config('wechat.open_platform.website_app'));
            $oauthUser = $openPlatform->oauth->user()->getOriginal();

            // 根据 union id 查找商家或子账号用户
            $user = User::where('wx_union_id', $oauthUser['unionid'])->where(function ($q) {
                $q->where('is_merchant', true)->orWhere('parent_id', '>', 0);
            })->firstOrFail();

            // 设置 session 登录
            Auth::guard('merchant')->login($user);
            Cookie::queue(Cookie::make('mc-logged-in', true, config('session.lifetime'), '/', null, null, false));
            Cookie::queue(Cookie::make('logged-uuid', $user->id, config('session.lifetime'), '/', null, null, false));

            return view('auth.wx_login_source_merchant', [
                'user' => $user,
            ]);
        } catch (ModelNotFoundException $exception) {
            return view('errors.login_error', [
                'msg' => '登录失败, 请确定您是否有后台权限!<br>详请联系客服!',
            ]);
        } catch (Exception $exception) {
            return view('errors.login_error', [
                'msg' => '登录失败, 请刷新后重试!',
            ]);
        }
    }
}
