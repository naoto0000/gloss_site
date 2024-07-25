<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/be9ef8be23.js" crossorigin="anonymous"></script>
    <title>gloss_site</title>
</head>

@include('front.utilities.header')

<body>
    <main>
        <div class="form_cotainer">
            <form action="{{ route('member_confirm') }}" method="post">
                @csrf
                <div class="regist_form_login">
                    <h3>すでに会員登録済みの方は<a href="{{ route('login') }}">こちら</a></h3>
                </div>
                <h2>会員登録</h2>
                <div class="reserve_items">
                    <p class="reserve_items_p">名前</p>
                    <div class="member_name_group">
                        <input type="text" name="name_sei" placeholder="姓" value="{{ old('name_sei') ?? (isset($input_data['name_sei']) ? $input_data['name_sei'] : '') }}">
                        <input type="text" name="name_mei" placeholder="名" value="{{ old('name_mei') ?? (isset($input_data['name_mei']) ? $input_data['name_mei'] : '') }}">
                    @error('name_sei')
                        <p class="error_msg">{{ $message }}</p>
                    @enderror
                    @error('name_mei')
                        <p class="error_msg">{{ $message }}</p>
                    @enderror
                    </div>
                </div>

                <div class="reserve_items">
                    <p class="reserve_items_p">性別</p>
                    <div class="member_gender_group">
                        <label for="male">男</label>
                        <input type="radio" id="male" name="gender" value="1" {{ (old('gender') == '1' || (isset($input_data['gender']) && $input_data['gender'] == '1')) ? 'checked' : '' }}>

                        <label for="female">女</label>
                        <input type="radio" id="female" name="gender" value="2" {{ (old('gender') == '2' || (isset($input_data['gender']) && $input_data['gender'] == '2')) ? 'checked' : '' }}>

                        <label for="unknown">未回答</label>
                        <input type="radio" id="unknown" name="gender" value="3" {{ (old('gender') == '3' || (isset($input_data['gender']) && $input_data['gender'] == '3')) ? 'checked' : '' }}>
                    </div>
                    @error('gender')
                        <p class="error_msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="reserve_items">
                    <p class="reserve_items_p">生年月日</p>
                    <input type="date" name="birth_date" value="{{ old('birth_date') ?? (isset($input_data['birth_date']) ? $input_data['birth_date'] : '') }}">
                    @error('birth_date')
                        <p class="error_msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="reserve_items">
                    <p class="reserve_items_p">メールアドレス</p>
                    <input type="text" name="email" value="{{ old('email') ?? (isset($input_data['email']) ? $input_data['email'] : '') }}">
                    @error('email')
                        <p class="error_msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="reserve_items">
                    <p class="reserve_items_p">電話番号</p>
                    <input type="text" name="tel" value="{{ old('tel') ?? (isset($input_data['tel']) ? $input_data['tel'] : '') }}">
                    @error('tel')
                        <p class="error_msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="reserve_items">
                    <p class="reserve_items_p">パスワード</p>
                    <input type="password" name="password">
                    @error('password')
                        <p class="error_msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="reserve_items">
                    <p class="reserve_items_p">パスワード確認</p>
                    <input type="password" name="password_confirmation">
                </div>
                <div class="form_submit">
                    <a href="{{ route('/') }}" class="form_back_btn">トップ画面に戻る</a>
                    <input type="submit" value="確認画面へ" class="form_submit_btn">
                </div>
            </form>
        </div>
    </main>
</body>
</html>
