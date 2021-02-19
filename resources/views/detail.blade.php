<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DB Device</title>

    <!-- Styles -->
</head>
<body>
DB Deviceの詳細ページ<br>
<a href="/top">デバイス一覧ページへ</a>
    <div>
    <p>デバイス詳細</p>
    <table>
        <tr>
            <td>id</td>
            <td>{{ $device->id }}</td>
        </tr>
        <tr>
            <td>機種名</td>
            <td>{{ $device->model_name }}</td>
        </tr>
        <tr>
            <td>share</td>
            <td>{{ $device->share }}</td>
        </tr>
        <tr>
            <td>キャリア</td>
            <td>{{ $device->career }}</td>
        </tr>
        <tr>
            <td>ニックネーム</td>
            <td>{{ $device->nickname }}</td>
        </tr>
        <tr>
            <td>メーカー（ロゴ）</td>
            <td>{{ $device->maker_logo }}</td>
        </tr>
        <tr>
            <td>メーカー（社名）</td>
            <td>{{ $device->maker_name }}</td>
        </tr>
        <tr>
            <td>発売日</td>
            <td>{{ $device->release_date }}</td>
        </tr>
        <tr>
            <td>OSバージョン(発売時点）</td>
            <td>{{ $device->os_ver }}</td>
        </tr>
        <tr>
            <td>UserAgent(発売時点）</td>
            <td>{{ $device->useragent_at_release }}</td>
        </tr>
        <tr>
            <td>UserAgent（機種判別用）</td>
            <td>{{ $device->useragent_for_model }}</td>
        </tr>
        <tr>
            <td>通信方式</td>
            <td>{{ $device->comm_method }}</td>
        </tr>
        <tr>
            <td>上り通信速度</td>
            <td>{{ $device->comm_speed_upload }}</td>
        </tr>
        <tr>
            <td>下り通信速度</td>
            <td>{{ $device->comm_speed_download }}</td>
        </tr>
        <tr>
            <td>その他の通信方式</td>
            <td>{{ $device->other_comm_methods }}</td>
        </tr>
        <tr>
            <td>上り通信速度（その他）</td>
            <td>{{ $device->othe_comm_speed_upload }}</td>
        </tr>
        <tr>
            <td>下り通信速度（その他）</td>
            <td>{{ $device->othe_comm_speed_download }}</td>
        </tr>
        <tr>
            <td>プロセッサ</td>
            <td>{{ $device->processor }}</td>
        </tr>
        <tr>
            <td>RAM</td>
            <td>{{ $device->ram }}</td>
        </tr>
        <tr>
            <td>ROM</td>
            <td>{{ $device->rom }}</td>
        </tr>
        <tr>
            <td>質量[g]</td>
            <td>{{ $device->mass }}</td>
        </tr>
        <tr>
            <td>画面サイズ（インチ）</td>
            <td>{{ $device->screen_size_inch }}</td>
        </tr>
        <tr>
            <td>ディスプレイ種別</td>
            <td>{{ $device->display_type }}</td>
        </tr>
        <tr>
            <td>画面解像度（縦×横）</td>
            <td>{{ $device->screen_resolution }}</td>
        </tr>
        <tr>
            <td>液晶最大表示色数</td>
            <td>{{ $device->max_color_display }}</td>
        </tr>
        <tr>
            <td>メインカメラ</td>
            <td>{{ $device->main_camera }}</td>
        </tr>
        <tr>
            <td>サブカメラ</td>
            <td>{{ $device->sub_camera }}</td>
        </tr>
        <tr>
            <td>ハードウェアキー</td>
            <td>{{ $device->hardware_key }}</td>
        </tr>
        <tr>
            <td>Wi-Fi規格</td>
            <td>{{ $device->wifi_standard }}</td>
        </tr>
        <tr>
            <td>Bluetooth Ver.</td>
            <td>{{ $device->bluetooth_ver }}</td>
        </tr>
        <tr>
            <td>テザリング</td>
            <td>{{ $device->tethering }}</td>
        </tr>
        <tr>
            <td>赤外線</td>
            <td>{{ $device->infrared }}</td>
        </tr>
        <tr>
            <td>GPS</td>
            <td>{{ $device->gps }}</td>
        </tr>
        <tr>
            <td>電子コンパス</td>
            <td>{{ $device->electronic_compass }}</td>
        </tr>
        <tr>
            <td>Felica</td>
            <td>{{ $device->felica }}</td>
        </tr>
        <tr>
            <td>NFC</td>
            <td>{{ $device->nfc }}</td>
        </tr>
        <tr>
            <td>非接触充電（ワイヤレス給電/おくだけ充電）</td>
            <td>{{ $device->non_contact_charging }}</td>
        </tr>
        <tr>
            <td>ワンセグ</td>
            <td>{{ $device->one_seg }}</td>
        </tr>
        <tr>
            <td>マルチメディア放送対応（モバキャス）</td>
            <td>{{ $device->multimedia_broadcast }}</td>
        </tr>
        <tr>
            <td>4D</td>
            <td>{{ $device->four_dim }}</td>
        </tr>
        <tr>
            <td>防水</td>
            <td>{{ $device->waterproof }}</td>
        </tr>
        <tr>
            <td>データ更新日</td>
            <td>{{ $device->koushin_date }}</td>
        </tr>
        <tr>
            <td>備考</td>
            <td>{{ $device->remarks }}</td>
        </tr>
        <tr>
            <td>搭載ブラウザ情報 Android標準</td>
            <td>{{ $device->browser_info_android_standard }}</td>
        </tr>
        <tr>
            <td>搭載ブラウザ情報 Chrome</td>
            <td>{{ $device->browser_info_chrome }}</td>
        </tr>
        <tr>
            <td>搭載ブラウザ情報 その他ブラウザ</td>
            <td>{{ $device->browser_info_other_browsers }}</td>
        </tr>
    </table>
    </div>
</body>
</html>