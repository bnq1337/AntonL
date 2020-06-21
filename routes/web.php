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

Route::get ('/index','apicontroller@indexAction');
Route::get ('/airzoom','apicontroller@airzoomAction');
Route::get ('/akkaunt','apicontroller@akkauntAction');
Route::get ('/asics','apicontroller@asicsAction');
Route::get ('/botinki','apicontroller@botinkiAction');
Route::get ('/canada','apicontroller@canadaAction');
Route::get ('/hhkurtka','apicontroller@hhkurtkaAction');
Route::get ('/korzina','apicontroller@korzinaAction');
Route::get ('/nb','apicontroller@nbAction');
Route::get ('/nikekurtka','apicontroller@nikekurtkaAction');
Route::get ('/obuv','apicontroller@obuvAction');
Route::get ('/odejda','apicontroller@odejdaAction');
Route::get ('/onas','apicontroller@onasAction');
Route::get ('/rasprodaja','apicontroller@rasprodajaAction');
Route::get ('/rednike','apicontroller@rednikeAction');
Route::get ('/reg','apicontroller@regAction');
Route::get ('/shapka','apicontroller@shapkaAction');
Route::get ('/shapka2','apicontroller@shapka2Action');
Route::get ('/stussykurtka','apicontroller@stussykurtkaAction');
Route::get ('/uspeshno','apicontroller@uspeshnoAction');
Route::get ('/vhod','apicontroller@vhodAction');