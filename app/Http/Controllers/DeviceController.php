<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class DeviceController extends Controller
{
    //
    public function index()
    {
        $devices = Device::all();
        /*
        foreach ($codes as $code) {
            dd($code);
        }
        */
        return view('top', compact('devices'));
    }

    //
    public function reload()
    {
        // 全件削除する idのオートインクリメントもリセットする
        Device::truncate();

        /*
        $file = new \SplFileObject(storage_path('app\public\sentei_20201225.csv'));
        $file->setFlags(
            \SplFileObject::READ_CSV |          // CSV 列として行を読み込む
            \SplFileObject::DROP_NEW_LINE    // 行末の改行を読み飛ばす
        );
        */
        //ToDo:サーバーで実行するとエラーになる。要修正
        $lines = file(storage_path('app\public\sentei_20201225.csv'));

        // CSVファイルをループ
        $i = 0;
        foreach ($lines as $line) {
            // 文字コードを UTF-8 へ変換
            //mb_convert_variables('UTF-8', 'SJIS-win', $line);

            $column = explode(',',$line);

            //ヘッダー行以外を読み込み
            if ($i !== 0) {
                $device = new Device;
                //dd($column);

                //$device->id;
                $device->model_name = $column[1];
                $device->share = $column[2];
                $device->career = $column[3];
                $device->nickname = $column[4];
                $device->maker_logo = $column[5];
                $device->maker_name = $column[6];
                $device->release_date = $column[7];
                $device->os_ver = $column[8];
                $device->useragent_at_release = $column[9];
                $device->useragent_for_model = $column[10];
                $device->comm_method = $column[11];
                $device->comm_speed_upload = $column[12];
                $device->comm_speed_download = $column[13];
                $device->other_comm_methods = $column[14];
                $device->othe_comm_speed_upload = $column[15];
                $device->othe_comm_speed_download = $column[16];
                $device->processor = $column[17];
                $device->ram = $column[18];
                $device->rom = $column[19];
                $device->mass = $column[20];
                $device->screen_size_inch = $column[21];
                $device->display_type = $column[22];
                $device->screen_resolution = $column[23];
                $device->max_color_display = $column[24];
                $device->main_camera = $column[25];
                $device->sub_camera = $column[26];
                $device->hardware_key = $column[27];
                $device->wifi_standard = $column[28];
                $device->bluetooth_ver = $column[29];
                $device->tethering = $column[30];
                $device->infrared = $column[31];
                $device->gps = $column[32];
                $device->electronic_compass = $column[33];
                $device->felica = $column[34];
                $device->nfc = $column[35];
                $device->non_contact_charging = $column[36];
                $device->one_seg = $column[37];
                $device->multimedia_broadcast = $column[38];
                $device->four_dim = $column[39];
                $device->waterproof = $column[40];
                $device->koushin_date = $column[41];
                $device->remarks = $column[42];
                $device->browser_info_android_standard = $column[43];
                $device->browser_info_chrome = $column[44];
                $device->browser_info_other_browsers = $column[45];
                
                //dd($device);
                $device->save();

            }

            $i++;
        }

        return redirect('/top');
    }

}
