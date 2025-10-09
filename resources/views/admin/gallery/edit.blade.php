@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Gallery</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Gallery</h6>

                    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <small>Leave blank to keep the current image.</small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                @foreach(['Kegiatan', 'Ekstrakurikuler', 'Prestasi'] as $kategori)
                                <option value="{{ $kategori }}" {{ $gallery->kategori == $kategori ? 'selected' : '' }}>
                                    {{ $kategori }}
                                </option>
                                @endforeach
                            </select>
                            @error('kategori')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
