<?php

use Illuminate\Support\Facades\Route;
use Knowproinsighter\Sendingmails\SendingMailController;

Route::get('sendmail', [SendingMailController::class, 'index']);
Route::post('sendingmail', [SendingMailController::class, 'sendEmail'])->name('usemail');
