<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videoes(){

        return view('frontend/page/videoes');
    }
}
