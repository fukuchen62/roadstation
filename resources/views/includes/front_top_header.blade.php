<header>
    <!-- g-nav mobile -->
    <nav id="wrapper">
        <h1 class="site-logo mobile-logo">
            <a href="{{ route('top') }}">
                <img src="{{ asset('assets/images/site_logo/logo.png') }}" alt="とくしままるっと道の駅">
            </a>
        </h1>

        <div class="btn-gnavi">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav id="global-navi">

            <ul class="hamburger-menu">
                <li>
                    <a href="{{ route('stationlist') }}">
                        <img src="{{ asset('assets/images/menu_icon/station_list_icon_ws.svg') }}" alt="道の駅一覧" width="30" height="30">道の駅一覧</a>
                </li>

                <li>
                    <a href="{{ route('areasearch') }}">
                        <img src="{{ asset('assets/images/menu_icon/station_area_icon_ws.svg') }}" alt="エリア検索" width="30" height="30">エリア検索</a>
                </li>
                <li>
                    <a href="{{ route('ditailsearch') }}">
                        <img src="{{ asset('assets/images/menu_icon/station_detail_icon_ws.svg') }}" alt="詳細検索" width="30" height="30">詳細検索</a>
                </li>
                <li>
                    <a href="{{ route('goods') }}">
                        <img src="{{ asset('assets/images/menu_icon/goods_list_icon_ws.svg') }}" alt="特産品" width="30" height="30">特産品</a>
                </li>
                <li>
                    <a href="{{ route('activity') }}">
                        <img src="{{ asset('assets/images/menu_icon/activity_list_icon_ws.svg') }}" alt="体験" width="30" height="30">体験</a>
                </li>
                <li>
                    <a href="{{ route('bloglist') }}">
                        <img src="{{ asset('assets/images/menu_icon/blog_list_icon_ws.svg') }}" alt="ブログ" width="30" height="30">ブログ</a>
                </li>
                <li>
                    <a href="{{ route('mypage') }}">
                        <img src="{{ asset('assets/images/menu_icon/like_icon_ws.svg') }}" alt="お気に入り" width="30" height="30">お気に入り</a>
                </li>
            </ul>

        </nav>
    </nav>

    <div class="top-kv">

        <!-- kvロゴ -->
        <svg id="kv" data-name="kv" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1034.6 580.24" class="zoomIn">
            <defs>
                <style>
                    .cls-1 {
                        fill: #fff;
                    }

                    .cls-2 {
                        fill: none;
                        stroke: #fff;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 14px;
                    }
                </style>
            </defs>
            <path class="cls-2" d="m774.25,484.05c-50.21,28.74-147.37,61.8-271.67,72.38-226.06,19.24-373.26-86.22-396.12-215.68C73.2,152.4,306.7,30.64,514.14,10.73c275.11-26.4,446.06,90.38,460.7,250.76,4.94,54.17-8.84,89.6-31.29,129.44-60.74,107.78-204.88,160.39-303.18,175.22" />
            <path class="cls-1" d="m4.36,165.77c19.27,10.67,38.31,21.76,57.29,32.94,5.38,3.17,10.76,6.35,16.14,9.53,4.06,2.4,10.05,1.05,12.31-3.23s1.1-9.75-3.23-12.31c-18.96-11.21-37.93-22.41-57.08-33.29-5.43-3.09-10.88-6.14-16.34-9.17-4.12-2.28-10.01-1.14-12.31,3.23s-1.17,9.88,3.23,12.31h0Z" />
            <path class="cls-1" d="m45.6,75.08c13.66,21.54,28.77,42.17,45.12,61.76,4.46,5.34,9.02,10.6,13.67,15.78,3.16,3.51,9.56,3.45,12.73,0,3.44-3.75,3.37-8.98,0-12.73-9.41-10.47-18.42-21.28-27.03-32.42l1.41,1.82c-10.78-13.96-20.9-28.41-30.35-43.3-1.24-1.96-3.12-3.51-5.38-4.14s-5.02-.33-6.94.91c-3.98,2.56-5.93,8.06-3.23,12.31h0Z" />
            <path class="cls-1" d="m157.03,20.82c-4.12,3.54-5.6,9.25-5.65,14.48-.05,4.37.66,8.79,1.08,13.13.92,9.68,1.84,19.36,2.76,29.04.52,5.46,1.04,10.92,1.56,16.38.23,2.44.85,4.58,2.64,6.36,1.56,1.56,4.12,2.74,6.36,2.64s4.74-.87,6.36-2.64c1.53-1.66,2.86-4.02,2.64-6.36-1.01-10.59-2.01-21.18-3.02-31.77-.5-5.29-1.01-10.59-1.51-15.88-.42-4.39-1.27-8.99-.68-13.39l-.32,2.39c.14-.91.36-1.79.69-2.65l-.91,2.15c.27-.62.58-1.19.97-1.74l-1.41,1.82c.35-.45.74-.85,1.17-1.23,1.67-1.44,2.64-4.23,2.64-6.36s-.98-4.84-2.64-6.36-3.97-2.74-6.36-2.64-4.47,1.01-6.36,2.64h0Z" />
            <path class="cls-1" d="m956.55,435.63c7.96-.3,15.93.09,23.82,1.14l-2.39-.32c12.22,1.67,24.17,4.92,35.54,9.7l-2.15-.91c3.32,1.41,6.58,2.94,9.79,4.59,2.14,1.11,4.56,1.56,6.94.91,2.09-.57,4.35-2.19,5.38-4.14,2.18-4.13,1.24-10.01-3.23-12.31-17.98-9.28-37.55-14.79-57.72-16.35-5.32-.41-10.65-.51-15.98-.31-2.36.09-4.67.94-6.36,2.64-1.56,1.56-2.74,4.12-2.64,6.36.21,4.72,3.96,9.19,9,9h0Z" />
            <path class="cls-1" d="m982.06,509.43c-7.75-13.04-17.56-25.02-28.95-35.06-3.59-3.16-7.35-6.13-11.2-8.97-1.76-1.3-4.92-1.46-6.94-.91s-4.35,2.19-5.38,4.14c-1.1,2.09-1.66,4.62-.91,6.94s2.15,3.91,4.14,5.38c.91.67,1.81,1.35,2.7,2.04l-1.82-1.41c9.25,7.19,17.55,15.52,24.73,24.77l-1.41-1.82c3.44,4.47,6.61,9.13,9.5,13.98,2.41,4.05,8.21,5.88,12.31,3.23s5.8-7.98,3.23-12.31h0Z" />
            <path class="cls-1" d="m892.98,506.59c4.38,17.63,7.78,35.5,10.2,53.51l-.32-2.39c.6,4.5,1.14,9.01,1.62,13.53.26,2.45.83,4.56,2.64,6.36,1.56,1.56,4.12,2.74,6.36,2.64s4.74-.87,6.36-2.64c1.52-1.65,2.88-4.03,2.64-6.36-1.95-18.38-4.82-36.67-8.73-54.74-1.06-4.91-2.2-9.81-3.42-14.69-1.13-4.57-6.53-7.76-11.07-6.29s-7.5,6.17-6.29,11.07h0Z" />
            <g>
                <path class="cls-1" d="m234.32,199.91c4.7,5.88,12.13,6.16,22.84,5.38,2.3-.14,6.51-.39,10.84-.79,4.33-.39,8.96-1.09,10.6-1.24,1.97-.18,3.1.6,3.26,2.42.21,2.29-1.1,3.15-3.72,3.39-4.12.44-8.84.94-13.5,1.37-19.87,1.81-26.39.58-32.44-4.84-1.28,1.88-3.67,4.75-5.83,7.12-1.39,1.42-2.03,1.61-2.82,1.68-1.38.13-3-.95-3.14-2.56-.09-1.01.18-1.64,1.52-2.92,2.61-2.55,5.11-5.56,6.99-8.17l-1.47-16.09c-.07-.81-.5-1.18-1.29-1.1l-4.72.43c-1.9.17-2.86-.89-3.01-2.58-.15-1.62.6-2.84,2.5-3.01l6.49-.59c3.41-.31,4.99,1.04,5.31,4.54l1.6,17.57Zm-3.85-38.54c1.03,1.13,1.84,2.07,1.93,3.08.14,1.48-1.28,3.31-2.73,3.44-1.12.1-1.81-.31-2.79-1.58-1.11-1.26-3.09-3.38-5.68-5.73-1.08-.92-1.46-1.5-1.54-2.37-.14-1.55,1.19-2.89,2.83-3.04,2.1-.19,5.84,3.88,7.97,6.2Zm27.76-2.94c.75-1.9,1.64-4.49,2.37-6.66.36-1.12,1.01-1.99,2.25-2.11,1.64-.15,3.18.8,3.31,2.21.09.94-.31,2.4-2.03,6.02l9.9-.9c1.71-.16,2.52.79,2.65,2.27.14,1.48-.49,2.56-2.2,2.71l-16.72,1.53c-.3,1.05-1.25,3.71-1.69,4.7l10.95-1c3.54-.32,5.26,1.15,5.59,4.72l2.02,22.15c.33,3.63-1.09,5.39-4.63,5.72l-22.95,2.09c-3.54.32-5.26-1.15-5.59-4.78l-2.02-22.15c-.33-3.57,1.1-5.33,4.64-5.65l6.1-.56c.66-1.42,1.41-3.39,1.82-4.71l-15.21,1.39c-1.71.16-2.58-.78-2.72-2.26-.14-1.48.56-2.56,2.26-2.72l10.03-.92c-.87-.12-4.15-4.17-4.27-5.45-.14-1.55,1.2-2.82,2.44-2.94.72-.07,1.77-.16,4.65,3.85.53.7.78,1.29.83,1.82.09.94-.48,1.94-1.49,2.51l9.7-.89Zm-13.25,19.94l22.75-2.08-.27-2.96c-.08-.88-.44-1.18-1.29-1.1l-20.39,1.86c-.85.08-1.15.44-1.07,1.32l.27,2.96Zm.44,4.78l.4,4.38,22.75-2.08-.4-4.38-22.75,2.08Zm.84,9.22l.3,3.3c.08.87.44,1.18,1.29,1.1l20.39-1.86c.85-.08,1.15-.44,1.07-1.32l-.3-3.3-22.75,2.08Z" />
                <path class="cls-1" d="m307.23,192.57c-1.51,2.99-3.62,6.71-8.08,7.12-5.18.47-11.83-5.03-12.81-15.8-1.13-12.39,5.87-30.54,27.84-32.54,15.8-1.44,26.26,7.38,27.69,22.99,1.88,20.6-15.91,28.53-18.86,28.8-1.57.14-3.08-1.14-3.23-2.83-.21-2.29.94-2.73,3.1-3.75,9.08-4.09,13.81-11.71,12.9-21.61-.43-4.71-2.74-19.16-20.42-18.02-1.34,17.23-5.72,30.8-8.12,35.63Zm-15.29-8.92c.61,6.67,4.09,10.01,6.38,9.8,2.23-.2,3.54-3.17,4.65-5.58,3.26-7.7,6.15-21.74,6.45-29.98-11.18,2.79-18.58,13.71-17.48,25.76Z" />
                <path class="cls-1" d="m366.56,152.27l6.03-.55c1.57-.14,2.32.74,2.44,2.08.12,1.35-.45,2.35-2.02,2.49l-6.03.55.47,5.18,5.84-.53c1.57-.14,2.32.74,2.44,2.08.12,1.35-.45,2.35-2.02,2.49l-5.84.53.49,5.32,4-.37c3.41-.31,4.77.85,5.09,4.35.61,6.66.4,15.91-.44,19.79-.79,3.67-2.64,5.13-6.9,5.52-3.54.32-5-.43-5.19-2.51-.15-1.62.74-2.71,2.25-2.85.92-.08,1.79.04,3.04-.07,1.64-.15,2.01-.46,2.32-2.79.86-6.53.18-14.68.17-14.81-.14-1.48-.43-1.79-1.87-1.66l-13.9,1.27c-3.08.28-4.59-1.01-4.88-4.17l-2.33-25.58c-.28-3.1.97-4.64,4.05-4.92l19.54-1.78c1.7-.16,2.52.79,2.66,2.34.14,1.48-.49,2.56-2.2,2.71l-7.67.7.47,5.18Zm-10.33,31.01c.15,1.68.1,8.34-.59,11.59-.35,1.93-.94,2.73-2.51,2.88-1.31.12-2.3-.61-2.41-1.75-.04-.4-.05-1.28.07-2.11.59-2.9.91-6.73.84-10.33-.03-1.76.64-2.43,2.21-2.58,1.38-.12,2.24.68,2.39,2.29Zm-1.21-29.96l6.82-.62-.47-5.18-5.51.5c-1.05.1-1.29.39-1.19,1.47l.35,3.84Zm.42,4.58l.47,5.18,6.82-.62-.47-5.18-6.82.62Zm.89,9.76l.36,3.97c.1,1.08.39,1.32,1.43,1.23l5.51-.5-.49-5.32-6.82.62Zm4.02,26.65c-1.31.12-1.96-.5-2.09-1.91-.07-.81-.27-4.39-.34-5.13-.12-1.35-.43-3.22-.55-4.56-.11-1.21.67-2.03,1.92-2.14,1.38-.12,2.08.35,2.73,6,.56,6.13.69,7.54-1.67,7.76Zm6.55-8.67c.33,1.39.86,3.65.94,4.46.12,1.28-.54,2.02-1.72,2.13-1.31.12-1.83-.51-2.08-2.52-.18-1.21-1.58-7.19-1.62-7.66-.13-1.48,1.03-1.79,1.62-1.85,1.44-.13,1.82.38,2.88,5.44Zm4.88-.11c.21.86.3,1.81.33,2.14.12,1.35-.59,2.23-1.77,2.33-.92.08-1.49-.41-1.7-2.02-.28-1.6-.85-4.2-1.21-5.32-.39-1.32-.48-1.65-.51-1.99-.07-.81.59-1.48,1.64-1.58,1.57-.14,2.08,1.03,3.23,6.42Zm14.84-17.78c.34,7.37.9,18.52-2.46,28.8-.88,2.66-1.62,3.95-3.33,4.1-1.31.12-2.85-.83-2.99-2.37-.08-.88.36-1.87.68-2.64,4.5-10.86,3.33-23.65.96-49.64-.31-3.43,1.17-5.27,4.52-5.57l15.87-1.45c3.41-.31,5.2,1.22,5.52,4.66l1.56,17.1c.31,3.43-1.17,5.27-4.58,5.58l-3.87.35c1.52,9.36,4.61,18.58,11.47,24.95,1.59,1.48,1.9,1.93,1.99,2.94.15,1.62-1.04,3.08-2.55,3.22-2.43.22-5.6-4.1-6.74-5.76-6.52-9.11-8.46-20.2-9.28-24.88l-6.75.62Zm-.4-5.06l13.77-1.26c1.31-.12,1.73-.63,1.6-1.98l-1.23-13.53c-.13-1.41-.62-1.77-1.94-1.65l-12,1.1c-1.31.12-1.73.56-1.6,1.98l1.4,15.35Z" />
                <path class="cls-1" d="m451.72,140.63c1.48-.41,2.58-.71,3.69-.81,1.64-.15,2.85.83,3,2.44.21,2.35-.31,3.08-10.9,5.2-2.27.48-4.55.89-7.29,1.28-1.08,3.36-2.35,6.8-4.03,10.21,1.77-1.59,4.25-2.7,6.61-2.91,5.44-.5,8.59,2.81,9.51,7.89,2.72-1.4,14.83-7.73,16.47-7.88,1.7-.16,3.03,1.35,3.19,3.04.18,1.95-1.16,2.55-3.44,3.57-7.38,3.19-10.35,4.68-15.08,7.15.18,1.95.42,3.9.6,5.85.25,2.69.51,5.59-2.51,5.86-1.64.15-2.71-.7-2.91-2.92-.08-.88-.31-4.86-.38-5.67-3.3,2.27-9.02,6.19-8.64,10.36.33,3.57,4.27,4.02,12.6,3.26,2.89-.26,4.51-.55,6.92-.97,2.54-.43,4.08-.91,5.07-1,1.7-.16,2.85.83,3.01,2.51.25,2.69-.63,3.99-12.95,5.12-7.15.65-19.67,1.79-20.55-7.83-.3-3.3.62-6.23,4.18-10.02,3.31-3.56,8.44-6.81,9.5-7.45-.31-1.94-.99-5.81-5.12-5.44-4.33.4-8.65,4.45-10.54,6.94-1.49,1.83-2.39,3.54-3.9,5.79-.99,1.51-1.73,2.06-2.65,2.14-1.71.16-3.15-1.21-3.28-2.62-.12-1.28.39-2.21,1.7-3.89,3.71-4.96,9.01-14.33,10.71-20.26-1.25.11-2.56.23-5.57.58-5.18.47-7.47.68-7.75-2.28-.16-1.75.85-3,2.62-3.16,1.38-.13,8.15-.54,9.66-.68.85-.08,1.77-.16,2.42-.29.65-2.3.98-4.5,1.35-6.98.11-.96.51-2.35,2.41-2.53,1.9-.17,3.17.66,3.32,2.28.15,1.68-.67,5.02-1.07,6.34,3.38-.65,7.41-1.42,10.05-2.21Z" />
                <path class="cls-1" d="m495.46,176.61c7.3,6.12,14.61,5.79,24.78,4.87,2.88-.26,7.8-.71,15.5-1.89,1.3-.19,2.93-.47,4.05-.57,1.64-.15,3.08.47,3.27,2.55.18,1.95-.73,2.85-2.88,3.18-5.15.81-10.65,1.38-17.27,1.98-15.74,1.44-21.26.99-28.66-4.71-1.93,2.76-3.77,5.03-5.51,6.95-.67.67-1.52,1.43-2.64,1.53-1.64.15-2.81-1.1-2.93-2.38-.13-1.41.67-2.03,1.33-2.84,2.96-3.12,5.44-6.27,6.08-7.28l-1.55-17.03c-.07-.74-.43-1.05-1.08-.99l-4.13.38c-1.97.18-2.86-.89-3.01-2.58-.15-1.68.53-2.9,2.5-3.08l6.23-.57c2.56-.23,3.99.99,4.23,3.62l1.72,18.85Zm-6.48-41.29c3.78,3.8,4.04,4.45,4.13,5.39.12,1.35-.98,3.01-2.56,3.15-1.25.11-1.83-.44-2.56-1.26-1.24-1.31-4.38-4.49-5.6-5.53-1.15-1.05-1.4-1.57-1.47-2.38-.14-1.48.92-3,2.62-3.16,1.44-.13,2.97,1.43,5.44,3.78Zm18.9-.84l4.98-.45c1.77-.16,2.58.78,2.73,2.33.14,1.55-.49,2.62-2.26,2.79l-8.52.78c.16,1.07.15,1.62.47,6.54l5.64-.51c2.3-.21,4.09,1.39,4.33,3.95.2,2.22.96,11.99.9,20.76-.08,5.64-.92,7.28-6.23,7.76-1.12.1-4.07.37-4.31-2.25-.17-1.88.67-2.84,1.91-2.96.52-.05,1.46,0,2.37-.08,1.11-.1,1.2-1.33,1.31-4.53.1-5.37-.21-11.72-.52-15.16-.2-2.22-.29-2.48-1.47-2.38l-3.8.35c.07,2.17.23,13.42-2.74,22.85-.62,1.89-1.16,3.23-2.86,3.38-1.64.15-2.73-.97-2.84-2.12-.08-.88.25-1.65.68-2.71,3.36-8.86,3.17-20.38,2.33-32.45l-2.82.26c-1.7.16-2.58-.78-2.72-2.33-.14-1.55.55-2.63,2.26-2.79l5.77-.53-.38-4.17c-.18-1.95.86-2.86,2.44-3.01,1.64-.15,2.83.56,3.01,2.51l.38,4.17Zm14.14,3.53c-1.26,2.9-2.67,6.28-4.9,6.49-1.38.13-2.72-.84-2.84-2.12-.1-1.14.44-1.74,1.12-2.89,2.78-5.01,3.08-6.05,4.8-11.91.25-.91,1.03-1.72,1.95-1.81,1.7-.16,2.97.68,3.11,2.23.1,1.14-.78,3.8-1.1,4.58l11.02-1.01c1.77-.16,2.58.78,2.73,2.4.14,1.55-.49,2.62-2.26,2.79l-13.64,1.24Zm11.54,3.97c2.03-.19,3.45.84,3.61,2.66.11,1.21-.28,1.99-.84,3.13-.5,1-3.37,5.13-4.81,6.75l.2,2.22,5.84-.53c1.77-.16,2.58.78,2.72,2.26.14,1.55-.49,2.62-2.26,2.79l-5.84.53.83,9.09c.18,2.02.5,5.45-5.01,5.96-4.13.38-6.01.07-6.23-2.35-.14-1.55.61-2.7,2.19-2.85.72-.07,1.66.05,2.44-.02,1.38-.13,1.81-.44,1.69-1.72l-.7-7.67-6.62.6c-1.71.16-2.52-.79-2.66-2.34-.13-1.48.49-2.56,2.2-2.71l6.62-.6-.39-4.24c-.14-1.55.86-2.18,1.65-2.25.2-.02.33-.03.47.03.6-.67,2.26-2.79,2.23-3.12-.02-.2-.09-.26-.42-.23l-8.33.76c-1.7.16-2.58-.78-2.72-2.26-.14-1.55.55-2.63,2.26-2.78l11.87-1.08Z" />
                <path class="cls-1" d="m593.04,146.8c2.42,26.46-10.48,32.93-19.66,33.77-10.56.96-18.82-4.8-20.02-17.93-.65-7.07,1.7-17.6,9.26-26.77-5.85,2.57-11.39,4.09-12.77,4.22-1.51.14-2.67-1.05-2.86-3.07-.09-.94.15-1.98,1.35-2.57.69-.4,2.13-.53,4.01-.98,6.66-1.63,11.11-3.59,12.96-4.37,1.08-.51,1.7-.9,2.62-.99,1.71-.16,3.35,1.25,3.52,3.07.09.94-.2,1.44-.56,1.88-2.7,3.03-4.14,4.59-7,9.46-3.7,6.52-5.51,13.47-4.97,19.39.84,9.22,6.51,13.39,13.92,12.71,17.05-1.56,15.77-23.57,15.05-31.44-.44-4.78-1.33-8.77-2.42-12.06-.34-.85-.62-1.78-.71-2.72-.17-1.82,1.02-3.28,3.06-3.47,2.1-.19,2.63,1.32,3.34,3.29,3.08,9.15,11.97,19.54,13.42,21.04,1.82,1.87,2.31,2.17,2.44,3.58.17,1.82-1.2,3.5-2.91,3.66-1.18.11-2.12-.01-5.91-5.37-2.8-3.88-4.04-5.88-5.62-8.72.22,1.68.38,3.49.46,4.37Zm1.55-25.73c.44.44,4.78,5.33,4.94,7.02.13,1.48-.96,2.53-2.07,2.63-.98.09-1.47-.21-2.53-1.67-1.14-1.66-2.41-3.17-3.15-4.12-.6-.76-1.37-1.3-1.48-2.44-.14-1.48,1.31-2.29,2.16-2.37,1.11-.1,1.69.46,2.14.96Zm7.16-3.37c1.69,1.81,4.48,4.89,4.63,6.5.13,1.48-.97,2.46-2.21,2.58-.85.08-1.47-.14-2.23-1.29-.75-1.02-2.71-3.62-3.73-4.61-.88-.94-1.12-1.46-1.19-2.13-.12-1.35,1.05-2.27,2.16-2.37,1.05-.1,1.54.2,2.57,1.33Z" />
                <path class="cls-1" d="m668.38,140.6c.52,5.66-.63,14.79-11.15,21.99-4.36,2.98-14.24,6.93-20.01,7.46-2.1.19-3.65-.89-3.83-2.91-.18-2.02.76-3.26,2.84-3.65,4.74-.91,13.77-2.68,19.83-8.05,2.15-1.82,6.81-6.53,6.1-14.34-.54-5.92-4.51-12.49-14.94-11.53-8.2.75-18.82,4.64-27.95,8.12-1.91.78-3.19,1.31-4.24,1.41-1.64.15-2.89-1.23-3.07-3.18-.23-2.49.54-2.76,7.27-5.14,10.05-3.57,20.49-6.62,27.96-7.3,11.8-1.08,20.18,5.96,21.2,17.14Z" />
                <path class="cls-1" d="m716.15,112.82c.44,4.78-15.49,22.93-17.9,25.53-1.08,1.18-1.56,1.7-1.53,2.11.05.61.97,1.27,2.1,1.98,10,6.76,19.7,16.6,21.84,19.05,1.69,1.88,2.28,2.58,2.41,3.99.15,1.68-1.34,3.45-3.11,3.61-1.05.1-1.94-.3-3.08-1.82-4.64-5.96-12.45-13.93-23.03-21.25-2.34-1.69-3.38-2.95-3.52-4.57-.16-1.75.55-3.38,1.8-4.92,1.49-1.77,3.18-3.55,4.92-5.54,3.41-3.98,9.16-11.22,12.56-18.12,1-2.13,1.59-2.86,2.9-2.98,1.77-.16,3.49,1.24,3.63,2.86v.07Z" />
                <path class="cls-1" d="m787.81,124.95c.2,8.67.39,13.68-.87,15.83-.96,1.78-2.86,2.7-5.35,2.93-3.02.28-6.64-.28-8.06-.69-1.36-.42-2.02-1.17-2.15-2.59-.15-1.68.86-2.86,2.3-2.99,1.12-.1,2.14.28,3.48.5,1.2.09,2.53.24,3.32.17,1.77-.16,2.4-.49,1.84-12.45-2.54.37-8.67,1.33-20.69,3.72.09,1.69.69,9.71,1.06,13.82.8,8.75,2.27,11.87,15.65,10.65,4.52-.41,8.68-1.2,12.12-1.92,1.49-.34,2.59-.64,3.18-.7,1.77-.16,3.17.66,3.38,2.95.26,2.89-2,3.44-6.82,4.29-1.89.31-4.63.69-8.43,1.04-4,.36-9.33.65-12.87.22-10.38-1.43-11.1-9.37-11.61-14.89-.21-2.29-.99-12.26-1.17-14.28-2.4.49-5.12,1.15-7,1.59-1.29.32-2.32.69-3.43.79-1.64.15-2.75-1.11-2.91-2.92-.23-2.56,1.89-3.16,4.55-3.74,2.79-.59,5.45-1.11,8.24-1.7-.22-1.75-1.21-9.6-1.35-11.14-.24-2.63.63-3.93,2.6-4.11,2.03-.19,3.11.8,3.35,3.36.15,1.68.72,9.37.92,10.84,7.34-1.48,18.15-3.22,20.83-3.6-.09-1.69-.89-9.76-1.06-11.58-.22-2.42.74-3.46,2.58-3.63,2.23-.2,2.94,1.09,3.19,3.78.15,1.62.75,9.64.83,10.58,2.35-.35,7.63-1.17,9.86-1.38,1.84-.17,3.25.79,3.43,2.81.26,2.9-1.83,3.09-6.08,3.61l-6.87.83Z" />
                <path class="cls-1" d="m819.82,109.2c-.32-2.82.62-4.13,2.98-4.34,2.49-.23,3.68,1.16,3.84,3.72l2.02,29.41c.12,2.09-.68,3.39-2.52,3.56-1.7.16-2.87-1.03-3.12-3.04l-3.2-29.3Zm11.43,40.43c.22,2.42-1.5,4.55-3.93,4.77-2.36.22-4.44-1.56-4.66-3.99-.22-2.42,1.56-4.62,3.86-4.83,2.36-.22,4.51,1.62,4.73,4.05Z" />
            </g>
            <g>
                <path class="cls-1" d="m239.33,294.44c2.69-.25,4.81,2.04,5.08,5,.21,2.35-.99,3.49-3.19,4.62-18.07,8.87-36.05,19.79-42.36,28.82-3.46,4.96-3.82,7.67-3.5,11.15,1.06,11.66,12.84,10.89,24.7,9.81,6.08-.55,12.79-1.79,21.04-3.78,2.26-.52,4.32-1.12,5.91-1.26,1.99-.18,4.32,1.15,4.64,4.63.18,1.94-.8,4.4-4.23,5.33-9.13,2.28-18.34,3.74-27.7,4.59-15.64,1.43-24.41-.04-29.97-8.19-1.85-2.61-2.94-5.81-3.4-9.69-.88-9.61,3.4-18.87,18.03-30.21-7.37-15.82-12.81-30.28-13-32.42-.23-2.56,1.86-4.91,4.65-5.17,3.49-.32,4.23,1.26,7.67,11.47,2.54,6.88,5.22,13.24,8.41,20.58,1.05-.61,23.34-14.92,27.23-15.27Z" />
                <path class="cls-1" d="m302.84,272.87c.66,7.26-23.53,34.83-27.19,38.77-1.64,1.8-2.37,2.59-2.32,3.2.08.92,1.48,1.93,3.19,3.01,15.2,10.26,29.92,25.21,33.17,28.93,2.57,2.86,3.47,3.91,3.67,6.06.23,2.56-2.03,5.24-4.72,5.48-1.59.15-2.95-.45-4.67-2.77-7.05-9.05-18.9-21.16-34.98-32.27-3.55-2.56-5.13-4.48-5.35-6.93-.24-2.66.84-5.13,2.73-7.47,2.27-2.68,4.83-5.39,7.47-8.41,5.17-6.04,13.91-17.04,19.08-27.52,1.51-3.23,2.42-4.34,4.41-4.53,2.69-.25,5.29,1.89,5.52,4.34v.1Z" />
                <path class="cls-1" d="m343.8,278.2c.7,7.67,2.06,41.26,2.68,48.11.73,7.98,2.36,17.11,15.51,15.91,4.78-.44,22.61-2.06,30.55-31.66.91-3.28,2.12-4.32,4.11-4.5,2.79-.25,4.99,1.92,5.21,4.27.33,3.58-7.76,38.24-40.12,41.19-11.35,1.04-16.97-4.43-19.02-7.03-3.74-4.71-4.72-9.88-5.71-20.72-.29-3.17-.39-6.46-.8-14.26-.58-11.91-1.64-25.63-1.69-26.24-.4-4.4-1.05-8.25-1.34-11.42-.29-3.17,1.36-4.87,4.25-5.13,5.28-.48,5.63,3.4,6.37,11.48Z" />
                <path class="cls-1" d="m465.48,265.75c2.54-.75,6.16-1.8,7.66-1.94,2.79-.25,4.47,1.66,4.7,4.21.4,4.4-.97,4.73-15.44,8.01-3.93.98-7.48,1.71-9.06,1.96.17,1.84.97,10.63,1.06,12.69,4.85-.75,9.68-1.81,14.37-3.17,1.57-.45,4.49-1.44,5.98-1.58,2.39-.22,4.12,1.17,4.37,3.83.28,3.07-1.01,4.32-3.34,5.25-3.68,1.47-15.41,3.88-20.47,4.55.21,2.35,1.67,13.87,1.91,16.53,7.39,1.7,17.91,5.89,24.08,9.66,2.56,1.62,3.55,2.56,3.73,4.61.21,2.35-1.35,4.97-4.04,5.21-1.99.18-2.33-.2-8.49-3.86-6.68-3.82-12.39-5.88-14.34-6.42,2.16,17.02-14.08,18.5-19.46,18.99-13.54,1.24-22.76-4.01-23.58-13-1.16-12.68,12.51-15.88,20.38-16.6,2.59-.24,7.8-.4,13.27.13-.49-4.29-.98-8.57-1.59-14.08-4.55.73-10.71,1.49-16.29,2-10.66.97-13.25,1.21-13.7-3.8-.23-2.56,1-4.42,3.99-4.7,2.99-.27,6.7-.3,11.08-.7,4.68-.43,9.45-.97,14.01-1.59-.3-3.27-.55-6.03-1.35-12.56-2.47.43-9.23,1.15-14.61,1.64-15.74,1.44-18.72,1.71-19.18-3.3-.27-2.97,1.25-4.96,4.34-5.24,2.19-.2,7.82-.1,16.39-.88,3.49-.32,9.15-.94,12.12-1.42-.42-3.47-.96-8.26-1.16-10.51-.28-3.07,1.06-4.84,3.75-5.09,1.69-.15,4.68-.43,5.07,3.87.21,2.25.75,8.18.83,10.23,2.87-.47,8.87-1.84,12.99-2.94Zm-29.83,57.16c-3.39.31-12.51,1.56-11.97,7.49.42,4.6,5.8,6.38,15.46,5.5,5.98-.55,11.86-2.11,10.42-12.4-4.61-1.02-11.62-.79-13.91-.59Z" />
                <path class="cls-1" d="m602.83,253.22c2.54-.75,6.16-1.8,7.66-1.94,2.79-.25,4.47,1.66,4.7,4.21.4,4.4-.97,4.73-15.44,8.01-3.93.98-7.48,1.71-9.06,1.96.17,1.84.97,10.63,1.06,12.69,4.85-.75,9.68-1.81,14.37-3.17,1.56-.45,4.49-1.44,5.98-1.58,2.39-.22,4.12,1.17,4.37,3.83.28,3.07-1.01,4.32-3.34,5.25-3.68,1.47-15.41,3.88-20.47,4.55.21,2.35,1.67,13.87,1.91,16.53,7.38,1.7,17.91,5.89,24.08,9.66,2.56,1.62,3.55,2.56,3.73,4.61.21,2.35-1.35,4.97-4.04,5.21-1.99.18-2.33-.2-8.49-3.86-6.68-3.82-12.39-5.88-14.34-6.42,2.16,17.02-14.08,18.5-19.46,18.99-13.54,1.24-22.76-4-23.58-13-1.16-12.68,12.51-15.89,20.38-16.6,2.59-.24,7.8-.4,13.27.13-.49-4.29-.98-8.57-1.59-14.08-4.55.72-10.71,1.49-16.29,2-10.66.97-13.25,1.21-13.7-3.8-.23-2.56,1-4.42,3.99-4.7,2.99-.27,6.7-.3,11.08-.7,4.68-.43,9.45-.97,14.01-1.59-.3-3.27-.55-6.03-1.35-12.56-2.47.43-9.23,1.15-14.61,1.64-15.74,1.44-18.72,1.71-19.18-3.3-.27-2.97,1.25-4.96,4.34-5.24,2.19-.2,7.82-.1,16.39-.88,3.49-.32,9.15-.94,12.12-1.42-.42-3.47-.96-8.26-1.16-10.51-.28-3.07,1.06-4.84,3.75-5.09,1.69-.15,4.68-.43,5.07,3.87.21,2.25.75,8.18.83,10.24,2.87-.47,8.87-1.84,12.99-2.94Zm-29.83,57.16c-3.39.31-12.51,1.56-11.97,7.49.42,4.6,5.8,6.38,15.46,5.5,5.98-.55,11.86-2.11,10.42-12.4-4.61-1.02-11.62-.79-13.91-.59Z" />
                <path class="cls-1" d="m680.02,268.23c16.93-1.54,27.7,8.61,28.84,21.08,1.89,20.76-20.01,31.62-38.04,33.27-11.95,1.09-20.71-3.57-21.48-11.96-.7-7.67,4.66-13.83,14.52-14.73,13.64-1.25,20.84,8.3,22.63,13.6,3.48-1.45,14.24-7.9,13.26-18.63-.48-5.21-4.15-15.81-20.49-14.32-19.12,1.75-28.78,13.66-34.74,21.01-2.36,2.79-3.66,3.94-5.65,4.12-2.59.24-4.91-2.13-5.13-4.48-.16-1.74.46-2.72,3.67-6.01,3.2-3.49,17.13-19.19,20.06-22.25,3.85-4.06,7.39-8.1,10.39-11.57,3.02-3.27,6.59-6.99,9.24-9.92-7.45,2.02-24.25,5-30.92,5.61-3.79.35-5.92-1.01-6.22-4.38-.16-1.74.41-4.26,3.28-4.73,2.17-.4,4.15-.69,8.23-1.16,7.65-.91,16.35-2.42,23.75-3.82,4.25-.8,7.79-1.54,9.69-1.71,3.39-.31,6.2,1.91,6.46,4.77.23,2.56-.87,3.69-3.71,6.63-3.5,3.51-24.07,24.57-23.96,24.66,7-3.63,12.72-4.77,16.31-5.1Zm-15.91,35.89c-5.48.5-6.41,3.47-6.27,5.01.12,1.33,1.08,6.29,13.13,5.19,2.99-.27,5.65-.83,7.78-1.64-3.88-9.54-13.15-8.7-14.64-8.56Z" />
                <path class="cls-1" d="m783.06,275.94c2.49,27.3-31.72,35.37-37.69,35.92-3.39.31-5.37-1.57-5.59-4.03-.23-2.55,1.05-3.91,3.8-4.57,6.6-1.43,13.97-3.13,20.91-7.48,7.22-4.47,10.89-11.61,10.22-18.98-.66-7.26-5.59-15.06-17.84-13.94-6.38.58-20.76,4.68-34.1,10.43-1.83.89-3.27,1.54-4.47,1.65-2.09.19-3.95-1.5-4.21-4.26-.36-3.99.88-4.72,18.15-10.21,9.66-3.05,17.01-5.06,23.68-5.67,20.71-1.89,26.4,13.05,27.14,21.13Z" />
                <path class="cls-1" d="m856.73,238.08c2.69-.25,4.81,2.04,5.08,5,.21,2.35-.99,3.49-3.19,4.62-18.07,8.87-36.05,19.79-42.36,28.82-3.46,4.96-3.82,7.67-3.5,11.15,1.06,11.66,12.84,10.89,24.69,9.81,6.08-.55,12.79-1.79,21.05-3.78,2.26-.52,4.32-1.12,5.91-1.26,1.99-.18,4.32,1.15,4.64,4.63.18,1.94-.8,4.4-4.23,5.33-9.13,2.28-18.34,3.74-27.7,4.59-15.64,1.43-24.41-.04-29.97-8.19-1.84-2.62-2.94-5.81-3.4-9.69-.88-9.61,3.4-18.87,18.03-30.21-7.37-15.82-12.81-30.28-13-32.42-.23-2.56,1.86-4.91,4.65-5.17,3.49-.32,4.23,1.26,7.67,11.47,2.54,6.88,5.22,13.24,8.41,20.58,1.05-.61,23.34-14.92,27.23-15.27Z" />
                <path class="cls-1" d="m888.47,228.28c-.49-4.28.93-6.27,4.52-6.6,3.78-.35,5.58,1.76,5.84,5.65l3.07,44.67c.19,3.18-1.04,5.15-3.83,5.4-2.59.24-4.36-1.56-4.74-4.62l-4.87-44.51Zm17.35,61.41c.34,3.68-2.28,6.91-5.97,7.25-3.58.33-6.74-2.37-7.08-6.05-.34-3.68,2.37-7.02,5.86-7.34,3.58-.33,6.85,2.47,7.19,6.15Z" />
                <path class="cls-1" d="m446.87,451.92c7.14,8.94,18.43,9.35,34.69,8.18,3.5-.22,9.89-.59,16.46-1.19s13.61-1.65,16.1-1.88c2.99-.27,4.7.91,4.95,3.67.32,3.48-1.67,4.79-5.66,5.16-6.27.67-13.43,1.43-20.5,2.08-30.18,2.75-40.09.88-49.28-7.36-1.95,2.86-5.57,7.21-8.85,10.81-2.11,2.15-3.09,2.45-4.29,2.56-2.09.19-4.55-1.44-4.77-3.89-.14-1.53.27-2.5,2.31-4.44,3.96-3.87,7.76-8.44,10.62-12.41l-2.23-24.44c-.11-1.23-.77-1.79-1.96-1.68l-7.17.66c-2.89.26-4.34-1.36-4.58-3.91-.22-2.45.91-4.31,3.8-4.57l9.86-.9c5.18-.47,7.58,1.58,8.06,6.89l2.44,26.69Zm-5.85-58.54c1.56,1.71,2.8,3.15,2.94,4.68.21,2.25-1.95,5.02-4.14,5.22-1.69.16-2.75-.47-4.24-2.4-1.68-1.91-4.69-5.14-8.63-8.7-1.63-1.4-2.22-2.27-2.34-3.6-.21-2.35,1.81-4.39,4.3-4.62,3.19-.29,8.87,5.89,12.11,9.41Zm42.17-4.47c1.14-2.89,2.49-6.83,3.6-10.12.55-1.7,1.53-3.03,3.42-3.2,2.49-.23,4.83,1.21,5.03,3.36.13,1.43-.47,3.65-3.08,9.15l15.04-1.37c2.59-.24,3.83,1.2,4.03,3.45.21,2.25-.75,3.88-3.34,4.12l-25.4,2.32c-.46,1.59-1.9,5.64-2.56,7.14l16.63-1.52c5.38-.49,7.99,1.75,8.49,7.17l3.07,33.64c.5,5.52-1.66,8.19-7.04,8.69l-34.86,3.18c-5.38.49-7.99-1.74-8.5-7.27l-3.07-33.64c-.49-5.42,1.67-8.09,7.05-8.58l9.26-.85c1.01-2.15,2.14-5.14,2.76-7.16l-23.11,2.11c-2.59.24-3.92-1.19-4.13-3.44-.21-2.25.85-3.89,3.44-4.13l15.24-1.39c-1.32-.19-6.3-6.33-6.48-8.28-.21-2.35,1.82-4.29,3.71-4.46,1.1-.1,2.69-.25,7.06,5.85.8,1.06,1.18,1.95,1.26,2.77.13,1.43-.73,2.95-2.26,3.82l14.74-1.35Zm-20.13,30.29l34.56-3.15-.41-4.5c-.12-1.33-.67-1.8-1.96-1.68l-30.97,2.83c-1.29.12-1.75.67-1.62,2l.41,4.5Zm.66,7.26l.61,6.65,34.56-3.15-.61-6.65-34.56,3.15Zm1.28,14.01l.46,5.01c.12,1.33.67,1.8,1.96,1.68l30.97-2.83c1.29-.12,1.75-.68,1.62-2l-.46-5.01-34.56,3.15Z" />
                <path class="cls-1" d="m557.63,440.78c-2.3,4.54-5.5,10.19-12.27,10.81-7.87.72-17.97-7.64-19.46-24-1.72-18.81,8.92-46.39,42.28-49.43,24-2.19,39.89,11.21,42.05,34.93,2.86,31.29-24.16,43.34-28.64,43.75-2.39.22-4.68-1.74-4.91-4.29-.32-3.48,1.43-4.15,4.7-5.69,13.79-6.21,20.97-17.79,19.6-32.82-.65-7.16-4.16-29.11-31.02-27.38-2.03,26.17-8.68,46.78-12.33,54.12Zm-23.23-13.55c.92,10.12,6.21,15.21,9.69,14.89,3.39-.31,5.38-4.82,7.06-8.48,4.96-11.69,9.34-33.02,9.8-45.54-16.99,4.23-28.23,20.83-26.56,39.13Z" />
                <path class="cls-1" d="m647.75,379.56l9.16-.84c2.39-.22,3.52,1.12,3.7,3.17.19,2.04-.68,3.57-3.07,3.78l-9.16.84.72,7.87,8.86-.81c2.39-.22,3.52,1.12,3.7,3.17.19,2.04-.68,3.57-3.07,3.79l-8.86.81.74,8.08,6.08-.55c5.18-.47,7.25,1.3,7.73,6.62.92,10.12.6,24.17-.67,30.06-1.2,5.57-4.01,7.79-10.48,8.38-5.38.49-7.59-.65-7.88-3.82-.22-2.46,1.13-4.12,3.42-4.33,1.39-.13,2.72.06,4.61-.11,2.49-.23,3.05-.69,3.53-4.24,1.3-9.91.27-22.29.26-22.5-.21-2.25-.65-2.72-2.84-2.52l-21.11,1.93c-4.68.43-6.97-1.53-7.41-6.34l-3.55-38.85c-.43-4.7,1.47-7.04,6.15-7.47l29.68-2.71c2.59-.24,3.83,1.2,4.04,3.55.21,2.25-.75,3.88-3.34,4.12l-11.65,1.06.72,7.87Zm-15.68,47.11c.23,2.56.15,12.67-.9,17.61-.54,2.94-1.43,4.15-3.82,4.37-1.99.18-3.5-.92-3.66-2.66-.06-.61-.08-1.95.11-3.21.9-4.41,1.38-10.23,1.28-15.68-.04-2.68.97-3.7,3.36-3.92,2.09-.19,3.41,1.03,3.63,3.48Zm-1.84-45.51l10.36-.95-.72-7.87-8.37.76c-1.59.15-1.96.59-1.8,2.23l.53,5.83Zm.63,6.95l.72,7.87,10.36-.95-.72-7.87-10.36.95Zm1.35,14.83l.55,6.03c.15,1.64.58,2.01,2.18,1.86l8.37-.76-.74-8.08-10.36.95Zm6.1,40.48c-1.99.18-2.98-.76-3.18-2.91-.11-1.23-.41-6.66-.51-7.79-.19-2.04-.65-4.89-.83-6.94-.17-1.84,1.02-3.08,2.92-3.26,2.09-.19,3.16.54,4.14,9.11.85,9.31,1.05,11.45-2.54,11.78Zm9.95-13.18c.49,2.12,1.31,5.55,1.42,6.78.18,1.94-.82,3.07-2.62,3.23-1.99.18-2.78-.78-3.16-3.84-.27-1.83-2.4-10.92-2.47-11.63-.21-2.25,1.56-2.72,2.46-2.8,2.19-.2,2.76.57,4.37,8.26Zm7.42-.16c.32,1.31.45,2.74.5,3.25.19,2.05-.9,3.38-2.69,3.54-1.39.13-2.27-.62-2.59-3.06-.42-2.43-1.28-6.38-1.84-8.08-.58-2.01-.73-2.51-.78-3.02-.11-1.23.9-2.25,2.49-2.39,2.39-.22,3.16,1.57,4.91,9.76Zm22.54-27.01c.52,11.19,1.36,28.12-3.74,43.75-1.34,4.04-2.46,6-5.05,6.24-1.99.18-4.33-1.25-4.55-3.61-.12-1.33.54-2.83,1.04-4.01,6.83-16.5,5.06-35.93,1.45-75.4-.48-5.21,1.78-8,6.86-8.46l24.1-2.2c5.18-.47,7.9,1.86,8.38,7.07l2.37,25.97c.48,5.21-1.78,8-6.96,8.47l-5.88.54c2.3,14.22,7,28.23,17.42,37.9,2.42,2.25,2.88,2.93,3.02,4.47.22,2.45-1.58,4.68-3.87,4.89-3.69.34-8.5-6.24-10.24-8.76-9.9-13.84-12.84-30.69-14.09-37.79l-10.26.94Zm-.6-7.68l20.91-1.91c1.99-.18,2.62-.96,2.44-3.01l-1.88-20.55c-.2-2.15-.95-2.7-2.94-2.52l-18.23,1.66c-1.99.18-2.63.86-2.44,3.01l2.13,23.31Z" />
            </g>
        </svg>

        {{-- <video autoplay muted playsinline loop src="{{ asset('assets/images/index/IMG_2833.MOV') }}">
        </video> --}}

        <video autoplay muted playsinline loop src="{{ asset('/storage/images/KV_final.mp4') }}" class="topvideo">
        </video>

    </div>

    <!-- g-nav pc -->
    <nav id="menu" class="nav-pc">
        <h1><a href="{{ route('top') }}">
                <img src="{{ asset('assets/images/site_logo/logo.png') }}" width="80" height="80" alt="とくしままるっと道の駅"></a></h1>

        <ul>
            <li>
                <a href="{{ route('stationlist') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/station_list_icon.svg') }}" alt="道の駅一覧" width="30" height="30">
                    </div>
                    道の駅一覧
                </a>
            </li>
            <li>
                <a href="{{ route('areasearch') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/station_area_icon.svg') }}" alt="エリア検索" width="30" height="30">
                    </div>
                    エリア検索
                </a>
            </li>
            <li>
                <a href="{{ route('ditailsearch') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/station_detail_icon.svg') }}" alt="詳細検索" width="30" height="30">
                    </div>
                    詳細検索
                </a>
            </li>
            <li>
                <a href="{{ route('goods') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/goods_list_icon.svg') }}" alt="特産品" width="30" height="30">
                    </div>
                    特産品
                </a>
            </li>
            <li>
                <a href="{{ route('activity') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/activity_list_icon.svg') }}" alt="体験" width="30" height="30">
                    </div>
                    体験
                </a>
            </li>
            <li>
                <a href="{{ route('bloglist') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/blog_list_icon.svg') }}" alt="ブログ" width="30" height="30">
                    </div>
                    ブログ
                </a>
            </li>
            <li>
                <a href="{{ route('mypage') }}">
                    <div>
                        <img src="{{ asset('assets/images/menu_icon/like_icon.svg') }}" alt="お気に入り" width="30" height="30">
                    </div>
                    お気に入り
                </a>
            </li>
        </ul>
    </nav>

    <!-- ヘッダー背景 -->
    <img class="header-bg" src="{{ asset('assets/images/header/header_bg.png') }}" alt="ヘッダー背景">
</header>
