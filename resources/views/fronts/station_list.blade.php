@extends('layouts.layout_front')

@section('description', '一覧')
@php
    $dsn = 'mysql:dbname=roadstation;host=localhost;charset=utf8';
    $user = 'root';
    $pass = '';
    try {
        $dbh = new PDO($dsn, $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM road_stations ';
        $sql .= 'INNER JOIN areas ';
        $sql .= 'ON road_stations.area_id = areas.id ';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    } finally {
        $dbh = null;
        // finallyは絶対最後に起動
        // nullでデーターベースとの接続情報を初期化
    }
@endphp

@section('keywords', 'キーワード1,キーワード2・・・')

{{-- タイトル --}}
@section('title', '一覧')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

@section('content')
    <div class="car">
        <img src="{{ asset('/storage/imgs/road_side_2.jpg') }}" alt="man">
    </div>
    <p>道の駅一覧</p>
    <p>西部</p>
    <?php foreach ($data as $key => $value) { ?>
    <?php
    if ($value['area_name'] === '西部') { ?>
    <div>
        <img src="{{ asset('/storage/imgs/' . $value['picture1']) }}" alt="">
        <p><?= $value['station_name'] ?></p>
    </div>
    <?php }?>

    <?php } ?>


@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
