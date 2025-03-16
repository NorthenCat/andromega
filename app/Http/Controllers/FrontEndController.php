<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Layanan;
use App\Models\PaketInternet;
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
        $paket = PaketInternet::orderBy('harga', 'asc')->take(3)->get();
        $layanan = Layanan::orderBy('nama', 'asc')->get();

        return view('LandingPage', compact('paket', 'layanan'));
    }

    public function paket()
    {
        $paket = PaketInternet::orderBy('harga', 'asc')->get();
        return view('PaketLayananPage', compact('paket'));
    }

    public function service()
    {
        $layanan = Layanan::orderBy(\DB::raw("CASE WHEN nama LIKE '%ISP%' THEN 0 ELSE 1 END"))
            ->orderBy('nama', 'asc')
            ->get();
        return view('ServiceSolutionPage', compact('layanan'));
    }

    public function faq()
    {
        return view('FaqPage');
    }

    public function searchFAQ(Request $request)
    {
        try {
            $data = FAQ::filter($request->all())->get();

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Database error occurred',
                'error' => $e->getMessage()
            ], 500);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function contactUs()
    {
        return view('ContactUsPage');
    }
}
