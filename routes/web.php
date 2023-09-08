<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;


Route::group(['prefix' => 'admin'], function () { Voyager::routes(); });

Route::get('/', function (){ return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function (){
    Route::get('/', [GeneralController::class, 'index'])->name('index');
    Route::get('/about-us', [GeneralController::class, 'about'])->name('about');

    Route::get('/our-projects', [GeneralController::class, 'projects'])->name('projects');
    Route::get('/our-projects/{slug}', [GeneralController::class, 'singleProject'])->name('singleProject');

    Route::get('/contact-us', [GeneralController::class, 'contact'])->name('contact');

    Route::get('/news/{slug}', [GeneralController::class, 'singleNews'])->name('singleNews');

    Route::get('/video-cv', [GeneralController::class, 'cv'])->name('cv');
    Route::post('/video-cv-upload', [GeneralController::class, 'cv_upload'])->name('cv_upload');


    Route::post('/send-message', [GeneralController::class, 'sendMessage'])->name('sendMessage');
    Route::post('/subscribers', [GeneralController::class, 'subscribers'])->name('subscribers');
});