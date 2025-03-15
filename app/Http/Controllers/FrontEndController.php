<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function landing()
    {
        return view('LandingPage');
    }

    public function paket()
    {
        return view('PaketLayananPage');
    }

    public function service()
    {
        return view('ServiceSolutionPage');
    }

    public function faq()
    {
        return view('FaqPage');
    }

    public function contactUs()
    {
        return view('ContactUsPage');
    }
}
