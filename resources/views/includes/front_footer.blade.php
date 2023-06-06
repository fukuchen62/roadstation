<footer class="footer expand">
    <a class="pagetop" href="#">
        <div class="pagetop__arrow"></div>
    </a>
    <div class="footer__box  flex">
        <ul class="header__box flex">
            <li class="g-nav ">
                <a href="{{ url('station-list') }}"><i class="fa-solid fa-book-bookmark"></i>道の駅一覧</a>
            </li>
            <li class="g-nav ">
                <a href="{{ url('area-search') }}"><i class="fa-solid fa-book-bookmark"></i>エリア検索</a>
            </li>
            <li class="g-nav ">
                <a href="{{ url('detail-search') }}"><i class="fa-solid fa-book-bookmark"></i>詳細検索</a>
            </li>
            <li class="g-nav ">
                <a href="{{ url('specialty-goods') }}"><i class="fa-solid fa-book-bookmark"></i>特産品</a>
            </li>
            <li class="g-nav ">
                <a href="{{ url('activities') }}"><i class="fa-solid fa-book-bookmark"></i>体験</a>
            </li>
            <li class="g-nav ">
                <a href="{{ url('blog') }}"><i class="fa-solid fa-book-bookmark"></i>行ってみたんよ</a>
            </li>
            <li class="g-nav ">
                <a href="{{ url('news') }}"><i class="fa-solid fa-book-bookmark"></i>新着ニュース</a>
            </li>
            <li class="g-nav ">
                <a href="{{ route('top') }}"><i class="fa-solid fa-book-bookmark"></i>お気に入り</a>
            </li>
        </ul>
    </div>
    <p class="copyright">Copyright@roadstation.com</p>
</footer>


{{--  元々のコード  --}}
{{--  <footer class="footer expand">
    <div class="footer__box  flex">
        <ul class="header__box flex">
            <li class="g-nav">
                <a href="{{ url('station-list') }}">道の駅一覧</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('area-search') }}">地域検索</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('detail-search') }}">詳細検索</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('specialty-goods') }}">特産品</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('activities') }}">体験</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('blog') }}">ブログ</a>
            </li>
            <li class="g-nav">
                <a href="{{ url('news') }}">新着ニュース</a>
            </li>
            <li class="g-nav">
                <a href="{{ route('top') }}">お気に入り</a>
            </li>
        </ul>
    </div>
    <p class="copyright">Copyright@roadstation.com</p>
</footer>  --}}
