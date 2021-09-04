<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    function langSwitch ($lang) {
        Session::PUT('lang' , $lang);
        return redirect()->back();
    }
}
