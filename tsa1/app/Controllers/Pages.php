<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function landing()
    {
        return view('pages/landing');
    }

    public function about()
    {
        return view('pages/about');
    }
}