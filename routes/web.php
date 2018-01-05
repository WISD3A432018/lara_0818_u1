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


use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    $data = [‘name’ => ‘張三’, ‘content’=> "test mail", ];
    Mail::send(‘email.test’, $data, function($message){
        $message->subject('Laravel 5 Mail');
        $message->to('img21326@gmail.com', '張三');
        $message->from('test@ncut.edu.tw', 'netadmin');
    });

    return view('welcome');
});
