<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * 予約画面表示
     *
     * @return view 予約画面表示
     */
    public function showReserveForm()
    {
        return view('front.reserve.form');
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
