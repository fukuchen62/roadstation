<header id="header">
        <!-- g-nav mobile -->
        <nav id="wrapper">
            <h1 class="site-logo mobile-logo"><a href="index.html"><img src="../assets/images/site_logo/logo.png" alt="とくしままるっと道の駅"></a></h1>

            <div class="btn-gnavi">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav id="global-navi">

                <ul class="hamburger-menu">
                    <li>
                        <a href="{{ route('stationlist') }}">

                            <img src="{{ asset('assets/images/menu_icon/station_list_icon.png') }}" alt="" width="30" height="30">

                            道の駅一覧
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('areasearch') }}">

                            <img src="{{ asset('assets/images/menu_icon/station_list_icon.png') }}" alt="" width="30" height="30">

                            エリア検索
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ditailsearch') }}">

                            <img src="{{ asset('assets/images/menu_icon/station_detail_icon.png') }}" alt="" width="30" height="30">

                            詳細検索
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('goods') }}">

                            <img src="{{ asset('assets/images/menu_icon/goods_list_icon.png') }}" alt="" width="30" height="30">

                            特産品
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('activity') }}">

                            <img src="{{ asset('assets/images/menu_icon/activity_list_icon.png') }}" alt="" width="30" height="30">

                            体験
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bloglist') }}">

                            <img src="{{ asset('assets/images/menu_icon/blog_list_icon.png') }}" alt="" width="35" height="35">

                            行ってみたんよ
                        </a>
                    </li>
                    <li>
                        <a href="../html/like.html">

                            <img src=".{{ asset('assets/images/menu_icon/like_icon.png') }}" alt="" width="30" height="30">

                            お気に入り
                        </a>
                    </li>
                </ul>

            </nav>
        </nav>

        <div class="top-kv">

            <!-- <div>道の駅をあそびつくせ！</div> -->
            <video autoplay muted playsinline loop src="{{ asset('assets/images/index/IMG_2833.MOV') }}">

            </video>
        </div>
        <!-- g-nav pc -->
        <nav id="menu" class="nav-pc">
            <h1><a href="index.html"><img src="{{ asset('assets/images/site_logo/logo.png') }}" width="95" height="95" alt="とくしままるっと道の駅"></a></h1>

            <ul>
                <li>
                    <a href="{{ route('stationlist') }}">
                        <div>
                            <img src="{{ asset('assets/images/menu_icon/station_list_icon.png') }}" alt="" width="30" height="30">
                        </div>
                        道の駅一覧
                    </a>
                </li>


                <li>
                    <a href="{{ route('areasearch') }}">
                        <div>
                            <img src="{{ asset('assets/images/menu_icon/station_area_icon.png') }}" alt="" width="30" height="30">
                        </div>
                        エリア検索
                    </a>
                </li>
                <li>
                    <a href="{{ route('ditailsearch') }}">
                        <div>
                            <img src="{{ asset('assets/images/menu_icon/station_detail_icon.png') }}" alt="" width="30" height="30">
                        </div>
                        詳細検索
                    </a>
                </li>
                <li>
                    <a href="{{ route('goods') }}">
                        <div>
                            <img src="{{ asset('assets/images/menu_icon/goods_list_icon.png') }}" alt="" width="30" height="30">
                        </div>
                        特産品
                    </a>
                </li>
                <li>
                    <a href="{{ route('activity') }}">
                        <div>
                            <img src="{{ asset('assets/images/menu_icon/activity_list_icon.png') }}" alt="" width="30" height="30">
                        </div>
                        体験
                    </a>
                </li>
                <li>
                    <a href="{{ route('bloglist') }}">
                        <div>
                            <img src="{{ asset('assets/images/menu_icon/blog_list_icon.png') }}" alt="" width="35" height="35">
                        </div>
                        行ってみたんよ
                    </a>
                </li>
                <li>
                    <a href="../html/like.html">
                        <div>
                            <img src="{{ asset('assets/images/menu_icon/like_icon.png') }}" alt="" width="30" height="30">
                        </div>
                        お気に入り
                    </a>
                </li>
            </ul>
        </nav>

        <div class="header topheader flex">
        <div>仮設置リンク集　　</div>
        <a href="{{ route('top') }}">
            {{-- <img src="{{ asset('assets/images/cat1.jpg') }}" alt="ネコの画像" class="header__logo"> --}}
            <div>TOPに戻る　</div>
        </a>

        <ul class="header__box flex">
            <li class="g-nav">
                <a href="{{ url('station-list') }}">道の駅一覧　</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('area-search') }}">地域検索　</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('detail-search') }}">詳細検索　</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('specialty-goods') }}">特産品　</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('activities') }}">体験　</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('blog') }}">ブログ　</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('news') }}">新着ニュース　</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('top') }}">お気に入り</a>
            </li>
        </ul>
    </div>

</header>
