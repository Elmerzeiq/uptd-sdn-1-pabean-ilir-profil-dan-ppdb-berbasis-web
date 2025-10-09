<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profils = Profil::all();
        return view('admin.profil.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'visi' => 'required|string|max:2000',
            'misi' => 'required|string|max:2000',
            'jml_siswa' => 'required|integer',
            'jml_guru' => 'required|integer',
            'jml_staff' => 'required|integer',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:1024',
            'alamat' => 'required|string|max:500',
            'kontak1' => 'required|string|max:100',
            'kontak2' => 'nullable|string|max:100',
            'email' => 'required|email|max:100',
        ]);

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            // Upload photo to server
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $profil = Profil::create($data);
        // Redirect to profil list after successfully creating a profil
        return redirect()->route('profil.index')->with('success', "Profil has been created!"); // Update route
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        // Implement this method if you want to show a single profil
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        return view('admin.profil.edit', compact('profil')); // Update view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
    {
        $data = $request->validate([
            'visi' => 'required|string|max:2000',
            'misi' => 'required|string|max:2000',
            'jml_siswa' => 'required|integer',
            'jml_guru' => 'required|integer',
            'jml_staff' => 'required|integer',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:1024',
            'alamat' => 'required|string|max:500',
            'kontak1' => 'required|string|max:100',
            'kontak2' => 'nullable|string|max:100',
            'email' => 'required|email|max:100',
        ]);

        // Cek jika ada file gambar baru yang diunggah
        if ($request->has('image')) {
            // Cek gambar lama
            $destination = public_path('uploads/images/' . $profil->image);

            // Hapus gambar lama jika ada
            if (file_exists($destination)) {
                unlink($destination);
            }

            // Unggah gambar baru
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);

            // Simpan nama gambar baru di database
            $data['image'] = $imageName;
        }

        // Update data profil
        $profil->update($data);

        // Redirect ke halaman list profil dengan pesan sukses
        return redirect()->route('profil.index')->with('success', 'Profil has been updated!'); // Update route
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        if ($profil->image) {
            $destination = 'uploads/images/' . $profil->image;
            if (file_exists($destination)) {
                unlink($destination);
            }
        }

        $profil->delete();
        return back()->with('success', 'Profil has been deleted!'); // Update pesan
    }
}
