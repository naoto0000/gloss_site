<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Mail\MemberRegistered;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    /**
     * セッションの定義
     *
     * @return void
     */
    const SESSION_INPUT_DATA = 'input_data';

    /**
     * 会員登録画面表示
     *
     * @return view 会員登録フォーム
     */
    public function showMemberForm()
    {
        return view('front.member.form');
    }

    /**
     * 会員登録確認画面表示
     *
     * @param MemberRequest $request
     * @return view 会員登録確認画面表示
     */
    public function showMemberConfirm(MemberRequest $request)
    {
        // バリデーション
        $input_data = $request->validated();

        // セッションにデータを保存
        Session::put(self::SESSION_INPUT_DATA, $input_data);

        // 性別をconfigから取得
        $gender = config('master.gender.' . $input_data['gender']);

        return view('front.member.confirm', compact('input_data', 'gender'));
    }

    /**
     * 会員登録フォームに戻る
     *
     * @return view 会員登録フォームに戻る
     */
    public function showMemberBack()
    {
        // セッションからデータを取得
        $input_data = Session::get(self::SESSION_INPUT_DATA);

        return view('front.member.form', compact('input_data'));
    }

    /**
     * 会員登録完了処理
     *
     * @return redirect route('member_complete') 完了ページ表示処理へ
     */
    public function storeMemberComplete()
    {
        // セッションからデータを取得
        $input_data = Session::get(self::SESSION_INPUT_DATA);

        $name = $input_data['name_sei'].$input_data['name_mei'];

        // メンバーの登録処理
        $member = new Member();
        $member->name = $name;
        $member->gender = $input_data['gender'];
        $member->birth_date = $input_data['birth_date'];        
        $member->email = $input_data['email'];
        $member->tel = $input_data['tel'];        
        // パスワードをハッシュ化して設定
        $member->password = Hash::make($input_data['password']);        
        $member->save();

        // メール送信処理
        Mail::to($member->email)->send(new MemberRegistered($member));

        return redirect()->route('member_complete');
    }

    /**
     * 会員登録完了画面表示
     *
     * @return view 会員登録完了ページ表示
     */
    public function showMemberComplete()
    {
        return view('front.member.complete');
    }
}
