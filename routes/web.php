<?php

use App\Http\Controllers\ProfileCntroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

// ==========
// フロント側
// ==========
// トップ画面表示
Route::get('/', 'App\Http\Controllers\Front\LoginController@showTop')->name('/');

// 予約システム（フロント）
Route::get('/reserve', 'App\Http\Controllers\Front\ReserveController@showReserveForm')->name('reserve');
Route::post('/reserve/confirm', 'App\Http\Controllers\Front\ReserveController@showReserveConfirm')->name('reserve_confirm');
Route::post('/reserve/complete', 'App\Http\Controllers\Front\ReserveController@showReserveComplete')->name('reserve_complete');

// 会員登録(フロント)
Route::get('/member/regist', 'App\Http\Controllers\Front\MemberController@showMemberForm')->name('member_regist');
Route::post('/member/confirm', 'App\Http\Controllers\Front\MemberController@showMemberConfirm')->name('member_confirm');
Route::get('/member/back', 'App\Http\Controllers\Front\MemberController@showMemberBack')->name('member_back');
Route::post('/member/store', 'App\Http\Controllers\Front\MemberController@storeMemberComplete')->name('member_store');
Route::get('/member/complete', 'App\Http\Controllers\Front\MemberController@showMemberComplete')->name('member_complete');

// 会員ログイン
Route::get('/login', 'App\Http\Controllers\Front\LoginController@showLoginForm')->name('login');
Route::post('/login_done', 'App\Http\Controllers\Front\LoginController@storeLogin')->name('login_done');
Route::post('/logout', 'App\Http\Controllers\Front\LoginController@storeLogout')->name('logout');

// ===========
// 管理画面側
// ===========
Route::get('/admin', 'App\Http\Controllers\Admin\TopController@showTop')->name('admin_top');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
