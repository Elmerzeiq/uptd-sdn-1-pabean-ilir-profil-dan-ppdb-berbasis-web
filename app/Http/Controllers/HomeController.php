<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Staff;
use App\Models\Gallery;
use App\Models\Berita;
use App\Models\Ekskul;
use App\Models\Akademik;
use App\Models\Guru;
use App\Models\Ekskul_detail;
use App\Models\Kalender;
use App\Models\Pengumuman;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $profil = Profil::first();
        $staffs = Staff::all();
        $akademiks = Akademik::all();
        $gallery = Gallery::all();
        $beritas = Berita::latest()->paginate(8);
        $ekskul = Ekskul::all();
        $ekskul_detail = Ekskul_detail::all();
        $kalender = Kalender::all();
        return view('home.index', compact('profil', 'staffs', 'gallery', 'akademiks', 'beritas', 'ekskul', 'ekskul_detail', 'kalender'));
    }

    public function contact()
    {
        $profil = Profil::first();
        return view('home.contact', compact('profil'));
    }

    public function about()
    {
        $profil = Profil::first();
        return view('home.about', compact('profil'));
    }
    public function kepalasekolah()
    {
        $staffs = Staff::all();
        $guru = Guru::first(); // Add this line to get the first Guru
        return view('home.kepalasekolah', compact('guru', 'staffs')); // Pass $guru to the view
    }

    public function teacher()
    {
        $staffs = Staff::all();
        return view('home.teacher', compact('staffs'));
    }

    public function staffhome()
    {
        $staffs = Staff::all();
        return view('home.staff', compact('staffs'));
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('home.gallery', compact('gallery'));
    }

    public function akademik()
    {
        $akademik = Akademik::all();
        return view('home.akademik', compact('akademik'));
    }

    public function ekstrakurikuler()
    {
        $ekskul = Ekskul::all();
        $ekskul_detail = Ekskul_detail::all();
        return view('home.ekstrakurikuler', compact('ekskul', 'ekskul_detail'));
    }

    public function blog()
    {
        $beritas = Berita::latest()->paginate(8);
        return view('home.blog', compact('beritas'));
    }

    public function kalenderakademik()
    {
        $kalender = Kalender::all();

        return view('home.kalenderakademik', compact('kalender'));
    }

    public function ppbdinfo()
    {
        $pengumuman = Pengumuman::where('kategori', 'eksternal')->latest()->get();
        return view('home.ppbdinfo', compact('pengumuman'));
    }

    public function cetak()
    {
       
        // Jika Anda ingin menampilkan view dengan data formulir
        return view('home.cetak_biodata');
    }
}
