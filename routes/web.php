<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\DB;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MailController;
use App\Mail\EmailSend;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('email', [EmailController::class, 'index']);

Route::get('send', [MailController::class, 'sendEmail']);

Route::get('email/create', function () {
    return view('contact.create');
});

Route::post('email/create', [EmailController::class, 'store'])->name('add-email');

Route::get('/{lang?}', function ($lang) {
    App::setLocale($lang);
    return view('index');
})->name('/');

