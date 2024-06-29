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
            <form action="{{ route('reserve_complete') }}" method="post">
                @csrf
                <h2>予約確認画面</h2>
                <div class="reserve_confirm_items">
                    <h3>美容師</h3>
                    <p class="reserve_confirm_item">テストです</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>コース</h3>
                    <p class="reserve_confirm_item">テストです</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>予約日</h3>
                    <p class="reserve_confirm_item">テストです</p>
                </div>
                <div class="reserve_confirm_items">
                    <h3>備考</h3>
                    <p class="reserve_confirm_item">テストです</p>
                </div>
                <div class="reserve_confirm_btn">
                    <a href="{{ route('reserve') }}" class="reserve_confirm_back">予約画面に戻る</a>
                    <input type="submit" value="予約完了" class="reserve_confirm_submit">
                </div>
            </form>
        </div>
    </main>
</body>
</html>