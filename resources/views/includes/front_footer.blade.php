{{-- <div id="page_top" class="flex">
    <!-- 余裕があれば魚が釣られるアニメーションを追加 -->
    <!-- <img src=".//assets/images/fish_yellow.png" alt="黄色魚" class="topbutton__fish"> -->
    <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
</div> --}}

<footer class="footer expand">
    <div class="footer__box  flex">
        <ul>
            <li><a href="{{ route('knowledgelist') }}">入門知識</a></li>
            <li><a href="{{ route('fishlist') }}">徳島の魚</a></li>
            <li><a href="{{ route('planslist') }}">体験プラン</a></li>
            <li><a href="{{ route('shopslist') }}">釣具店</a></li>
            <li><a href="{{ route('escapelist') }}">避難場所</a></li>
        </ul>
        <ul>
            {{-- <li>釣りスポット</li> --}}
            <li><a href="{{ route('spotslist') }}?city_id=1">釣りスポット(東部)</a></li>
            <li><a href="{{ route('spotslist') }}?city_id=2">釣りスポット(南部)</a></li>
            <li><a href="{{ route('news') }}">お知らせ</a></li>
            <li><a href="{{ route('mypage') }}">マイページ</a></li>
        </ul>

        <ul>
            <li><a href="{{ route('uspage') }}">このサイトについて</a></li>
            <li><a href="{{ route('praivacypage') }}">プライバシーポリシー</a></li>
            <li><a href="{{ route('admintop') }}" target="_blank">ログイン</a></li>
        </ul>
    </div>
    <p class="copyright">Copyright@turitoku.com</p>
</footer>
