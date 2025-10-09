@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Pengumuman</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Pengumuman</h6>
                    <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ $pengumuman->judul }}">
                            @error('judul')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea class="form-control ckeditor" id="isi" name="isi">{{ $pengumuman->isi }}</textarea>
                            @error('isi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                value="{{ $pengumuman->tanggal }}">
                            @error('tanggal')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                @foreach(['internal', 'eksternal'] as $kategori)
                                <option value="{{ $kategori }}" {{ $pengumuman->kategori == $kategori ? 'selected' : '' }}>
                                    {{ $kategori }}
                                </option>
                                @endforeach
                            </select>
                            @error('kategori')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <br>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Pengumuman</button>
                            <a href="{{ route('pengumuman.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    CKEDITOR.replace('deskripsi', {
        height: 300,
    });
    CKEDITOR.replace('isi', {
        height: 300,
    });
</script>
