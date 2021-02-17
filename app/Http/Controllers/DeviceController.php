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
}
