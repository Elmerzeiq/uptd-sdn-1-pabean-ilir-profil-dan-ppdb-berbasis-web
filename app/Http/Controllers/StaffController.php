<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('admin.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $staffs = Staff::all();
        return view('admin.staff.create', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|max:300|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
            'jabatan' => 'required|string|max:2000',
            'kategori' => 'required|string|max:2000',
        ]);

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            // Upload photo to server
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $staff = Staff::create($data);
        // Redirect to staff list after successfully creating a staff
        return redirect()->route('staff.index')->with('success', "Staff {$staff->nama} has been created!");
    }



    /**
     * Display the specified resource.
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staff $staff)
    {
        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        // Validasi input
        $data = $request->validate([
            'nama' => 'required|string|max:300',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:1024',
            'jabatan' => 'required|string|max:2000',
            'kategori' => 'required|string|max:2000',

        ]);

        // Cek jika ada file gambar baru yang diunggah
        if ($request->has('image')) {
            // Cek gambar lama
            $destination = public_path('uploads/images/' . $staff->image);

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

        // Update data staff
        $staff->update($data);

        // Redirect ke halaman list staff dengan pesan sukses
        return redirect()->route('staff.index')->with('success', 'Staff has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        // Cek apakah staff memiliki gambar
        if ($staff->image) {
            $destination = 'uploads/images/' . $staff->image;

            // Cek apakah file gambar ada, lalu hapus file tersebut
            if (file_exists($destination)) {
                unlink($destination);
            }
        }

        // Hapus data staff dari database
        $staff->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Staff has been deleted!');
    }
}
