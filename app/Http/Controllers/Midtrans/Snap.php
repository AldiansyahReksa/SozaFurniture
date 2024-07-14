<?php
namespace App\Http\Controllers\Midtrans;

trait Snap {
    public static function getSnapToken($params)
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        return \Midtrans\Snap::getSnapToken($params);
    }
}
