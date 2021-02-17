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
DB DeviceのTopページ<br>
<a href="/">Welcomeページへ</a>
    <div>
    <p>デバイス一覧</p>
    <table>
    <tr>
        <th>id</th>
        <th>機種名</th>
        <th>share</th>
        <th>キャリア</th>
        <th>ニックネーム</th>
        <th>メーカー（ロゴ）</th>
        <th>メーカー（社名）</th>
        <th>発売日</th>
        <th>OSバージョン(発売時点）</th>
        <th>UserAgent(発売時点）</th>
        <th>UserAgent（機種判別用）</th>
        <th>通信方式</th>
        <th>上り通信速度</th>
        <th>下り通信速度</th>
        <th>その他の通信方式</th>
        <th>上り通信速度（その他）</th>
        <th>下り通信速度（その他）</th>
        <th>プロセッサ</th>
        <th>RAM</th>
        <th>ROM</th>
        <th>質量[g]</th>
        <th>画面サイズ（インチ）</th>
        <th>ディスプレイ種別</th>
        <th>画面解像度（縦×横）</th>
        <th>液晶最大表示色数</th>
        <th>メインカメラ</th>
        <th>サブカメラ</th>
        <th>ハードウェアキー</th>
        <th>Wi-Fi規格</th>
        <th>Bluetooth Ver.</th>
        <th>テザリング</th>
        <th>赤外線</th>
        <th>GPS</th>
        <th>電子コンパス</th>
        <th>Felica</th>
        <th>NFC</th>
        <th>非接触充電（ワイヤレス給電/おくだけ充電）</th>
        <th>ワンセグ</th>
        <th>マルチメディア放送対応（モバキャス）</th>
        <th>4D</th>
        <th>防水</th>
        <th>データ更新日</th>
        <th>備考</th>
        <th>搭載ブラウザ情報 Android標準</th>
        <th>搭載ブラウザ情報 Chrome</th>
        <th>搭載ブラウザ情報 その他ブラウザ</th>
    </tr>
    <tr>
    <tbody>
        @foreach($devices as $device)
        <tr>
        <td>{{ $device->id }}</td>
        <td>{{ $device->model_name }}</td>
        <td>{{ $device->share }}</td>
        <td>{{ $device->career }}</td>
        <td>{{ $device->nickname }}</td>
        <td>{{ $device->maker_logo }}</td>
        <td>{{ $device->maker_name }}</td>
        <td>{{ $device->release_date }}</td>
        <td>{{ $device->os_ver }}</td>
        <td>{{ $device->useragent_at_release }}</td>
        <td>{{ $device->useragent_for_model }}</td>
        <td>{{ $device->comm_method }}</td>
        <td>{{ $device->comm_speed_upload }}</td>
        <td>{{ $device->comm_speed_download }}</td>
        <td>{{ $device->other_comm_methods }}</td>
        <td>{{ $device->othe_comm_speed_upload }}</td>
        <td>{{ $device->othe_comm_speed_download }}</td>
        <td>{{ $device->processor }}</td>
        <td>{{ $device->ram }}</td>
        <td>{{ $device->rom }}</td>
        <td>{{ $device->mass }}</td>
        <td>{{ $device->screen_size_inch }}</td>
        <td>{{ $device->display_type }}</td>
        <td>{{ $device->screen_resolution }}</td>
        <td>{{ $device->max_color_display }}</td>
        <td>{{ $device->main_camera }}</td>
        <td>{{ $device->sub_camera }}</td>
        <td>{{ $device->hardware_key }}</td>
        <td>{{ $device->wifi_standard }}</td>
        <td>{{ $device->bluetooth_ver }}</td>
        <td>{{ $device->tethering }}</td>
        <td>{{ $device->infrared }}</td>
        <td>{{ $device->gps }}</td>
        <td>{{ $device->electronic_compass }}</td>
        <td>{{ $device->felica }}</td>
        <td>{{ $device->nfc }}</td>
        <td>{{ $device->non_contact_charging }}</td>
        <td>{{ $device->one_seg }}</td>
        <td>{{ $device->multimedia_broadcast }}</td>
        <td>{{ $device->four_dim }}</td>
        <td>{{ $device->waterproof }}</td>
        <td>{{ $device->data_update_date }}</td>
        <td>{{ $device->remarks }}</td>
        <td>{{ $device->browser_info_android_standard }}</td>
        <td>{{ $device->browser_info_chrome }}</td>
        <td>{{ $device->browser_info_other_browsers }}</td>
        </tr>
        @endforeach
    </tbody>
    </tr>
    </table>
    </div>
</body>
</html>