<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function getIndex() {
        return view('shopee.parent');
    }
}
