<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekskuls = Ekskul::all();
        return view('admin.ekskul.index', compact('ekskuls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ekskul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Proses upload file gambar
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        // Menyimpan data ekskul baru ke database
        Ekskul::create($data);
        return redirect()->route('ekskul.index')->with('success', 'Ekskul has been created!');
    }

    /**
     * Display the specified resource.
     */ public function show($id)
    {
        $ekskul = Ekskul::findOrFail($id); // Mengambil satu objek
        $relatedEkskul = Ekskul::where('id', '!=', $id)->latest()->limit(3)->get(); // Koleksi data terkait
        $galeri = Ekskul::all(); // Semua data galeri untuk looping

        return view('home.ekstrakurikuler', compact('ekskul', 'relatedEkskul', 'galeri'));
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekskul $ekskul)
    {
        return view('admin.ekskul.edit', compact('ekskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekskul $ekskul)
    {
        // Validasi input
        $data = $request->validate([
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:1024',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Proses update file gambar jika ada
        if ($request->has('image')) {
            $destination = public_path('uploads/images/' . $ekskul->image);

            // Hapus gambar lama
            if (file_exists($destination)) {
                unlink($destination);
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        // Update data ekskul di database
        $ekskul->update($data);
        return redirect()->route('ekskul.index')->with('success', 'Ekskul has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekskul $ekskul)
    {
        // Hapus gambar jika ada
        if ($ekskul->image) {
            $destination = public_path('uploads/images/' . $ekskul->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
        }

        // Hapus data ekskul dari database
        $ekskul->delete();
        return back()->with('success', 'Ekskul has been deleted!');
    }
}
