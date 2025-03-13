<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SettingWeb;
use Illuminate\Http\Request;

class SettingWebController extends Controller
{
    public function index()
    {
        $data = SettingWeb::first();

        return view('admin.setting-web.index', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_website' => 'nullable',
                'email' => 'nullable',
                'telepon' => 'nullable',
                'alamat' => 'nullable',
                'contact_sales' => 'nullable',
                'contact_support' => 'nullable',
                'meta_author' => 'nullable',
                'meta_title' => 'nullable',
                'meta_description' => 'nullable',
                'meta_keyword' => 'nullable',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'icon' => 'nullable|file|max:2048',
            ]);



            $data = SettingWeb::first();

            if ($request->hasFile('icon')) {
                if ($data->favicon) {
                    \Storage::delete('public/assets/' . $data->favicon);
                }
                $request->file('icon')->storeAs('public/assets', 'favicon.ico');
                $request['favicon'] = 'assets/favicon.ico';
            }

            $data->update($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil disimpan',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
