<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use App\Models\Berita;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kalenders = Kalender::all();
        return view('admin.kalender.index', compact('kalenders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kalender.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:300',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'deskripsi' => 'required|string|max:5000',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images'), $imageName);
            $data['image'] = $imageName;
        }

        Kalender::create($data);

        return redirect()->route('kalender.index')->with('success', 'Kalender Akademik created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalender $kalender)
    {
        return view('admin.kalender.edit', compact('kalender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kalender $kalender)
    {
        // Validasi input
        $data = $request->validate([
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Proses update file gambar jika ada
        if ($request->has('image')) {
            $destination = public_path('uploads/images/' . $kalender->image);

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
        $kalender->update($data);
        return redirect()->route('kalender.index')->with('success', 'Kalender has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalender $kalender)
    {
        // Delete associated image
        if ($kalender->image && file_exists(public_path('uploads/images/' . $kalender->image))) {
            unlink(public_path('uploads/images/' . $kalender->image)); // Delete image file
        }

        // Delete berita entry
        $kalender->delete();

        return redirect()->route('kalender.index')->with('success', 'kalender deleted successfully!');
    }

    public function kalenderakademik()
    {
        $kalender = Kalender::all();


        return view('home.kalenderakademik', compact('kalender'));
    }
}

