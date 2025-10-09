@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('ekskul.index') }}">Ekstrakurikuler</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Ekstrakurikuler</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Tambah Ekstrakurikuler</h6>

                    <form action="{{ route('ekskul.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
                            @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control ckeditor @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea class="form-control ckeditor @error('isi') is-invalid @enderror" id="isi" name="isi" required>{{ old('isi') }}</textarea>
                            @error('isi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                            @error('tanggal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                    <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>

                        <br>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Tambah Ekstrakurikuler</button>
                            <a href="{{ route('ekskul.index') }}" class="btn btn-danger">Batal</a>
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

