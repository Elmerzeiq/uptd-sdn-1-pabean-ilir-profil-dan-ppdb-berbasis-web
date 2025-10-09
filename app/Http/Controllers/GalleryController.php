<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }
// 
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
            'kategori' => 'required|string|max:2000', // Diubah dari integer menjadi string
        ]);

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        Gallery::create($data);
        return redirect()->route('gallery.index')->with('success', 'Gallery item has been created!');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:1024',
            'kategori' => 'required|string|max:2000', // Diubah dari integer menjadi string
        ]);

        if ($request->has('image')) {
            $destination = public_path('uploads/images/' . $gallery->image);

            if (file_exists($destination)) {
                unlink($destination);
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $gallery->update($data);
        return redirect()->route('gallery.index')->with('success', 'Gallery item has been updated!');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            $destination = public_path('uploads/images/' . $gallery->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
        }

        $gallery->delete();
        return back()->with('success', 'Gallery item has been deleted!');
    }
}
