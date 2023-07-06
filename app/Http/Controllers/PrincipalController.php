<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // Action do Controller
    public function index(){
        return view("site.principal");
    }
}
