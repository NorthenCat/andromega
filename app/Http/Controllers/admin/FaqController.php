<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $datas = FAQ::filter($request->all())->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.faq.index', compact('datas'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);

            FAQ::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil disimpan',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data gagal disimpan',
            ]);
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'faq_id' => 'required|exists:faq,id',
                'question' => 'required',
                'answer' => 'required',
            ]);

            $faq = FAQ::find($request->faq_id);
            $faq->update($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diubah',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data gagal diubah',
            ]);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $faq = FAQ::find($id);
            $faq->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data gagal dihapus',
            ]);
        }
    }
}
