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
        $sql .= 'ORDER BY station_name ASC ';
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
    function nameChangeInt($value)
    {
        switch ($value) {
            case 'くるくるなると':
                $id = 1;
                break;
            case '第九の里':
                $id = 2;
                break;
            case '道の駅いたの':
                $id = 3;
                break;
            case 'てすてすてすと':
                $id = 4;
                break;
            case 'ぴ地の駅':
                $id = 5;
                break;
            case 'くるくるなると':
                $id = 6;
                break;
            case 'くるくるなると':
                $id = 7;
                break;
            case 'くるくるなると':
                $id = 8;
                break;
            case 'くるくるなると':
                $id = 9;
                break;
            case 'くるくるなると':
                $id = 10;
                break;
            case 'くるくるなると':
                $id = 11;
                break;
            case 'くるくるなると':
                $id = 12;
                break;
            case 'くるくるなると':
                $id = 13;
                break;
            case 'くるくるなると':
                $id = 14;
                break;
            case 'くるくるなると':
                $id = 15;
                break;
            case 'くるくるなると':
                $id = 16;
                break;
            case 'くるくるなると':
                $id = 17;
                break;
            case 'くるくるなると':
                $id = 18;
                break;
            default:
                $id = 1;
                break;
        }
        return $id;
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
    <div class="card">
        <?php foreach ($data as $key => $value) { ?>
        <?php var_dump($key); ?>
        <?php
            if ($value['area_name'] === '西部') { ?>
        <div class="list">
            <a href="{{ url('station-detail' . '?id=' . nameChangeInt($value['station_name'])) }}">
                <img src="{{ asset('/storage/imgs/' . $value['picture1']) }}" alt="">
                <p><?= $value['station_name'] ?></p>
                <div> 営業時間:<?= $value['business_hours'] ?></div>
                <div>住所:<?= $value['address'] ?></div>
                <div class="icon">
                    <img src="{{ asset('/storage/imgs/atm_icon_' . $value['atm_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/bed_icon_' . $value['bed_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/restaurant_icon_' . $value['restaurant_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/lightmeal_icon_' . $value['lightmeal_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/accommodation_icon_' . $value['accommodation_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/spa_icon_' . $value['spa_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/park_icon_' . $value['park_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/ev_icon_' . $value['ev_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/lan_icon_' . $value['lan_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/shower_icon_' . $value['shower_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/experience_icon_' . $value['experience_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/guide_icon_' . $value['guide_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/disability_icon_' . $value['disability_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/shop_icon_' . $value['shop_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/observatory_icon_' . $value['observatory_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/museum_icon_' . $value['museum_icon'] . '.jpeg') }}" alt="">
                </div>
            </a>
            <?php }?>
        </div>
        <?php } ?>
    </div>
    <p>東部</p>
    <div class="card">
        <?php foreach ($data as $key => $value) { ?>
        <?php
        if ($value['area_name'] === '東部') { ?>
        <div class="list">
            <a href="{{ url('station-detail' . '?id=' . nameChangeInt($value['station_name'])) }}">
                <img src="{{ asset('/storage/imgs/' . $value['picture1']) }}" alt="">
                <p><?= $value['station_name'] ?></p>
                <div> 営業時間:<?= $value['business_hours'] ?></div>
                <div>住所:<?= $value['address'] ?></div>
                <div class="icon">
                    <img src="{{ asset('/storage/imgs/atm_icon_' . $value['atm_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/bed_icon_' . $value['bed_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/restaurant_icon_' . $value['restaurant_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/lightmeal_icon_' . $value['lightmeal_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/accommodation_icon_' . $value['accommodation_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/spa_icon_' . $value['spa_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/park_icon_' . $value['park_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/ev_icon_' . $value['ev_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/lan_icon_' . $value['lan_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/shower_icon_' . $value['shower_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/experience_icon_' . $value['experience_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/guide_icon_' . $value['guide_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/disability_icon_' . $value['disability_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/shop_icon_' . $value['shop_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/observatory_icon_' . $value['observatory_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/museum_icon_' . $value['museum_icon'] . '.jpeg') }}" alt="">
                </div>
            </a>
            <?php }?>
        </div>
        <?php } ?>
    </div>
    <p>南部</p>
    <div class="card">
        <?php foreach ($data as $key => $value) { ?>
        <?php
        if ($value['area_name'] === '南部') { ?>
        <div class="list">
            <a href="{{ url('station-detail' . '?id=' . nameChangeInt($value['station_name'])) }}">道の駅詳細ページへ
                <img src="{{ asset('/storage/imgs/' . $value['picture1']) }}" alt="">
                <p><?= $value['station_name'] ?></p>
                <div> 営業時間:<?= $value['business_hours'] ?></div>
                <div>住所:<?= $value['address'] ?></div>
                <div class="icon">
                    <img src="{{ asset('/storage/imgs/atm_icon_' . $value['atm_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/bed_icon_' . $value['bed_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/restaurant_icon_' . $value['restaurant_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/lightmeal_icon_' . $value['lightmeal_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/accommodation_icon_' . $value['accommodation_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/spa_icon_' . $value['spa_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/park_icon_' . $value['park_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/ev_icon_' . $value['ev_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/lan_icon_' . $value['lan_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/shower_icon_' . $value['shower_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/experience_icon_' . $value['experience_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/guide_icon_' . $value['guide_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/disability_icon_' . $value['disability_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/shop_icon_' . $value['shop_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/observatory_icon_' . $value['observatory_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/museum_icon_' . $value['museum_icon'] . '.jpeg') }}"
                        alt="">
                </div>
                <?php }?>
            </a>
        </div>
        <?php } ?>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
