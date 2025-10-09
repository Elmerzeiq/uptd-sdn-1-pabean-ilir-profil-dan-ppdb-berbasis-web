@extends('siswa.siswa_dashboard')

@section('siswa')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('siswa.formulir') }}">Formulir</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulir Pendaftaran</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">Formulir Pendaftaran</h6>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('formulir.store') }}" method="post" enctype="multipart/form-data">
                        <h3><i class="my-1 nav-icon fas fa-user-graduate btn-sm-1"></i> Data Peserta Didik</h3>
                        <hr>
                        @csrf
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap <i><b>(sesuai Akta Kelahiran)</b></i>
                                <b>*</b></label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                value="{{old('nama_lengkap')}}">
                            @error('nama_lengkap')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nama_panggilan">Nama Panggilan <b>*</b></label>
                            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan"
                                value="{{old('nama_panggilan')}}">
                            @error('nama_panggilan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir <b>*</b></label>
                            <input value="{{old('tempat_lahir')}}" name="tempat_lahir" type="text" class="form-control"
                                id="tempat_lahir" placeholder="Tempat Lahir" required>
                            @error('tempat_lahir')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir <b>*</b></label>
                            <input value="{{old('tgl_lahir')}}" name="tgl_lahir" type="date" class="form-control"
                                id="tgl_lahir" required>
                            @error('tgl_lahir')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin <b>*</b></label>
                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tinggi_badan">Tinggi Badan <b>*</b></label>
                            <div class="input-group">
                                <input value="{{old('tinggi_badan')}}" name="tinggi_badan" type="text"
                                    class="form-control" id="tinggi_badan" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">.cm</span>
                                </div>
                            </div>
                            @error('tinggi_badan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="berat_badan">Berat Badan <b>*</b></label>
                            <div class="input-group">
                                <input value="{{old('berat_badan')}}" name="berat_badan" type="text"
                                    class="form-control" id="berat_badan" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">.kg</span>
                                </div>
                            </div>
                            @error('berat_badan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="golongan_darah">Golongan Darah <i><b>(biarkan kosong jika tidak
                                        tahu)</b></i></label>
                            <select name="golongan_darah" class="form-control" id="golongan_darah">
                                <option value="">-- Pilih Golongan Darah --</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                            @error('golongan_darah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="penyakit_pernah_derita">Penyakit Yang Pernah Diderita <i><b>(biarkan kosong jika
                                        tidak
                                        pernah menderita penyakit apapun)</b></i></label>
                            <input value="{{old('penyakit_pernah_derita')}}" name="penyakit_pernah_derita" type="text"
                                class="form-control" id="penyakit_pernah_derita"
                                placeholder="Penyakit Yang Pernah Diderita">
                            @error('penyakit_pernah_derita')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="agama">Agama <b>*</b></label>
                            <select name="agama" class="form-control" id="agama" required>
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen ">Kristen </option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan <b>*</b></label>
                            <select name="kewarganegaraan" class="form-control" id="kewarganegaraan" required>
                                <option value="">-- Pilih Kewarganegaraan --</option>
                                <option value="WNI">WNI</option>
                                <option value="WNI Keturunan">WNI Keturunan</option>
                            </select>
                            @error('kewarganegaraan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tinggal_bersama">Tinggal Bersama <b>*</b></label>
                            <select name="tinggal_bersama" class="form-control" id="tinggal_bersama" required>
                                <option value="">-- Pilih Data --</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Wali">Wali</option>
                            </select>
                            @error('tinggal_bersama')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="anak_ke">Anak Ke <i><b>(sesuai Akta Kelahiran)</b></i> <b>*</b></label>
                            <input value="{{old('anak_ke')}}" name="anak_ke" type="text" class="form-control"
                                id="anak_ke" placeholder="Anak Ke" required>
                            @error('anak_ke')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="saudara_kandung">Jumlah Saudara Kandung<i><b> (biarkan kosong jika tidak
                                        punya)</b></i></label>
                            <input value="{{old('saudara_kandung')}}" name="saudara_kandung" type="text"
                                class="form-control" id="saudara_kandung" placeholder="Jumlah Saudara Kandung">
                            @error('saudara_kandung')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="saudara_tiri">Jumlah Saudara Tiri<i><b> (biarkan kosong jika tidak
                                        punya)</b></i></label>
                            <input value="{{old('saudara_tiri')}}" name="saudara_tiri" type="text" class="form-control"
                                id="saudara_tiri" placeholder="Jumlah Saudara Tiri">
                            @error('saudara_tiri')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="saudara_angkat">Jumlah Saudara Angkat<i><b> (biarkan kosong jika tidak
                                        punya)</b></i></label>
                            <input value="{{old('saudara_angkat')}}" name="saudara_angkat" type="text"
                                class="form-control" id="saudara_angkat" placeholder="Jumlah Saudara Angkat">
                            @error('saudara_angkat')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="bahasa_sehari">Bahasa Sehari-Hari Dirumah <b>*</b></label>
                            <select name="bahasa_sehari" class="form-control" id="bahasa_sehari" required>
                                <option value="">-- Pilih Bahasa --</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Jawa Krama">Jawa Krama</option>
                                <option value="Jawa Ngoko">Jawa Ngoko</option>
                                <option value="Lainnya...">Lainnya...</option>
                            </select>
                            @error('bahasa_sehari')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="jarak_rumah_kesekolah">Jarak Rumah Ke Sekolah <b>*</b></label>
                            <select name="jarak_rumah_kesekolah" class="form-control" id="jarak_rumah_kesekolah"
                                required>
                                <option value="">-- Pilih Jarak --</option>
                                <option value="Kurang Dari 1 km">Kurang Dari 1 km</option>
                                <option value="2 km">2 km</option>
                                <option value="3 km">3 km</option>
                                <option value="4 km">4 km</option>
                                <option value="5 km">5 km</option>
                                <option value="Lebih Dari 5 km">Lebih Dari 5 km</option>
                            </select>
                            @error('jarak_rumah_kesekolah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="asal_tkra">Asal TK / RA <i><b>(isikan nama TK/RA asal)</b></i> <b>*</b></label>
                            <input value="{{old('asal_tkra')}}" name="asal_tkra" type="text" class="form-control"
                                id="asal_tkra" placeholder="Asal TK / RA" required>
                            @error('asal_tkra')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="alamat_tkra">Alamat TK / RA <i><b>(isikan alamat lengkap TK/RA asal)</b></i>
                                <b>*</b></label>
                            <input value="{{old('alamat_tkra')}}" name="alamat_tkra" type="text" class="form-control"
                                id="alamat_tkra" placeholder="Alamat TK / RA" required>
                            @error('alamat_tkra')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tanggal_sttb">Tanggal Surat Tanda Tamat Belajar/STTB/Ijazah<i><b> (biarkan
                                        kosong jika
                                        tidak/belum punya)</b></i></label>
                            <input value="{{old('tanggal_sttb')}}" name="tanggal_sttb" type="date" class="form-control"
                                id="tanggal_sttb">
                            @error('tanggal_sttb')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nomor_sttb">Nomor Surat Tanda Tamat Belajar/STTB/Ijazah <i><b> (biarkan kosong
                                        jika
                                        tidak/belum punya)</b></i></label>
                            <input value="{{old('nomor_sttb')}}" name="nomor_sttb" type="text" class="form-control"
                                id="nomor_sttb" placeholder="Nomor Surat Tanda Tamat Belajar/STTB/Ijazah">
                            @error('nomor_sttb')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kesulitan_di_tkra">Kesulitan Yang Dialami Di TK/RA <i><b> (biarkan kosong jika
                                        tidak
                                        punya)</b></i></label>
                            <textarea name="kesulitan_di_tkra" class="form-control ckeditor" id="kesulitan_di_tkra"
                                rows="2"
                                placeholder="Kesulitan Yang Dialami Di TK/RA">{{old('kesulitan_di_tkra')}}</textarea>
                            @error('kesulitan_di_tkra')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="bakat_minat_anak">Bakat dan Minat Anak <b>*</b></label>
                            <textarea name="bakat_minat_anak" class="form-control ckeditor" id="bakat_minat_anak"
                                rows="2" placeholder="Bakat dan Minat Anak"
                                required>{{old('bakat_minat_anak')}}</textarea>
                            @error('bakat_minat_anak')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <hr>
                        <h3><i class="my-1 nav-icon fas fa-user-friends btn-sm-1"></i> Data Keluarga</h3>
                        <hr>
                        <h4><i class="nav-icon fas fa-male"></i> Identitas Ayah</h4>
                        <hr>
                        <div class="form-group">
                            <label for="nama_ayah">Nama Lengkap Ayah <i><b>(sesuai Akta Kelahiran Peserta Didik)</b></i>
                                <b>*</b></label>
                            <input value="{{old('nama_ayah')}}" name="nama_ayah" type="text" class="form-control"
                                id="nama_ayah" placeholder="Nama Lengkap Ayah" required>
                            @error('nama_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="tempat_lahir_ayah">Tempat Lahir Ayah<b>*</b></label>
                            <input value="{{old('tempat_lahir_ayah')}}" name="tempat_lahir_ayah" type="text"
                                class="form-control" id="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah" required>
                            @error('tempat_lahir_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tgl_lahir_ayah">Tanggal Lahir Ayah<b>*</b></label>
                            <input value="{{old('tgl_lahir_ayah')}}" name="tgl_lahir_ayah" type="date"
                                class="form-control" id="tgl_lahir_ayah" required>
                            @error('tgl_lahir_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="agama_ayah">Agama Ayah <b>*</b></label>
                            <select name="agama_ayah" class="form-control" id="agama_ayah" required>
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen ">Kristen </option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                            @error('agama_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kewarganegaraan_ayah">Kewarganegaraan Ayah <b>*</b></label>
                            <select name="kewarganegaraan_ayah" class="form-control" id="kewarganegaraan_ayah" required>
                                <option value="">-- Pilih Kewarganegaraan --</option>
                                <option value="WNI">WNI (Warga Negara Indonesia)</option>
                                <option value="WNA">WNA (Warga Negara Asing)</option>
                            </select>
                            @error('kewarganegaraan_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pendidikan_ayah">Pendidikan Terakhir Ayah <b>*</b></label>
                            <select name="pendidikan_ayah" class="form-control" id="pendidikan_ayah" required>
                                <option value="">-- Pilih Pendidikan Ayah --</option>
                                <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            @error('pendidikan_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pekerjaan_ayah">Pekerjaan Ayah <b>*</b></label>
                            <select name="pekerjaan_ayah" class="form-control" id="pekerjaan_ayah" required>
                                <option value="">-- Pilih Pekerjaan Ayah --</option>
                                <option value="Petani/Pekebun">Petani/Pekebun</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Sopir">Sopir</option>
                                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                <option value="Guru">Guru</option>
                                <option value="Lainnya....">Lainnya....</option>
                            </select>
                            @error('pekerjaan_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="instansi_kerja_ayah">Nama Instansi Tempat Kerja Ayah <i><b> (biarkan kosong jika
                                        ayah
                                        tidak bekerja di instansi)</b></i></label>
                            <input value="{{old('instansi_kerja_ayah')}}" name="instansi_kerja_ayah" type="text"
                                class="form-control" id="instansi_kerja_ayah"
                                placeholder="Nama Instansi Tempat Kerja Ayah">
                            @error('instansi_kerja_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="jabatan_kerja_ayah">Jabatan Kerja Ayah <i><b> (biarkan kosong jika ayah tidak
                                        bekerja di
                                        instansi)</b></i></label>
                            <input value="{{old('jabatan_kerja_ayah')}}" name="jabatan_kerja_ayah" type="text"
                                class="form-control" id="jabatan_kerja_ayah" placeholder="Jabatan Kerja Ayah">
                            @error('jabatan_kerja_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="alamat_kantor_ayah">Alamat Kantor Ayah <i><b> (biarkan kosong jika ayah tidak
                                        bekerja di
                                        instansi)</b></i></label>
                            <input value="{{old('alamat_kantor_ayah')}}" name="alamat_kantor_ayah" type="text"
                                class="form-control" id="alamat_kantor_ayah" placeholder="Alamat Kantor Ayah">
                            @error('alamat_kantor_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="lama_kerja_ayah_perhari">Lama Kerja Ayah Perhari <b>*</b></label>
                            <select name="lama_kerja_ayah_perhari" class="form-control" id="lama_kerja_ayah_perhari"
                                required>
                                <option value="">-- Pilih Data --</option>
                                <option value="Seharian">Seharian</option>
                                <option value="Kurang Dari 8 jam">Kurang Dari 8 jam</option>
                                <option value="8 jam">8 jam</option>
                                <option value="Lebih Dari 8 jam">Lebih Dari 8 jam</option>
                            </select>
                            @error('lama_kerja_ayah_perhari')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="penghasilan_ayah">Penghasilan Ayah Perbulan <b>*</b></label>
                            <select name="penghasilan_ayah" class="form-control" id="penghasilan_ayah" required>
                                <option value="">-- Pilih Data --</option>
                                <option value="Kurang dari Rp.500.000,-">Kurang dari Rp.500.000,-</option>
                                <option value="Rp.500.000,- s/d Rp.999.000,-">Rp.500.000,- s/d Rp.999.000,-</option>
                                <option value="Rp.1.000.000,- s/d Rp.1.999.000,-">Rp.1.000.000,- s/d Rp.1.999.000,-
                                </option>
                                <option value="Rp.2.000.000,- s/d Rp.2.999.000,-">Rp.2.000.000,- s/d Rp.2.999.000,-
                                </option>
                                <option value="Lebih dari Rp.3.000.000,-">Lebih dari Rp.3.000.000,-</option>
                            </select>
                            @error('penghasilan_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="alamat_ayah">Alamat Rumah Ayah <i><b> (isikan alamat lengkap)</b></i>
                                <b>*</b></label>
                            <input value="{{old('alamat_ayah')}}" name="alamat_ayah" type="text" class="form-control"
                                id="alamat_ayah" placeholder="Alamat Rumah Ayah" required>
                            @error('alamat_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="no_hp_ayah">Nomor HP Ayah <i><b> (biarkan kosong jika tidak
                                        punya)</b></i></label>
                            <input value="{{old('no_hp_ayah')}}" name="no_hp_ayah" type="text" class="form-control"
                                id="no_hp_ayah" placeholder="Nomor HP Ayah">
                            @error('no_hp_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="hubungan_ayah">Hubungan Ayah Dengan Peserta Didik <b>*</b></label>
                            <select name="hubungan_ayah" class="form-control" id="hubungan_ayah" required>
                                <option value="">-- Pilih Data --</option>
                                <option value="Ayah Kandung">Ayah Kandung</option>
                                <option value="Ayah Tiri">Ayah Tiri</option>
                                <option value="Ayah Angkat">Ayah Angkat</option>
                                <option value="Lainnya....">Lainnya....</option>

                            </select>
                            @error('hubungan_ayah')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <hr>
                        <h4><i class="nav-icon fas fa-female"></i> Identitas Ibu</h4>
                        <hr>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Lengkap Ibu <i><b>(sesuai Akta Kelahiran Peserta Didik)</b></i>
                                <b>*</b></label>
                            <input value="{{old('nama_ibu')}}" name="nama_ibu" type="text" class="form-control"
                                id="nama_ibu" placeholder="Nama Lengkap Ibu" required>
                            @error('nama_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tempat_lahir_ibu">Tempat Lahir Ibu<b>*</b></label>
                            <input value="{{old('tempat_lahir_ibu')}}" name="tempat_lahir_ibu" type="text"
                                class="form-control" id="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu" required>
                            @error('tempat_lahir_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tgl_lahir_ibu">Tanggal Lahir Ibu<b>*</b></label>
                            <input value="{{old('tgl_lahir_ibu')}}" name="tgl_lahir_ibu" type="date"
                                class="form-control" id="tgl_lahir_ibu" required>
                            @error('tgl_lahir_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="agama_ibu">Agama Ibu <b>*</b></label>
                            <select name="agama_ibu" class="form-control" id="agama_ibu" required>
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen ">Kristen </option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                            @error('agama_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            abel for="kewarganegaraan_ibu">Kewarganegaraan Ibu <b>*</b></label>
                            <select name="kewarganegaraan_ibu" class="form-control" id="kewarganegaraan_ibu" required>
                                <option value="">-- Pilih Kewarganegaraan --</option>
                                <option value="WNI">WNI (Warga Negara Indonesia)</option>
                                <option value="WNA">WNA (Warga Negara Asing)</option>
                            </select>
                            @error('kewarganegaraan_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pendidikan_ibu">Pendidikan Terakhir Ibu <b>*</b></label>
                            <select name="pendidikan_ibu" class="form-control" id="pendidikan_ibu" required>
                                <option value="">-- Pilih Pendidikan Ibu --</option>
                                <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            @error('pendidikan_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu <b>*</b></label>
                            <select name="pekerjaan_ibu" class="form-control" id="pekerjaan_ibu" required>
                                <option value="">-- Pilih Pekerjaan ibu --</option>
                                <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                <option value="Petani/Pekebun">Petani/Pekebun</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Sopir">Sopir</option>
                                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                <option value="Guru">Guru</option>
                                <option value="Lainnya....">Lainnya....</option>
                            </select>
                            @error('pekerjaan_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="instansi_kerja_ibu">Nama Instansi Tempat Kerja Ibu <i><b> (biarkan kosong jika
                                        ibu tidak
                                        bekerja di instansi)</b></i></label>
                            <input value="{{old('instansi_kerja_ibu')}}" name="instansi_kerja_ibu" type="text"
                                class="form-control" id="instansi_kerja_ibu"
                                placeholder="Nama Instansi Tempat Kerja Ibu">
                            @error('instansi_kerja_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="jabatan_kerja_ibu">Jabatan Kerja Ibu <i><b> (biarkan kosong jika ibu tidak
                                        bekerja di
                                        instansi)</b></i></label>
                            <input value="{{old('jabatan_kerja_ibu')}}" name="jabatan_kerja_ibu" type="text"
                                class="form-control" id="jabatan_kerja_ibu" placeholder="Jabatan Kerja ibu">
                            @error('jabatan_kerja_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="alamat_kantor_ibu">Alamat Kantor Ibu <i><b> (biarkan kosong jika ibu tidak
                                        bekerja di
                                        instansi)</b></i></label>
                            <input value="{{old('alamat_kantor_ibu')}}" name="alamat_kantor_ibu" type="text"
                                class="form-control" id="alamat_kantor_ibu" placeholder="Alamat Kantor ibu">
                            @error('alamat_kantor_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="lama_kerja_ibu_perhari">Lama Kerja Ibu Perhari <b>*</b></label>
                            <select name="lama_kerja_ibu_perhari" class="form-control" id="lama_kerja_ibu_perhari"
                                required>
                                <option value="">-- Pilih Data --</option>
                                <option value="Seharian">Seharian</option>
                                <option value="Kurang Dari 8 jam">Kurang Dari 8 jam</option>
                                <option value="8 jam">8 jam</option>
                                <option value="Lebih Dari 8 jam">Lebih Dari 8 jam</option>
                            </select>
                            @error('lama_kerja_ibu_perhari')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="penghasilan_ibu">Penghasilan Ibu Perbulan <b>*</b></label>
                            <select name="penghasilan_ibu" class="form-control" id="penghasilan_ibu" required>
                                <option value="">-- Pilih Data --</option>
                                <option value="Kurang dari Rp.500.000,-">Kurang dari Rp.500.000,-</option>
                                <option value="Rp.500.000,- s/d Rp.999.000,-">Rp.500.000,- s/d Rp.999.000,-</option>
                                <option value="Rp.1.000.000,- s/d Rp.1.999.000,-">Rp.1.000.000,- s/d Rp.1.999.000,-
                                </option>
                                <option value="Rp.2.000.000,- s/d Rp.2.999.000,-">Rp.2.000.000,- s/d Rp.2.999.000,-
                                </option>
                                <option value="Lebih dari Rp.3.000.000,-">Lebih dari Rp.3.000.000,-</option>
                            </select>
                            @error('penghasilan_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="alamat_ibu">Alamat Rumah Ibu <i><b> (isikan alamat lengkap)</b></i>
                                <b>*</b></label>
                            <input value="{{old('alamat_ibu')}}" name="alamat_ibu" type="text" class="form-control"
                                id="alamat_ibu" placeholder="Alamat Rumah ibu" required>
                            @error('alamat_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="no_hp_ibu">Nomor HP ibu <i><b> (biarkan kosong jika tidak punya)</b></i></label>
                            <input value="{{old('no_hp_ibu')}}" name="no_hp_ibu" type="text" class="form-control"
                                id="no_hp_ibu" placeholder="Nomor HP ibu">
                            @error('no_hp_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="hubungan_ibu">Hubungan Ibu Dengan Peserta Didik <b>*</b></label>
                            <select name="hubungan_ibu" class="form-control" id="hubungan_ibu" required>
                                <option value="">-- Pilih Data --</option>
                                <option value="Ibu Kandung">Ibu Kandung</option>
                                <option value="Ibu Tiri">Ibu Tiri</option>
                                <option value="Ibu Angkat">Ibu Angkat</option>
                                <option value="Lainnya....">Lainnya....</option>

                            </select>
                            @error('hubungan_ibu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <br>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                            <a class="btn btn-danger btn-sm" href="{{ route('siswa.dashboard') }}" role="button"><i
                                    class="fas fa-undo"></i> BATAL</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>



    </div>
</div>


@endsection
