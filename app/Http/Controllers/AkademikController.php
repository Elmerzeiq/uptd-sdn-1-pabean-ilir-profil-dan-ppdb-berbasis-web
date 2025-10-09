<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akademik = Akademik::all();
        return view('admin.akademik.index', compact('akademik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        Akademik::create($data);

        return redirect()->route('akademik.index')->with('success', 'Akademik created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akademik $akademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akademik $akademik)
    {
        return view('admin.akademik.edit', compact('akademik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akademik $akademik)
    {
        $data =   $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $akademik->image = $imageName;
        }

        $akademik->judul = $request->judul;
        $akademik->isi = $request->isi;
        $akademik->save();
        if ($request->has('image')) {
            $destination = public_path('uploads/images/' . $akademik->image);

            if (file_exists($destination)) {
                unlink($destination);
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $akademik->update($data);
        return redirect()->route('akademik.index')->with('success', 'Akademik updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akademik $akademik)
    {
        if ($akademik->image) {
            $destination = public_path('uploads/images/' . $akademik->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
        }
        $akademik->delete();
        return redirect()->route('akademik.index')
            ->with('success', 'Akademik deleted successfully.');
    }
}
