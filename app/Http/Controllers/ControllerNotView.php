<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNotView extends Controller
{
    public function hello() {
        return 'NotView';
    }
}
