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
        <div class="login_container">
            <h2 class="login_title">ログイン</h2>

            <div class="login_items">
                <form method="POST" action="{{ route('login_done') }}">
                    @csrf

                    <div class="login_item">
                        <label for="email" class="login_label">メールアドレス</label>

                        <div class="login_contents">
                            <input id="email" type="email" class="login_input" name="email" value="{{ old('email') }}">

                            @error('email')
                                <span class="login_error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="login_item">
                        <label for="password" class="login_label">パスワード</label>

                        <div class="login_contents">
                            <input id="password" type="password" class="login_input" name="password">

                            @error('password')
                                <span class="login_error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="login_submit_group">
                        @if (Route::has('password.request'))
                            <div class="login_password_reset_link">
                                <a href="{{ route('password.request') }}">
                                    パスワードを忘れた方はこちら
                                </a>
                            </div>
                        @endif
                        <button type="submit" class="login_submit_btn">
                            ログイン
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
