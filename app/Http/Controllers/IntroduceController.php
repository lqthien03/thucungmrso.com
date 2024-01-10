<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    public function home(){
        return view('pages.introduce');
    }
}
