<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    public function index()
    {
        $berkas = Berkas::all();
        return view('admin.berkas.index', compact('berkas'));
    }

    public function create()
    {
        return view('siswa.berkas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'akta_kelahiran' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kartu_keluarga' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ktp_orangtua' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kia' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ijazah_tk_paud' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kip_kps_kks' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $berkas = new Berkas();
        $berkas->nama = $request->nama;

        foreach (['akta_kelahiran', 'kartu_keluarga', 'ktp_orangtua', 'kia', 'ijazah_tk_paud', 'kip_kps_kks'] as $field) {
            if ($request->hasFile($field)) {
                $berkas->$field = $request->file($field)->store('uploads/berkas', 'public');
            }
        }

        $berkas->save();

        return redirect()->route('berkas.create')->with('success', 'Berkas berhasil ditambahkan');
    }

    public function edit(Berkas $berkas)
    {
        return view('siswa.berkas.edit', compact('berkas'));
    }

    public function update(Request $request, Berkas $berkas)
    {
        $request->validate([
            'nama' => 'required|string',
            'akta_kelahiran' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kartu_keluarga' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ktp_orangtua' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kia' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ijazah_tk_paud' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kip_kps_kks' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $berkas->nama = $request->nama;

        foreach (['akta_kelahiran', 'kartu_keluarga', 'ktp_orangtua', 'kia', 'ijazah_tk_paud', 'kip_kps_kks'] as $field) {
            if ($request->hasFile($field)) {
                Storage::disk('public')->delete($berkas->$field);
                $berkas->$field = $request->file($field)->store('uploads/images', 'public');
            }
        }

        $berkas->save();

        return redirect()->route('berkas.index')->with('success', 'Berkas berhasil diperbarui');
    }

    public function destroy(Berkas $berkas)
    {
        foreach (['akta_kelahiran', 'kartu_keluarga', 'ktp_orangtua', 'kia', 'ijazah_tk_paud', 'kip_kps_kks'] as $field) {
            Storage::disk('public')->delete($berkas->$field);
        }

        $berkas->delete();

        return redirect()->route('berkas.index')->with('success', 'Berkas berhasil dihapus');
    }
}
