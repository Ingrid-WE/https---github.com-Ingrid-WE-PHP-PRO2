<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lampor;

class WebController extends Controller
{
    function lampor(){
        $lampor = Lampor::get();
        return view('lamp', ["lampor" => $lampor]);
    }
}
