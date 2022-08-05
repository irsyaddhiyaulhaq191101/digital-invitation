<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'day' => 'Rabu',
        'year' => '2022',
        'mount' => 'August',
        'date' => '10',
        'time' => '10:00',
        'alamat' => 'Kubang Alun-Alun Rt. 002 Rw. 003 Ds. Trunamanggala Kec. Cimalaka Kab. Sumedang',
    ]);
});
