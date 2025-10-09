@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Pengumuman</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Daftar Pengumuman</h6>
                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('pengumuman.create') }}" class="btn btn-primary btn-sm"
                            style="float:right;">Tambah
                            Pengumuman</a>
                    </div>
                    <div class="mt-3 table-responsive">
                        <table class="table" style="width: 100%; table-layout: auto;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%;">No</th>
                                    <th scope="col" style="width: 25%;">Judul</th>
                                    <th scope="col" style="width: 10%;">Isi</th>
                                    <th scope="col" style="width: 20%;">Tanggal</th>
                                    <th scope="col" style="width: 10%;">Kategori</th>
                                    <th scope="col" style="width: 15%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengumumans as $index => $pengumuman)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $pengumuman->judul }}</td>
                                    <td>{{ strip_tags($pengumuman->isi) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d-m-Y') }}</td>
                                    <td>{{ $pengumuman->kategori }}</td>
                                    <td>
                                        <a href="{{ route('pengumuman.edit', $pengumuman->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST"
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

