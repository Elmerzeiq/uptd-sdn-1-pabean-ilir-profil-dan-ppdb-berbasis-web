<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:300',
            'image' => 'required|mimes:jpg,jpeg,png|max:1024',
            'deskripsi' => 'required|string|max:5000',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images'), $imageName);
            $data['image'] = $imageName;
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        $relatedBerita = Berita::where('id', '!=', $berita->id)->latest()
            ->limit(3)
            ->get();

        return view('home.berita_detail', compact('berita', 'relatedBerita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $beritum)
    {
        return view('admin.berita.edit', compact('beritum')); // Edit form for the berita
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $beritum)
    {
        // Validate incoming data
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle image replacement
        if ($request->hasFile('image')) {
            if ($beritum->image && file_exists(public_path('uploads/images/' . $beritum->image))) {
                unlink(public_path('uploads/images/' . $beritum->image)); // Delete old image
            }
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images'), $imageName);
            $beritum->image = $imageName;
        }

        // Update berita data
        $beritum->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {
        // Delete associated image
        if ($beritum->image && file_exists(public_path('uploads/images/' . $beritum->image))) {
            unlink(public_path('uploads/images/' . $beritum->image)); // Delete image file
        }

        // Delete berita entry
        $beritum->delete();

        return redirect()->route('berita.index')->with('success', 'Berita deleted successfully!');
    }
}
