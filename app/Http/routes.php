<?php

/*
|--------------------------------------------------------------------------
| Özel Script - Uygulama Rotaları
|--------------------------------------------------------------------------
|
| Osman YILMAZ 
| www.astald.com
*/


// Route::pattern('id', '[0-9]+');
Route::get('/', 'Astald\HomeController@index');
Route::controller('customer', 'Astald\CustomerController');
Route::controller('work', 'Astald\WorkController');
 