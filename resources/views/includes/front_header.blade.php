<header id="header">

    <div class="header flex">
        <a href="{{ route('top') }}">
            {{-- <img src="{{ asset('assets/images/cat1.jpg') }}" alt="ネコの画像" class="header__logo expand"> --}}
        </a>
        <!-- g-nav mobile -->
        <div id="wrapper">
            <div class="btn-gnavi">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav id="global-navi">
                <div class="hamburger-menu-list">
                    <ul class="menu">
                        <li><a href="{{route('stationlist')}}">道の駅一覧
                            </a></li>
                        <li><a href="{{route('areasearch')}}">エリア検索</a></li>
                        <li><a href="{{route('ditailsearch')}}">詳細検索</a></li>
                        <li><a href="{{route('goods')}}">特産品</a></li>
                        <li><a href="{{route('activity')}}">体験</a></li>
                        <li><a href="{{route('bloglist')}}">行ってみたんよ</a></li>
                        <li><a href="">お気に入り</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- g-nav pc -->
        <div class="nav-pc">
            <h1><img src="https://placehold.jp/80x80.png" alt="とくしままるっと道の駅"></h1>

            <ul>
                <li><a href="{{route('stationlist')}}">道の駅一覧
                    </a></li>
                <li><a href="{{route('areasearch')}}">エリア検索</a></li>
                <li><a href="{{route('ditailsearch')}}">詳細検索</a></li>
                <li><a href="{{route('goods')}}">特産品</a></li>
                <li><a href="{{route('activity')}}">体験</a></li>
                <li><a href="{{route('bloglist')}}">行ってみたんよ</a></li>
                <li><a href="">お気に入り</a></li>
            </ul>
        </div>
</header>
