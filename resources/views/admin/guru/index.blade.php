@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Kepala Sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kepala Sekolah Page</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Kepala Sekolah</h6>

                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah List</a>
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
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Sambutan</th>
                                    <th>Image</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($gurus->count() > 0)
                                @foreach ($gurus as $g)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $g->nip }}</td>
                                    <td>{{ $g->nama }}</td>
                                    <td>{{ $g->jabatan }}</td>
                                    <td>{{ strip_tags($g->sambutan) }}</td>
                                    <td>
                                        @if($g->image)
                                        <img src="{{ asset('uploads/images/' . $g->image) }}" alt="Image of {{ $g->nama }}"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        @else
                                        No Image
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('guru.edit', $g->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('guru.destroy', $g->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7" class="text-center">No Data Found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
