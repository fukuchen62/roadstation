<footer class="footer">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fffbf1" fill-opacity="1"
            d="M0,96L60,112C120,128,240,160,360,149.3C480,139,600,85,720,80C840,75,960,117,1080,138.7C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>

    <!-- topへ戻るボタン -->
    <div class="scroll-top">
        <a href="#"><img src="{{ asset('assets/images/illustrations/Tanuki-top.png') }}" alt="TOP"></a>
    </div>

    <!-- フッターメニュー -->
    <div class="footer-menu">

        <ul class="footer-menu-list">

            <li><a href="{{ route('stationlist') }}">
                    <img src="{{ asset('assets/images/menu_icon/station_list_icon_w.png') }}" alt=""
                        width="20" height="20">
                    道の駅一覧</a></li>

            <li><a href="{{ route('areasearch') }}">
                    <img src="{{ asset('assets/images/menu_icon/station_area_icon_w.png') }}" alt=""
                        width="20" height="20">
                    エリア検索</a></li>

            <li><a href="{{ route('ditailsearch') }}">
                    <img src="{{ asset('assets/images/menu_icon/station_detail_icon_w.png') }}" alt=""
                        width="20" height="20">
                    詳細検索</a></li>
            <li><a href="{{ route('news') }}">
                    新着ニュース</a></li>

        </ul>

        <ul class="footer-menu-list">

            <li><a href="{{ route('goods') }}">
                    <img src="{{ asset('assets/images/menu_icon/goods_list_icon_w.png') }}" alt=""
                        width="20" height="20">
                    特産品</a></li>

            <li><a href="{{ route('activity') }}">
                    <img src="{{ asset('assets/images/menu_icon/activity_list_icon_w.png') }}" alt=""
                        width="20" height="20">
                    体験</a></li>

            <li><a href="{{ route('bloglist') }}">
                    <img src="{{ asset('assets/images/menu_icon/blog_list_icon_w.png') }}" alt=""
                        width="20" height="20">
                    行ってみたんよ</a></li>

            <li>
                <a href="../html/like.html">
                    <img src="{{ asset('assets/images/menu_icon/like_icon_w.png') }}" alt="" width="20"
                        height="20">
                    お気に入り</a>
            </li>
        </ul>

        <ul>
            <li><a href="">
                    このサイトについて</a></li>
            <li><a href="">
                    お問い合わせ</a></li>
            <li><a href="">
                    プライバシーポリシー</a></li>
            <li><a href="{{ route('admintop') }}" target="_blank">
                    ログインページ</a></li>
        </ul>

    </div>

    <p class="copyright">Copyright@roadstation.com</p>

</footer>
