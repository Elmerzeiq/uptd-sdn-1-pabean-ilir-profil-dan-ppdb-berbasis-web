@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('profil.index') }}">Profil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Profil</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Profil</h6>

                    <form action="{{ route('profil.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <textarea class="form-control ckeditor" id="visi" name="visi">{{ old('visi') }}</textarea>
                            @error('visi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <textarea class="form-control ckeditor" id="misi" name="misi">{{ old('misi') }}</textarea>
                            @error('misi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Tambahkan Field Upload Gambar -->
                        <div class="form-group">
                            <label for="image">Upload Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jml_siswa">Jumlah Siswa</label>
                            <input type="number" class="form-control" id="jml_siswa" name="jml_siswa"
                                value="{{ old('jml_siswa') }}">
                            @error('jml_siswa')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jml_guru">Jumlah Guru</label>
                            <input type="number" class="form-control" id="jml_guru" name="jml_guru"
                                value="{{ old('jml_guru') }}">
                            @error('jml_guru')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jml_staff">Jumlah Staff</label>
                            <input type="number" class="form-control" id="jml_staff" name="jml_staff"
                                value="{{ old('jml_staff') }}">
                            @error('jml_staff')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                            @error('alamat')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kontak1">Kontak 1</label>
                            <input type="text" class="form-control" id="kontak1" name="kontak1"
                                value="{{ old('kontak1') }}">
                            @error('kontak1')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kontak2">Kontak 2 (Optional)</label>
                            <input type="text" class="form-control" id="kontak2" name="kontak2"
                                value="{{ old('kontak2') }}">
                            @error('kontak2')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <br>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Create Profil</button>
                            <a href="{{ route('profil.index') }}" class="btn btn-danger">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

<!-- Script CKEditor -->
<script>
    CKEDITOR.replace('visi');
    CKEDITOR.replace('misi');
    CKEDITOR.replace('alamat');
</script>
