@extends('siswa.siswa_dashboard')

@section('siswa')
<div class="container mt-4">
    <div class="shadow-lg card">
        <div class="text-white card-header bg-primary">
            <h4 class="mb-0">Tambah Berkas</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('berkas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Akta Kelahiran:</label>
                    <input type="file" name="akta_kelahiran" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kartu Keluarga:</label>
                    <input type="file" name="kartu_keluarga" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label">KTP Orang Tua:</label>
                    <input type="file" name="ktp_orangtua" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label">KIA:</label>
                    <input type="file" name="kia" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ijazah TK/PAUD (jika ada):</label>
                    <input type="file" name="ijazah_tk_paud" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label">KIP/KPS/KKS (jika ada):</label>
                    <input type="file" name="kip_kps_kks" class="form-control" accept="image/*">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('berkas.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
