<?php

namespace App\Http\Controllers;

use App\Models\Ekskul_detail;
use Illuminate\Http\Request;

class EkskulDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ekskul_details = Ekskul_detail::all();
        return view('admin.ekskul_detail.index', compact('ekskul_details'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ekskul_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

        Ekskul_detail::create($data);
        return redirect()->route('ekskul.index')->with('success', 'Gallery item has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekskul_detail $ekskul_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekskul_detail $ekskul_detail)
    {
        return view('admin.ekskul_detail.edit', compact('ekskul_detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekskul_detail $ekskul_detail)
    {
        $data = $request->validate([
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:1024',
            'kategori' => 'required|string|max:2000', // Diubah dari integer menjadi string
        ]);

        if ($request->has('image')) {
            $destination = public_path('uploads/images/' . $ekskul_detail->image);

            if (file_exists($destination)) {
                unlink($destination);
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $ekskul_detail->update($data);
        return redirect()->route('ekskul_detail.index')->with('success', 'Ekskul_detail item has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekskul_detail $ekskul_detail)
    {
        if ($ekskul_detail->image) {
            $destination = public_path('uploads/images/' . $ekskul_detail->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
        }

        $ekskul_detail->delete();
        return back()->with('success', 'Ekskul_detail item has been deleted!');
    }
}
