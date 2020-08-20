<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    // Worksを表示
    public function getTop(){
        return view('top');
    }
}
