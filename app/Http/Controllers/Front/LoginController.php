<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * トップ画面の表示
     *
     * @return view トップ画面
     */
    public function showTop()
    {
        return view('front.top'); 
    }

    /**
     * ログインフォーム表示
     *
     * @return view ログインフォーム
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * ログイン処理
     * 
     * @return route トップ画面
     */
    public function storeLogin(LoginRequest $request)
    {
        // 認証を試みる
        $credentials = $request->only('email', 'password');

        if (Auth::guard('members')->attempt($credentials)) {
            // 認証に成功した場合、セッションを再生成してからリダイレクトする
            $request->session()->regenerate();

            // ログイン後に予約画面に遷移する必要があるかどうかをチェック
            if ($request->session()->has('redirect_to_reserve')) {
                // セッションから削除しておく
                $request->session()->forget('redirect_to_reserve');
                // 予約画面にリダイレクト
                return redirect()->route('reserve');
            }

            // ログイン後の通常のリダイレクト先
            return redirect()->intended('/');
        }

        // 認証に失敗した場合、再度ログインページにリダイレクトし、エラーメッセージを表示
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが間違っています。',
        ])->withInput($request->only('email'));
    }

    /**
     * ログアウト処理
     *
     * @param Request $request
     * @return Redirect トップ画面に遷移
     */
    public function storeLogout(Request $request)
    {
        // ログアウト処理
        Auth::guard('members')->logout();

        // セッションの無効化(セキュリティ管理のため、旧セッションを無効化する)
        $request->session()->invalidate();
        // トークンの再生成（旧トークンが再利用されることによるセキュリティリスクを防ぐ）
        $request->session()->regenerateToken();

        // トップ画面に遷移
        return redirect('/');
    }
}
