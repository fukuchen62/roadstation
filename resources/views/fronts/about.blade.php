@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'このサイトについて')

{{-- 該当ページのCSS --}}
@section('pageCss')
<link rel="stylesheet" href="{{asset('assets/css/privacy.css')}}">
@endsection

@section('key_visual')

@endsection

{{-- メイン --}}
@section('content')

<section id="top">
<div class="center">
<h1 class="headline">このサイトについて</h1>
</div>
<br>
<p>このサイトは、国の公的職業訓練制度に基づく、株式会社ＱＬＩＰ インターナショナル・ＷＥＢシステム開発実践科生『笑（ワラ）』班が、2023年に制作したウェブサイトです。（以下「本サイト」と言います）</p>
</section>

<section>
<h2>サイト制作の経緯</h2><br>
<p>新型コロナ初確認から３年。</p>
<p>長い間不安な状況が続いていましたが、ようやくコロナ禍からの脱出の兆しが見え始め、今までできなかったこと、願っていたことを少しずつ実現できるようになってきました。</p>
<p>家族や大切な人との食事や外出。休日のドライブやショッピング。</p>
<p>それらを実現できる場所を考えたときに、私たちは道の駅にたどり着きました。</p><br>

<p>徳島県には魅力的なスポットがたくさんありますが、なかでも、より生活に密着して気軽に楽しめ、県内全域を網羅した「道の駅」の情報は役立ち、生活を豊かにするお手伝いができるのではないかと思い今回『とくしま　まるっと道の駅』のサイトを企画しました。</p></section><br>
<section>
<h2>サイト制作にご協力くださった方々</h2><br>
<p>この度は本サイト制作に際して、ご協力いただき誠にありがとうございます。</p><br>
<p>徳島全18か所道の駅の皆様</p></section>
<section><h2>参考サイト</h2><br>
<p>以下のサイトを参考元・引用元として、まとめさせて頂きました。
各関係機関にご協力いただき、リンク先を掲載させていただいております。 アドレスをクリックすると、リンク先へ飛びます。</p><br><br>
<a href="https://www.awanavi.jp/" class="link"><p>阿波ナビ</p></a><br>
<a href="https://www.michi-no-eki.jp/" class="link"><p>全国道の駅公式ホームページ</p></a>
<br></section>
<section><h2>このサイトの使い方</h2><br>
<h3>道の駅を探す</h3><br>
<p>徳島県の道の駅を一覧から検索できます。徳島県の東部・西部・南部といったエリアで探したり、詳細な条件からご要望を満たした道の駅を探すこともできます。また、気になる道の駅をお気に入り登録すれば、マイページからいつでも確認することができます。（ログイン不要）</p><br>

<h3>道の駅を知る</h3><br>
<p>各道の駅をクリックすると、詳細ページに飛ぶことができます。より詳しい情報や、その道の駅にしかないもの、おススメグルメやお土産など、魅力をしっかりと伝えます。</p><br>

<h3>“徳島ならでは”のグルメ・特産品を探す</h3><br>
<p>徳島県が全国に誇る食や特産品を紹介しています。実際に道の駅のスタッフの方々にインタビューして、リアルに求められているものを調べてきました。県外の方はもちろん、県内の方も、普段、身近にありすぎて忘れている徳島の良さを再確認したり、お土産探しの手がかりになるかもしれません。</p><br>

<h3>アクティビティを探す</h3><br>
<p>徳島県の道の駅で体験できるアクティビティを紹介しています。概要や利用条件、実際に行ってみないとわからない体験談などを詳しく利用者の目線でレビューしています。</p><br></section>



<small>※ 体験（予約・電話）するにあたっての共通の注意事項<br>
当サイトは体験が出来る道の駅を紹介するサイトです。<br>
体験へのご予約には一切関与しておりません。<br>
トラブルなどがあった場合、当サイトは責任を持つことはできませんのであらかじめご了承ください。</small>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
