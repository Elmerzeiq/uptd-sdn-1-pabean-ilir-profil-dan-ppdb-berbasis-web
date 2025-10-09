<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\Profil;
use App\Models\Ekskul;
use App\Models\Akademik;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Formulir;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function adminDashboard(Request $request) {
        $profil = Profil::first();
        $jml_siswa = $profil ? $profil->jml_siswa : 0;
        $jml_guru = $profil ? $profil->jml_guru : 0;
        $jml_staff = $profil ? $profil->jml_staff : 0;
        $jml_ekskul = Ekskul::count();
        $kegiatan_terbaru = Berita::latest()->take(5)->get();
        $akademik_terbaru = Akademik::latest()->take(5)->get();
        $berita_terbaru = Berita::latest()->take(5)->get();
        $gallery_terbaru = Gallery::latest()->take(8)->get();

        return view('admin.index', compact('jml_siswa', 'jml_guru', 'jml_staff', 'jml_ekskul', 'kegiatan_terbaru', 'akademik_terbaru', 'berita_terbaru', 'gallery_terbaru'));
    }


    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }


    public function adminLogin(Request $request)
    {
        return view('admin.admin_login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')
        ->with('success', 'Registration successful! Please login.');
    }

    public function adminRegisterForm(Request $request)
    {
        return view('admin.admin_register');
    }


    public function indexFormulir()
    {
        // Menampilkan semua data formulir
        $formulirs = Formulir::all();
        return view('admin.formulir.index', compact('formulirs'));
    }

    public function editFormulir($id)
    {
        // Mengedit formulir berdasarkan ID
        $formulir = Formulir::findOrFail($id);
        return view('admin.formulir.edit', compact('formulir'));
    }

    public function updateFormulir(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            // Validasi lainnya sesuai kebutuhan
        ]);

        // Update data formulir
        $formulir = Formulir::findOrFail($id);
        $formulir->update($request->all());

        // Redirect ke halaman data formulir admin
        return redirect()->route('admin.formulir.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroyFormulir($id)
    {
        // Menghapus data formulir berdasarkan ID
        $formulir = Formulir::findOrFail($id);
        $formulir->delete();

        return redirect()->route('admin.formulir.index')->with('success', 'Data berhasil dihapus!');
    }
}
