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
            <form action="{{ route('reserve_confirm') }}" method="post">
            @csrf
                <h2>予約画面</h2>
                <div class="reserve_items">
                    <p class="reserve_items_p">美容師選択</p>
                    <select name="reserve_beautician" id="" class="form_select">
                        <option value="0">選択してください</option>
                        <option value="1">新平</option>
                    </select>
                </div>
                <div class="reserve_items">
                    <p class="reserve_items_p">コース選択</p>
                    <select name="reserve_course" id="" class="form_select">
                        <option value="0">選択してください</option>
                        <option value="1">カット（シャンプー・ブロー付き）</option>
                        <option value="2">パーマ</option>
                        <option value="3">カラー</option>
                        <option value="4">縮毛矯正</option>
                    </select>
                </div>
                <div class="reserve_items">
                    <p class="reserve_items_p">日程選択</p>
                    <input type="date">
                </div>
                <div class="reserve_items">
                    <p class="reserve_items_p">備考</p>
                    <textarea name="reserve_comment" id="" cols="30" rows="10"></textarea>
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