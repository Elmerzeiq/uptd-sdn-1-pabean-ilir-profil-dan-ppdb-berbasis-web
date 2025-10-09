@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Kepala sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create List</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Data</h6>

                    <form action="{{ route('guru.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                           <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP Guru" value="{{ old('nip') }}">
                            @error('nip')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Guru" value="{{ old('nama') }}">
                            @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Tambahkan Field Upload Gambar -->
                        <div class="form-group">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan Guru" value="{{ old('jabatan') }}">
                            @error('jabatan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sambutan" class="form-label">Sambutan</label>
                            <textarea class="form-control ckeditor" id="sambutan" name="sambutan">{{ old('sambutan') }}</textarea>
                            @error('sambutan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Upload Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <br>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Create Data</button>
                            <a href="{{ route('guru.index') }}" class="btn btn-danger">Batal</a>
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
