<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;


use Illuminate\Http\Request;

class LanguageController extends Controller
{
     public function index($locale)
        {
            App::setLocale($locale);
            // store the locale in session so that the middleware can register it
            session()->put('locale', $locale);
            return redirect()->back();
        
        
    }
}

