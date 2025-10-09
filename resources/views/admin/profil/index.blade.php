@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('profil.index') }}">Profil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil List</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Profil Sekolah</h6>

                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('profil.create') }}" class="btn btn-warning">Tambah Profil</a>
                    </div>

                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" style="width: 100%; table-layout: auto;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%;">No</th>
                                    <th scope="col" style="width: 10%;">Visi</th>
                                    <th scope="col" style="width: 20%;">Misi</th>
                                    <th scope="col" style="width: 10%;">Jumlah Siswa</th>
                                    <th scope="col" style="width: 10%;">Jumlah Guru</th>
                                    <th scope="col" style="width: 10%;">Jumlah Staff</th>
                                    <th scope="col" style="width: 15%;">Alamat</th>
                                    <th scope="col" style="width: 10%;">Kontak 1</th>
                                    <th scope="col" style="width: 10%;">Kontak 2</th>
                                    <th scope="col" style="width: 10%;">Email</th>
                                    <th scope="col" style="width: 10%;">Image</th>
                                    <th scope="col" style="width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profils as $index => $profil)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{!! $profil->visi !!}</td>
                                    <td>{!! $profil->misi !!}</td>
                                    <td>{{ $profil->jml_siswa }}</td>
                                    <td>{{ $profil->jml_guru }}</td>
                                    <td>{{ $profil->jml_staff }}</td>
                                    <td>{{ $profil->alamat }}</td>
                                    <td>{{ $profil->kontak1 }}</td>
                                    <td>{{ $profil->kontak2 }}</td>
                                    <td>{{ $profil->email }}</td>
                                    <td>
                                        @if($profil->image)
                                        <img src="{{ asset('uploads/images/' . $profil->image) }}" alt="Image of {{ $profil->nama }}"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        @else
                                        No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('profil.destroy', $profil->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data?');" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

