<?php

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
    return view('welcome');
});

Route::get("btc", function(){
    $posts= DB::connection('btc')->select("select * from pedido where idempresa = 47 and idpedido >= 90000");
    dd($posts);
    // var_dump($posts);
});
