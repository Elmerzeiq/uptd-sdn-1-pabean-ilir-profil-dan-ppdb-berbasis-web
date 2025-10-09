@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('ekskul_detail.index') }}">Ekstrakurikuler Detail</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Ekstrakurikuler Detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Ekstrakurikuler Detail</h6>

                    <form action="{{ route('ekskul_detail.update', $ekskul_detail->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if($ekskul_detail->image)
                                <img src="{{ asset('uploads/images/'.$ekskul_detail->image) }}" width="100">
                            @else
                                <p>No Image Available</p>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                @foreach(['pramuka', 'tari', 'futsal'] as $kategori)
                                <option value="{{ $kategori }}" {{ $ekskul_detail->kategori == $kategori ? 'selected' : '' }}>
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
                        <a href="{{ route('ekskul_detail.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

