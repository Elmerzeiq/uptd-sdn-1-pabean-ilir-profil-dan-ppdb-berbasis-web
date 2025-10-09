@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Kepala Sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Data</h6>

                    <form action="{{ route('guru.update', $guru->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" value="{{ $guru->nip }}" placeholder="Masukkan NIP Guru">
                            @error('nip')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $guru->nama }}"
                                placeholder="Masukkan Nama Guru">
                            @error('jml_guru')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $guru->jabatan }}"
                                placeholder="Masukkan Jabatan Guru">
                            @error('jml_staff')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sambutan" class="form-label">Sambutan</label>
                            <textarea class="form-control ckeditor" id="sambutan" name="sambutan">{{ $guru->sambutan }}</textarea>
                            @error('misi')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if($guru->image)
                    <img src="{{ asset('uploads/images/' . $guru->image) }}" class="mt-2 img-thumbnail" alt="Image of {{ $guru->nama }}"
                        style="width: 100px; height: 100px; object-fit: cover;">
                    @else
                    No Image
                    @endif

                        <br>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Guru</button>
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
    CKEDITOR.replace('sambutan');

</script>
