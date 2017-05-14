<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Отобразить главную страницу
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('content-page.mainpage');
    }
}
