<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middleware'=>['adb']],function(){
    Route::get('articulos', [ControladorAdmin::class, 'articulos']);
});

Route::group(['middleware'=>['adb']],function(){
    Route::get('clientes', [ControladorAdmin::class, 'clientes']);
});

Route::group(['middleware'=>['adb']],function(){
    Route::get('facturacion', [ControladorAdmin::class, 'facturacion']);
});

Route::group(['middleware'=>['adb']],function(){
    Route::get('contabilidad', [ControladorAdmin::class, 'contabilidad']);
});