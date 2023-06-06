<footer>
    <a class="pagetop" href="#">
        <div class="pagetop__arrow"></div>
    </a>
    <ul>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ url('station-list') }}">道の駅一覧</a>
        </li>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ url('area-search') }}">地域検索</a>
        </li>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ url('detail-search') }}">詳細検索</a>
        </li>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ url('specialty-goods') }}">特産品</a>
        </li>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ url('activities') }}">体験</a>
        </li>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ url('blog') }}">ブログ</a>
        </li>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ url('news') }}">新着ニュース</a>
        </li>
        <li class="fa-solid fa-book-bookmark">
            <a href="{{ route('top') }}">お気に入り</a>
        </li>
    </ul>
    <p class="copyright">Copyright@roadstation.com</p>
</footer>

//元々のコード
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
