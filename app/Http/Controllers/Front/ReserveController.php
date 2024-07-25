<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    /**
     * 予約画面表示
     *
     * @return view 予約画面表示
     */
    public function showReserveForm(Request $request)
    {
        // 予約画面を表示する前に、セッションに遷移先の情報を保存
        $request->session()->put('redirect_to_reserve', true);
        if (Auth::guard('members')->check()) {
            return view('front.reserve.form');
        } else {
            return view('auth.login');
        }    
    }

    /**
     * 予約確認画面表示
     *
     * @return view 予約確認画面表示
     */ 
    public function showReserveConfirm()
    {
        return view('front.reserve.confirm');
    }

    /**
     * 予約完了画面表示
     *
     * @return view 予約完了画面表示
     */ 
    public function showReserveComplete()
    {
        return view('front.reserve.complete');
    }
}
