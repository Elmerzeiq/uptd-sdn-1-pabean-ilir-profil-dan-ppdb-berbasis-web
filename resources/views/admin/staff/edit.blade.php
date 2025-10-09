@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Staff</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Staff</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Staff</h6>

                    <form action="{{ route('staff.update', $staff->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $staff->nama }}">
                            @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="photo" name="image">
                            <br>
                            <img src="{{ asset('uploads/images/'.$staff->image) }}" alt="Staff Image" width="150"
                                height="150">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select class="form-control" id="jabatan" name="jabatan">
                                @foreach(['wali kelas 1', 'wali kelas 2', 'wali kelas 3A', 'wali kelas 3B', 'wali kelas
                                4', 'wali kelas 5', 'wali kelas 6', 'Guru Mata Pelajaran PAI','Penjaga Sekolah', 'Operator Sekolah'] as $jabatan)
                                <option value="{{ $jabatan }}" {{ $staff->jabatan == $jabatan ? 'selected' : '' }}>
                                    {{ $jabatan }}
                                </option>
                                @endforeach
                            </select>
                            @error('jabatan')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                @foreach(['guru', 'staff', 'Kepala sekolah'] as $kategori)
                                <option value="{{ $kategori }}" {{ $staff->kategori == $kategori ? 'selected' : '' }}>
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
                            <button type="submit" class="btn btn-primary">Update Staff</button>
                            <a href="{{ route('staff.index') }}" class="btn btn-danger">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
