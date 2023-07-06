<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(int $p1,int $p2){
        echo $p1.'+'.$p2.'='.($p1+$p2);
    }
}
