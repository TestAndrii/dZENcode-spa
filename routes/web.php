<?php

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Notification::route('telegram',env('TELEGRAM_CHAT_ID_INFO'))->notify(new TelegramNotification);
Route::get('/', \App\Livewire\Welcome::class);





