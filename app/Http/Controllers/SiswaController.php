<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Pengumuman;
use App\Models\Formulir;
use Barryvdh\DomPDF\Facade\Pdf;

class SiswaController extends Controller
{

    public function siswaRegister(Request $request)
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

        return redirect()->route('siswa.login')
        ->with('success', 'Registration successful! Please login.');
    }

    public function siswalogin(Request $request)
    {
        return view('siswa.siswa_login');
    }

    public function siswaLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('siswa.login');
    }

    public function siswaRegisterForm()
    {
        // Logic untuk menampilkan form registrasi siswa
        return view('siswa.siswa_register');
    }

    public function createFormulir()
    {
        // Halaman pengisian formulir oleh siswa
        return view('siswa.formulir.create');
    }

    public function storeFormulir(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            // Validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data formulir ke database
        Formulir::create($request->all());

        // Redirect ke halaman sukses
        return redirect()->route('siswa.formulir.success')->with('success', 'Formulir berhasil disimpan!');
    }

    public function viewFormulir()
    {
        // Menampilkan formulir yang sudah diisi oleh siswa
        $formulirs = Formulir::all();
        return view('siswa.formulir.create', compact('formulirs'));
    }

    public function index()
    {

        return view('siswa.index') ;
    }

    public function cetak()
    {
        // Jika Anda ingin menampilkan view dengan data formulir
        return view('siswa.cetak_biodata');


    }

    public function siswaPengumuman()
    {
        $pengumuman = Pengumuman::where('kategori', 'internal')->latest()->get();
        return view('siswa.pengumuman', compact('pengumuman'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}

