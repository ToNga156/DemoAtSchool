<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerVidu3 extends Controller
{
    public function vidu3() {
        $title="hello";
        $decription="Chào cậu";
        return view('vidu3')->with(['title'=>$title, 'decription' =>$decription]);
    }
}
