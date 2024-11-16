<?php

use Illuminate\Support\Facades\Route;
// Подключение контролера
use App\Http\Controllers\mainController;

// Отображение главной страницы
Route::get('/', [mainController::class, "showMain"])->name("main");