<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PaketInternet;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        $datas = PaketInternet::filter($request->all())->orderBy('nama_paket')->paginate(15);
        return view('admin.paketInternet.index', compact('datas'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'tipe_paket' => 'required',
                'nama_paket' => 'required',
                'kecepatan' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
            ]);
            $request['uuid'] = (string) \Str::uuid();
            PaketInternet::create($request->all());
            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'paket_id' => 'required|exists:paket_internet,id',
                'tipe_paket' => 'required',
                'nama_paket' => 'required',
                'kecepatan' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
            ]);

            $data = PaketInternet::find($request->paket_id);
            $data->update($request->except('paket_id'));
            return response()->json(['success' => true, 'message' => 'Data berhasil diupdate']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan']);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $data = PaketInternet::find($id);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan']);
        }
    }
}
