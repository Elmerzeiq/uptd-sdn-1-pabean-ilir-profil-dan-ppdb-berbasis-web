@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('ekskul.index') }}">Ekstrakurikuler</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Ekstrakurikuler</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Ekstrakurikuler</h6>
                    <form action="{{ route('ekskul.update', $ekskul->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <br>
                            @if ($ekskul->image)
                            <img src="{{ asset('uploads/images/'.$ekskul->image) }}" width="100">
                            @else
                            <p>No Image Available</p>
                            @endif
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $ekskul->judul }}"
                                required>
                            @error('judul')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control ckeditor" id="deskripsi" name="deskripsi" rows="4"
                                required>{{ $ekskul->deskripsi }}</textarea>
                            @error('deskripsi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea class="form-control ckeditor" id="isi" name="isi" rows="4"
                                required>{{ $ekskul->isi }}</textarea>
                            @error('isi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                value="{{ $ekskul->tanggal }}" required>
                            @error('tanggal')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('ekskul.index') }}" class="btn btn-danger">Batal</a>
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

