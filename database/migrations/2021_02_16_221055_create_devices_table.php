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
            $table->string('share')->nullable();
            $table->string('career')->nullable();
            $table->string('nickname')->nullable();
            $table->string('maker_logo')->nullable();
            $table->string('maker_name')->nullable();
            $table->string('release_date')->nullable();
            $table->string('os_ver')->nullable();
            $table->string('useragent_at_release')->nullable();
            $table->string('useragent_for_model')->nullable();
            $table->string('comm_method')->nullable();
            $table->string('comm_speed_upload')->nullable();
            $table->string('comm_speed_download')->nullable();
            $table->string('other_comm_methods')->nullable();
            $table->string('othe_comm_speed_upload')->nullable();
            $table->string('othe_comm_speed_download')->nullable();
            $table->string('processor')->nullable();
            $table->string('ram')->nullable();
            $table->string('rom')->nullable();
            $table->string('mass')->nullable();
            $table->string('screen_size_inch')->nullable();
            $table->string('display_type')->nullable();
            $table->string('screen_resolution')->nullable();
            $table->string('max_color_display')->nullable();
            $table->string('main_camera')->nullable();
            $table->string('sub_camera')->nullable();
            $table->string('hardware_key')->nullable();
            $table->string('wifi_standard')->nullable();
            $table->string('bluetooth_ver')->nullable();
            $table->string('tethering')->nullable();
            $table->string('infrared')->nullable();
            $table->string('gps')->nullable();
            $table->string('electronic_compass')->nullable();
            $table->string('felica')->nullable();
            $table->string('nfc')->nullable();
            $table->string('non_contact_charging')->nullable();
            $table->string('one_seg')->nullable();
            $table->string('multimedia_broadcast')->nullable();
            $table->string('four_dim')->nullable();
            $table->string('waterproof')->nullable();
            $table->string('koushin_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('browser_info_android_standard')->nullable();
            $table->string('browser_info_chrome')->nullable();
            $table->string('browser_info_other_browsers')->nullable();
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
