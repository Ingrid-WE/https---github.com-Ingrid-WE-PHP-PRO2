<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lampor;

class WebController extends Controller
{
    function lampor(){
        $lampor = Lampor::where('id',[1]) -> get();
        return view('lamp', ["lampor" => $lampor]);
    }

    function index(){
        $index = Lampor::get();
        return view('index', ["index" => $index]);
    }

    function bordslampa(){
        $bordslampa = Lampor::where('id',[1]) -> get();
        return view('bordslampa', ["bordslampa" => $bordslampa]);
    }

    function tacklampa(){
        $tacklampa = Lampor::where('id',[3]) -> get();
        return view('tacklampa', ["tacklampa" => $tacklampa]);
    }
    
    function golvlampa(){
        $golvlampa = Lampor::where('id',[2]) -> get();
        return view('golvlampa', ["golvlampa" => $golvlampa]);
    }
}

