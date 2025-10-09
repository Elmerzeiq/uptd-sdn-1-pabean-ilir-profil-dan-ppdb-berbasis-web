@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Berita</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Daftar Berita</h6>
                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm"
                            style="float:right;">Tambah
                            Berita</a>
                    </div>
                    <div class="mt-3 table-responsive">
                        <table class="table" style="width: 100%; table-layout: auto;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%;">No</th>
                                    <th scope="col" style="width: 25%;">Judul</th>
                                    <th scope="col" style="width: 25%;">Deskripsi</th>
                                    <th scope="col" style="width: 10%;">Isi</th>
                                    <!-- Kolom Deskripsi Ditambahkan -->
                                    <th scope="col" style="width: 20%;">Gambar</th>
                                    <th scope="col" style="width: 20%;">Tanggal</th>
                                    <th scope="col" style="width: 15%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($beritas as $index => $berita)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $berita->judul }}</td>
                                    <td>{{ strip_tags($berita->deskripsi) }}</td>
                                    <td>{{ strip_tags($berita->isi) }}</td>
                                    <!-- Menampilkan deskripsi tanpa tag HTML -->
                                    <td>
                                        @if($berita->image)
                                        <img src="{{ asset('uploads/images/' . $berita->image) }}" alt="Berita Image"
                                            style="width: 100px; height: 100px; object-fit: cover; border-radius: 10px;">
                                        @else
                                        No Image
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('berita.edit', $berita->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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

