    <img class="mobile-footer" src="{{ asset('assets/images/footer/footer_small.png') }}" alt="フッター画像">
    <img class="pc-footer" src="{{ asset('assets/images/footer/footer.png') }}" alt="フッター画像">

    <footer class="footer">

        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fffbf1" fill-opacity="1"
                d="M0,96L60,112C120,128,240,160,360,149.3C480,139,600,85,720,80C840,75,960,117,1080,138.7C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg> --}}


        <!-- 走る車 -->
        <div class="demo_stage">
            <div class="demo_wrap" data-order="left">
                <span class="demo_item anime"></span>
            </div>
        </div>

        <!-- topへ戻るボタン -->
        <div class="scroll-top">
            <a href="#"><img src="{{ asset('assets/images/illustrations/Tanuki-top.png') }}" alt="TOP"></a>
        </div>

        <!-- フッターメニュー -->
        <div class="footer-menu">

            <ul class="footer-menu-list">

                <li><a href="{{ route('stationlist') }}">
                        <img src="{{ asset('assets/images/menu_icon/station_list_icon_w.svg') }}" alt="道の駅一覧"
                            width="30" height="20">
                        道の駅一覧</a></li>

                <li><a href="{{ route('areasearch') }}">
                        <img src="{{ asset('assets/images/menu_icon/station_area_icon_w.svg') }}" alt="エリア検索"
                            width="30" height="20">
                        エリア検索</a></li>

                <li><a href="{{ route('ditailsearch') }}">
                        <img src="{{ asset('assets/images/menu_icon/station_detail_icon_w.svg') }}" alt="詳細検索"
                            width="30" height="20">
                        詳細検索</a></li>
                <li><a href="{{ route('news') }}">
                        <img src="{{ asset('assets/images/menu_icon/news_icon_w.svg') }}" alt="ニュース" width="30"
                            height="20">
                        ニュース</a></li>

            </ul>

            <ul class="footer-menu-list">

                <li><a href="{{ route('goods') }}">
                        <img src="{{ asset('assets/images/menu_icon/goods_list_icon_w.svg') }}" alt="特産品"
                            width="30" height="20">
                        特産品</a></li>

                <li><a href="{{ route('activity') }}">
                        <img src="{{ asset('assets/images/menu_icon/activity_list_icon_w.svg') }}" alt="体験"
                            width="30" height="20">
                        体験</a></li>

                <li><a href="{{ route('bloglist') }}">
                        <img src="{{ asset('assets/images/menu_icon/blog_list_icon_w.svg') }}" alt="ブログ"
                            width="30" height="20">
                        ブログ</a></li>

                <li>
                    <a href="{{ route('mypage') }}">
                        <img src="{{ asset('assets/images/menu_icon/like_icon_w.svg') }}" alt="お気に入り" width="30"
                            height="20">
                        お気に入り</a>
                </li>
            </ul>

            <ul>
                <li><a href="{{ route('contact') }}">
                        <img src="{{ asset('assets/images/menu_icon/contact_icon_w.svg') }}" alt="お問い合わせ"
                            width="30" height="20">
                        お問い合わせ</a></li>
                <li><a href="{{ route('about') }}">
                        <img src="{{ asset('assets/images/menu_icon/about-this-website_icon_w.svg') }}" alt="このサイトについて"
                            width="30" height="20">
                        このサイトについて</a></li>
                <li><a href="{{ route('privacy') }}">
                        <img src="{{ asset('assets/images/menu_icon/privacy-policy_icon_w.svg') }}" alt="プライバシーポリシー"
                            width="30" height="20">
                        プライバシーポリシー</a></li>
                <li><a href="{{ route('admintop') }}" target="_blank">
                        <img src="{{ asset('assets/images/menu_icon/login-page_icon_w.svg') }}" alt="ログインページ"
                            width="30" height="20">
                        ログインページ</a></li>
            </ul>

        </div>

        <p class="copyright">&copy;とくしま まるっと！道の駅　制作委員会</p>

    </footer>
