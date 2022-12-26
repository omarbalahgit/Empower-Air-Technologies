<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
public function showWhoware(){
    return view('About.whoWare');
}
public function showWhatwedo(){
    return view('About.whatWedo');
}
public function showVision(){
    return view('About.vision');
}
public function showFactories(){
    return view('About.factories');
}
}
