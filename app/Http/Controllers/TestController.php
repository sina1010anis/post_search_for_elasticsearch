<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function index()
    {

        // Number currency Error ==> "intl"---------------------------
        // $currency = Number::currency(1000, in: 'USD');
        // return $currency;

        // Str doesntContain OK --------------------------------------
        // $str = 'My favorite food is Pizza';
        // dd(Str::doesntContain($str, 'M'));

        // Str inlineMarkdown OK -------------------------------------
        // dd(Str::inlineMarkdown('My favorite food is Pizza'));
        // dd('My favorite food is Pizza');

    }
}
