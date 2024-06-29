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
            <form action="{{ route('member_store') }}" method="post">
                @csrf
                <h2>会員登録</h2>
                <div class="reserve_confirm_items">
                    <h3>名前</h3>
                    <p class="reserve_confirm_item">{{ $input_data['name_sei'] }}　{{ $input_data['name_mei'] }}</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>性別</h3>
                    <p class="reserve_confirm_item">{{ $gender }}</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>生年月日</h3>
                    <p class="reserve_confirm_item">{{ $input_data['birth_date'] }}</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>メールアドレス</h3>
                    <p class="reserve_confirm_item">{{ $input_data['email'] }}</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>電話番号</h3>
                    <p class="reserve_confirm_item">{{ $input_data['tel'] }}</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>パスワード</h3>
                    <p class="reserve_confirm_item">{{ $input_data['password'] }}</p>
                </div>
                <div class="form_submit">
                    <a href="{{ route('member_back') }}" class="form_back_btn">会員登録画面に戻る</a>
                    <input type="submit" value="登録完了" class="form_submit_btn">
                </div>
            </form>
        </div>
    </main>
</body>
</html>