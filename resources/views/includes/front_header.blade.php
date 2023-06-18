<header id="header">

    <!-- g-nav pc -->
    <nav class="nav-pc">
        <h1><a href="{{ route('top') }}"><img src="{{ asset('assets/images/site_logo/logo.png') }}" width="100" height="100" alt="とくしままるっと道の駅"></a></h1>

        <ul>
            <li>
                <a href="{{ route('stationlist') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/station_list_icon.png') }}" alt="" width="40" height="40">
                    </div>
                    道の駅一覧
                </a>
            </li>


            <li>
                <a href="{{ route('areasearch') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/station_area_icon.png') }}" alt="" width="40" height="40">
                    </div>
                    エリア検索
                </a>
            </li>
            <li>
                <a href="{{ route('ditailsearch') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/station_detail_icon.png') }}" alt="" width="40" height="40">
                    </div>
                    詳細検索
                </a>
            </li>
            <li>
                <a href="{{ route('goods') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/goods_list_icon.png') }}" alt="" width="40" height="40">
                    </div>
                    特産品
                </a>
            </li>
            <li>
                <a href="{{ route('activity') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/activity_list_icon.png') }}" alt="" width="40" height="40">
                    </div>
                    体験
                </a>
            </li>
            <li>
                <a href="{{ route('bloglist') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/blog_list_icon.png') }}" alt="" width="40" height="40">
                    </div>
                    行ってきたんよ
                </a>
            </li>
            <li>
                <a href="{{ route('mypage') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/like_icon.png') }}" alt="" width="40" height="40">
                    </div>
                    お気に入り
                </a>
            </li>
        </ul>
    </nav>

    <!-- g-nav mobile -->
    <nav id="wrapper">
        <h1 class="site-logo mobile-logo"><a href="{{ route('top') }}"><img src="{{ asset('assets/images/site_logo/logo.png') }}" alt="とくしままるっと道の駅"></a></h1>

        <div class="btn-gnavi">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav id="global-navi">

            <ul class="hamburger-menu">
                <li>
                    <a href="{{ route('stationlist') }}">

                        <img src="{{ asset('assets/images/menu_icon/station_list_icon.png') }}" alt="" width="40" height="40">

                        道の駅一覧
                    </a>
                </li>


                <li>
                    <a href="{{ route('areasearch') }}">

                        <img src="{{ asset('assets/images/menu_icon/station_area_icon.png') }}" alt="" width="40" height="40">

                        エリア検索
                    </a>
                </li>
                <li>
                    <a href="{{ route('ditailsearch') }}">

                        <img src="{{ asset('assets/images/menu_icon/station_detail_icon.png') }}" alt="" width="40" height="40">

                        詳細検索
                    </a>
                </li>
                <li>
                    <a href="{{ route('goods') }}">

                        <img src="{{ asset('assets/images/menu_icon/goods_list_icon.png') }}" alt="" width="40" height="40">

                        特産品
                    </a>
                </li>
                <li>
                    <a href="{{ route('activity') }}">

                        <img src="{{ asset('assets/images/menu_icon/activity_list_icon.png') }}" alt="" width="40" height="40">

                        体験
                    </a>
                </li>
                <li>
                    <a href="{{ route('bloglist') }}">

                        <img src="{{ asset('assets/images/menu_icon/blog_list_icon.png') }}" alt="" width="40" height="40">

                        行ってきたんよ
                    </a>
                </li>
                <li>
                    <a href="{{ route('mypage') }}">

                        <img src="{{ asset('assets/images/menu_icon/like_icon.png') }}" alt="" width="40" height="40">

                        お気に入り
                    </a>
                </li>
            </ul>

        </nav>
    </nav>

</header>
