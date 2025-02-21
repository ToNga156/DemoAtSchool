<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTong extends Controller
{
    public function tong()
    {
        return view('tong'); 
    }

    public function tinhTong(Request $request)
    {
        $a = $request->input('a', 0);
        $b = $request->input('b', 0);
        $sum = $a + $b;

        return view('tong', compact('a', 'b', 'sum')); 
    }
}
