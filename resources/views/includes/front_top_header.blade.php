<header id="header">

    <div class="header flex">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/images/cat1.jpg') }}" alt="ネコの画像" class="header__logo">
        </a>

        <!-- ハンバーガーメニュー -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="header__box flex">
            <li class="g-nav">
                <a href="{{ route('home') }}">道の駅一覧</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('home') }}">地域検索</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('home') }}">詳細検索</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('home') }}">特産品</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('home') }}">体験</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('home') }}">ブログ</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('home') }}">新着ニュース</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('home') }}">お気に入り</a>
            </li>
        </ul>
    </div>
</header>
