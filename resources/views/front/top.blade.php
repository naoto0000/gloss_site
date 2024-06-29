<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/be9ef8be23.js" crossorigin="anonymous"></script>
    <title>gloss_site</title>
</head>
@include('front.utilities.header')

<body>
    <main>
        <div class="container">
            <div class="top_main_img">
                <img src="{{ asset('img/B187252288.jpg') }}" alt="メイン画像">
            </div>
            <div class="top_main_contents">
                <div class="top_sidebar">
                    <!-- 営業時間記載 -->
                    <div class="top_business_hours">
                        <h3 class="top_business_hours_title">
                            営業時間
                        </h3>
                        <table>
                            <tr>
                                <td class="business_hours_date">月</td>
                                <!-- 値はDBから取得 -->
                                <td>定休日</td>
                            </tr>
                            <tr>
                                <td class="business_hours_date">火</td>
                                <!-- 値はDBから取得 -->
                                <td>9:00 ~ 17:00</td>
                            </tr>
                            <tr>
                                <td class="business_hours_date">水</td>
                                <!-- 値はDBから取得 -->
                                <td>9:00 ~ 17:00</td>
                            </tr>
                            <tr>
                                <td class="business_hours_date">木</td>
                                <!-- 値はDBから取得 -->
                                <td>9:00 ~ 17:00</td>
                            </tr>
                            <tr>
                                <td class="business_hours_date">金</td>
                                <!-- 値はDBから取得 -->
                                <td>9:00 ~ 17:00</td>
                            </tr>
                            <tr>
                                <td class="business_hours_date">土</td>
                                <!-- 値はDBから取得 -->
                                <td>9:00 ~ 21:00</td>
                            </tr>
                            <tr>
                                <td class="business_hours_date">日</td>
                                <!-- 値はDBから取得 -->
                                <td>9:00 ~ 12:00</td>
                            </tr>
                        </table>
                    </div>
                    <!-- 所在地記載 -->
                    <div class="top_address">
                        <h3 class="top_address_title">所在地</h3>
                        <p class="top_address_contents">
                            〒654-0071</br>
                            兵庫県神戸市須磨区須磨寺町２丁目７−３
                        </p>
                    </div>
                    <!-- お知らせ記載 -->
                    <div class="top_news">
                        <h3 class="top_news_title">お知らせ</h3>
                        <div id="news_display">
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されましたaaaaaaaaaaaaaaaaaaa！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                            <p>2024.2.1 朝日新聞に掲載されました！！</p>
                        </div>
                    </div>
                </div>

                <!-- コース一覧を記載 -->
                <!-- 予約に飛ばせるようにする -->
                <div class="top_couse">
                    <ul>
                        <li class="top_couse_li">
                            <div class="top_couse_text">
                                <h3>カット（シャンプー・ブロー付き）</h3>
                                <p class="top_couse_comment">
                                    あなたに似合う髪型にカットいたします！！
                                </p>
                            </div>
                            <p class="top_couse_price">
                                <!-- 値はDBから取得 -->
                                4,000円（税込）
                            </p>
                            <a href="{{ route('reserve') }}" class="top_couse_reserve_btn">予約はこちら</a>
                        </li>
                        <li class="top_couse_li">
                            <div class="top_couse_text">
                                <h3>パーマ</h3>
                                <p class="top_couse_comment">
                                    最新のパーマ機器が揃っています。
                                </p>
                            </div>
                            <p class="top_couse_price">
                                <!-- 値はDBから取得 -->
                                12,000円（税込）
                            </p>
                            <a href="{{ route('reserve') }}" class="top_couse_reserve_btn">予約はこちら</a>
                        </li>
                        <li class="top_couse_li">
                            <div class="top_couse_text">
                                <h3>カラー</h3>
                                <p class="top_couse_comment">
                                    全50種類のカラーからお選びいただけます！！
                                </p>
                            </div>
                            <p class="top_couse_price">
                                <!-- 値はDBから取得 -->
                                14,000円（税込）
                            </p>
                            <a href="{{ route('reserve') }}" class="top_couse_reserve_btn">予約はこちら</a>
                        </li>
                        <li class="top_couse_li">
                            <div class="top_couse_text">
                                <h3>縮毛矯正</h3>
                                <p class="top_couse_comment">
                                    縮毛矯正グランプリ金賞の美容師が在籍しております！
                                </p>
                            </div>
                            <p class="top_couse_price">
                                <!-- 値はDBから取得 -->
                                14,000円（税込）
                            </p>
                            <a href="{{ route('reserve') }}" class="top_couse_reserve_btn">予約はこちら</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    @include('front.utilities.footer')
</body>
</html>