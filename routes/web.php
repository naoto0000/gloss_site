<?php

use App\Http\Controllers\ProfileCntroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.top');
})->name('/');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// ==========
// フロント側
// ==========
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

// ===========
// 管理画面側
// ===========
Route::get('/admin', 'App\Http\Controllers\Admin\TopController@showTop')->name('admin_top');
