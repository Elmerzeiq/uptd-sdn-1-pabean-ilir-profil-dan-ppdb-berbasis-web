@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Tambah Berita</h6>

                    <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                            @error('judul')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control ckeditor" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea class="form-control ckeditor" id="isi" name="isi">{{ old('isi') }}</textarea>
                            @error('isi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                value="{{ old('tanggal') }}">
                            @error('tanggal')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar Berita</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <br>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Tambah Berita</button>
                            <a href="{{ route('berita.index') }}" class="btn btn-danger">Batal</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    CKEDITOR.replace('deskripsi');
    CKEDITOR.replace('isi');
</script>

