<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    // Функция отображения главной страницы
    function showMain() {
        return view("main");
    }
}
