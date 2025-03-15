<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Encoders\AutoEncoder;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        $datas = Layanan::filter($request->all())->orderBy('nama')->paginate(10);
        return view('admin.layanan.index', compact('datas'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'image_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'deskripsi' => 'required',
            ]);

            $request['uuid'] = (string) \Str::uuid();

            // Handle icon upload
            if ($request->hasFile('image_1')) {
                try {
                    $iconFile = $request->file('image_1');
                    $iconName = \Str::uuid() . '_' . $iconFile->getClientOriginalName();

                    // Process and compress image
                    $image = Image::read($iconFile);
                    $compressedImage = $image->scaleDown(1080)->encode(new AutoEncoder(quality: 10));

                    // Save to storage
                    \Storage::disk('public')->put(
                        'layanan/' . $iconName,
                        $compressedImage->toString()
                    );

                    // Prepare data for database
                    $request['icon'] = 'layanan/' . $iconName;
                } catch (\Exception $e) {
                    \Log::error('Error storing layanan icon: ' . $e->getMessage());
                    throw $e;
                }
            }

            // Handle image upload
            if ($request->hasFile('image_2')) {
                try {
                    $imageFile = $request->file('image_2');
                    $imageName = \Str::uuid() . '_' . $imageFile->getClientOriginalName();

                    // Process and compress image
                    $image = Image::read($imageFile);
                    $compressedImage = $image->scaleDown(1080)->encode(new AutoEncoder(quality: 10));

                    // Save to storage
                    \Storage::disk('public')->put(
                        'layanan/' . $imageName,
                        $compressedImage->toString()
                    );

                    // Prepare data for database
                    $request['image'] = 'layanan/' . $imageName;

                } catch (\Exception $e) {
                    \Log::error('Error storing layanan icon: ' . $e->getMessage());
                    throw $e;
                }
            }

            $layanan = Layanan::create($request->except('image_1', 'image_2'));
            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan'], 201);
        } catch (\Exception $e) {
            \Log::error('Error in LayananController@store: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'layanan_id' => 'required|exists:services,id',
                'nama' => 'required',
                'image_1' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'image_2' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'deskripsi' => 'required',
            ]);

            $layanan = Layanan::find($request->layanan_id);

            // Handle icon upload if new image is provided
            if ($request->hasFile('image_1')) {
                try {
                    // Delete old image
                    if ($layanan->icon) {
                        \Storage::disk('public')->delete($layanan->icon);
                    }

                    $iconFile = $request->file('image_1');
                    $iconName = \Str::uuid() . '_' . $iconFile->getClientOriginalName();

                    // Process and compress image
                    $image = Image::read($iconFile);
                    $compressedImage = $image->scaleDown(1080)->encode(new AutoEncoder(quality: 10));

                    // Save to storage
                    \Storage::disk('public')->put(
                        'layanan/' . $iconName,
                        $compressedImage->toString()
                    );

                    $request['icon'] = 'layanan/' . $iconName;
                } catch (\Exception $e) {
                    \Log::error('Error updating layanan icon: ' . $e->getMessage());
                    throw $e;
                }
            }

            if ($request->hasFile('image_2')) {
                try {
                    // Delete old image
                    if ($layanan->image) {
                        \Storage::disk('public')->delete($layanan->image);
                    }

                    $imageFile = $request->file('image_2');
                    $imageName = \Str::uuid() . '_' . $imageFile->getClientOriginalName();

                    // Process and compress image
                    $image = Image::read($imageFile);
                    $compressedImage = $image->scaleDown(1080)->encode(new AutoEncoder(quality: 10));

                    // Save to storage
                    \Storage::disk('public')->put(
                        'layanan/' . $imageName,
                        $compressedImage->toString()
                    );

                    $request['image'] = 'layanan/' . $imageName;
                } catch (\Exception $e) {
                    \Log::error('Error updating layanan icon: ' . $e->getMessage());
                    throw $e;
                }
            }

            $layanan->update($request->except(['layanan_id', 'image_1', 'image_2']));
            return response()->json(['success' => true, 'message' => 'Data berhasil diupdate']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $layanan = Layanan::find($id);

            // Delete image&icon file if exists
            if ($layanan->icon) {
                \Storage::disk('public')->delete($layanan->icon);
            }

            if ($layanan->image) {
                \Storage::disk('public')->delete($layanan->image);
            }

            $layanan->delete();
            return response()->json(['success' => true, 'message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan'], 400);
        }
    }
}
