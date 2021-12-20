<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getServicesURL($url) {
        $title = $url;
            return view('content.service', ['page'=>$title]);
    }

    public function getStartURL($url) {
        $title = $url;
            return view('content.'.$url, ['page'=>$title]);
    }
}
