<header id="header">

    <div class="header flex">
        <a href="{{ route('top') }}">
            <img src="{{ asset('assets/images/cat1.jpg') }}" alt="ネコの画像" class="header__logo expand">
        </a>
        <!-- ハンバーガーメニュー -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="header__box">
            <li class="g-nav flex">
                <a href="{{ url('station-list') }}">道の駅一覧</a>
            </li>
            <li class="g-nav flex">
                <a href="{{ url('area-search') }}">地域検索</a>
            </li>
            <li class="g-nav flex">
                <a href="{{ url('detail-search') }}">詳細検索</a>
            </li>
            <li class="g-nav flex">
                <a href="{{ url('specialty-goods') }}">特産品</a>
            </li>
            <li class="g-nav flex">
                <a href="{{ url('activities') }}">体験</a>
            </li>
            <li class="g-nav flex">
                <a href="{{ url('blog') }}">ブログ</a>
            </li>
            <li class="g-nav flex">
                <a href="{{ url('news') }}">新着ニュース</a>
            </li>
            <li class="g-nav flex">
                <a href="{{ route('top') }}">お気に入り</a>
            </li>
        </ul>
    </div>
</header>
