<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    // 管理画面トップ画面表示
    public function showTop()
    {
        return view('admin.top');
    }
}
