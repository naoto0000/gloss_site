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
        <div class="reserve_complete_contents">
            <p>会員登録いただき、ありがとうございます。</p></br>
            <p><a href="">こちら</a>からログインをお願いします。</p>
            <div class="reserve_complete_btn">
                <a href="{{ route('/') }}" class="reserve_complete_top_btn">トップ画面に戻る</a>
            </div>
        </div>
    </main>
</body>
</html>