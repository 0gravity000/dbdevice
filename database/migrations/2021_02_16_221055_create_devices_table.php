<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->double('share',12,10);
            $table->string('career');
            $table->string('nickname');
            $table->string('maker_logo');
            $table->string('maker_name');
            $table->date('release_date');
            $table->string('os_ver');
            $table->string('useragent_at_release');
            $table->string('useragent_for_model');
            $table->string('comm_method');
            $table->string('comm_speed_upload');
            $table->string('comm_speed_download');
            $table->string('other_comm_methods');
            $table->string('othe_comm_speed_upload');
            $table->string('othe_comm_speed_download');
            $table->string('processor');
            $table->string('ram');
            $table->string('rom');
            $table->string('mass');
            $table->string('screen_size_inch');
            $table->string('display_type');
            $table->string('screen_resolution');
            $table->string('max_color_display');
            $table->string('main_camera');
            $table->string('sub_camera');
            $table->string('hardware_key');
            $table->string('wifi_standard');
            $table->string('bluetooth_ver');
            $table->string('tethering');
            $table->string('infrared');
            $table->string('gps');
            $table->string('electronic_compass');
            $table->string('felica');
            $table->string('nfc');
            $table->string('non_contact_charging');
            $table->string('one_seg');
            $table->string('multimedia_broadcast');
            $table->string('4d');
            $table->string('waterproof');
            $table->date('data_update_date');
            $table->string('remarks');
            $table->string('browser_info_android_standard');
            $table->string('browser_info_chrome');
            $table->string('browser_info_other_browsers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
