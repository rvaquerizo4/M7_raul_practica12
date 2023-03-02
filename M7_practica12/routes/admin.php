<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middleware'=>['adb']],function(){
    Route::get('articulos', [ControladorAdmin::class, 'articulos']) -> name('articulosAlias');
});

Route::group(['middleware'=>['adb']],function(){
    Route::get('clientes', [ControladorAdmin::class, 'clientes']) -> name('clientesAlias');
});

Route::group(['middleware'=>['adb']],function(){
    Route::get('facturacion', [ControladorAdmin::class, 'facturacion']) -> name('facturacionAlias');
});

Route::group(['middleware'=>['adb']],function(){
    Route::get('contabilidad', [ControladorAdmin::class, 'contabilidad']) -> name('contabilidadAlias');
});

