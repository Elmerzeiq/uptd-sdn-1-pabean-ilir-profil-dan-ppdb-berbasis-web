<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_formulir = Formulir::all();
        return view('admin.formulir.index', compact('data_formulir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.formulir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'          => 'min:5',
            'nama_panggilan'        => 'min:3',
            'tempat_lahir'          => 'min:5',
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tinggi_badan'          => 'min:2|numeric',
            'berat_badan'           => 'min:2|numeric',
            'anak_ke'               => 'max:2|numeric',
            'asal_tkra'             => 'min:5',
            'alamat_tkra'           => 'min:5',

            'nama_ayah'             => 'min:5',
            'tempat_lahir_ayah'     => 'min:5',
            'alamat_ayah'           => 'min:6',

            'nama_ibu'             => 'min:5',
            'tempat_lahir_ibu'     => 'min:5',
            'alamat_ibu'           => 'min:6',
        ]);
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }
        $formulir = new Formulir();
        $formulir->nama_lengkap           = $request->input('nama_lengkap');
        $formulir->nama_panggilan         = $request->input('nama_panggilan');
        $formulir->tempat_lahir           = $request->input('tempat_lahir');
        $formulir->tgl_lahir              = $request->input('tgl_lahir');
        $formulir->jenis_kelamin          = $request->input('jenis_kelamin');
        $formulir->tinggi_badan           = $request->input('tinggi_badan');
        $formulir->berat_badan            = $request->input('berat_badan');
        $formulir->golongan_darah         = $request->input('golongan_darah');
        $formulir->penyakit_pernah_derita = $request->input('penyakit_pernah_derita');
        $formulir->agama                  = $request->input('agama');
        $formulir->kewarganegaraan        = $request->input('kewarganegaraan');
        $formulir->tinggal_bersama        = $request->input('tinggal_bersama');
        $formulir->anak_ke                = $request->input('anak_ke');
        $formulir->saudara_kandung        = $request->input('saudara_kandung');
        $formulir->saudara_tiri           = $request->input('saudara_tiri');
        $formulir->saudara_angkat         = $request->input('saudara_angkat');
        $formulir->bahasa_sehari          = $request->input('bahasa_sehari');
        $formulir->jarak_rumah_kesekolah  = $request->input('jarak_rumah_kesekolah');
        $formulir->asal_tkra              = $request->input('asal_tkra');
        $formulir->alamat_tkra            = $request->input('alamat_tkra');
        $formulir->tanggal_sttb           = $request->input('tanggal_sttb');
        $formulir->nomor_sttb             = $request->input('nomor_sttb');
        $formulir->kesulitan_di_tkra      = $request->input('kesulitan_di_tkra');
        $formulir->bakat_minat_anak       = $request->input('bakat_minat_anak');
        $formulir->prestasi_belajar       = $request->input('prestasi_belajar');

        $formulir->nama_ayah              = $request->input('nama_ayah');
        $formulir->tempat_lahir_ayah      = $request->input('tempat_lahir_ayah');
        $formulir->tgl_lahir_ayah         = $request->input('tgl_lahir_ayah');
        $formulir->agama_ayah             = $request->input('agama_ayah');
        $formulir->kewarganegaraan_ayah   = $request->input('kewarganegaraan_ayah');
        $formulir->pendidikan_ayah        = $request->input('pendidikan_ayah');
        $formulir->pekerjaan_ayah         = $request->input('pekerjaan_ayah');
        $formulir->instansi_kerja_ayah    = $request->input('instansi_kerja_ayah');
        $formulir->jabatan_kerja_ayah     = $request->input('jabatan_kerja_ayah');
        $formulir->alamat_kantor_ayah     = $request->input('alamat_kantor_ayah');
        $formulir->lama_kerja_ayah_perhari = $request->input('lama_kerja_ayah_perhari');
        $formulir->penghasilan_ayah       = $request->input('penghasilan_ayah');
        $formulir->alamat_ayah            = $request->input('alamat_ayah');
        $formulir->no_hp_ayah             = $request->input('no_hp_ayah');
        $formulir->hubungan_ayah          = $request->input('hubungan_ayah');

        $formulir->nama_ibu              = $request->input('nama_ibu');
        $formulir->tempat_lahir_ibu      = $request->input('tempat_lahir_ibu');
        $formulir->tgl_lahir_ibu         = $request->input('tgl_lahir_ibu');
        $formulir->agama_ibu             = $request->input('agama_ibu');
        $formulir->kewarganegaraan_ibu   = $request->input('kewarganegaraan_ibu');
        $formulir->pendidikan_ibu        = $request->input('pendidikan_ibu');
        $formulir->pekerjaan_ibu         = $request->input('pekerjaan_ibu');
        $formulir->instansi_kerja_ibu    = $request->input('instansi_kerja_ibu');
        $formulir->jabatan_kerja_ibu     = $request->input('jabatan_kerja_ibu');
        $formulir->alamat_kantor_ibu     = $request->input('alamat_kantor_ibu');
        $formulir->lama_kerja_ibu_perhari = $request->input('lama_kerja_ibu_perhari');
        $formulir->penghasilan_ibu       = $request->input('penghasilan_ibu');
        $formulir->alamat_ibu            = $request->input('alamat_ibu');
        $formulir->no_hp_ibu             = $request->input('no_hp_ibu');
        $formulir->hubungan_ibu          = $request->input('hubungan_ibu');

        $formulir->save();

        return redirect()->route('siswa.formulir.edit', $formulir->id)->with('success', 'Formulir berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulir $formulir)
    {
        // return view('siswa.formulir.show', compact('formulir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulir $formulir)
    {
        return view('siswa.formulir.edit', compact('formulir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulir $formulir)
    {
        $request->validate([
            'nama_lengkap'          => 'min:5',
            'nama_panggilan'        => 'min:3',
            'tempat_lahir'          => 'min:5',
            'tinggi_badan'          => 'min:2|numeric',
            'berat_badan'           => 'min:2|numeric',
            'anak_ke'               => 'max:2|numeric',
            'asal_tkra'             => 'min:5',
            'alamat_tkra'           => 'min:5',

            'nama_ayah'             => 'min:5',
            'tempat_lahir_ayah'     => 'min:5',
            'alamat_ayah'           => 'min:6',

            'nama_ibu'              => 'min:5',
            'tempat_lahir_ibu'      => 'min:5',
            'alamat_ibu'            => 'min:6',
        ]);

        if ($request->has('image')) {
            $destination = public_path('uploads/images/' . $formulir->image);

            if (file_exists($destination)) {
                unlink($destination);
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $formulir->update($request->all());
        return redirect()->route('admin.formulir.index')->with('success', 'Formulir berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulir $formulir)
    {
        if ($formulir->image) {
            $destination = public_path('uploads/images/' . $formulir->image);

            if (file_exists($destination)) {
                unlink($destination);
            }
        }
        $formulir->delete();
        return redirect()->route('admin.formulir.index')->with('success', 'Formulir berhasil dihapus!');
    }
}

