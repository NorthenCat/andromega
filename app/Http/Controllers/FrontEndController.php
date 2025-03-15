<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingWeb;


class FrontEndController extends Controller
{
    private $informationWeb;
    public function __construct()
    {
        $this->informationWeb = SettingWeb::first();
        view()->share('informationWeb', $this->informationWeb);
    }
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
