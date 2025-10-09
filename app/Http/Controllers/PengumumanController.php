<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumumans = Pengumuman::all();
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:300',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'kategori' => 'required|string',
        ]);


        Pengumuman::create($data);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        // return view('siswa.pengumuman', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        // Validate incoming data
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'kategori' => 'required|string',
        ]);



        // Update berita data
        $pengumuman->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        // Delete berita entry
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman deleted successfully!');
    }
}
