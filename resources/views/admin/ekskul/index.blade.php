@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('ekskul.index') }}">Ekstrakurikuler</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ekstrakurikuler List</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Ekstrakurikuler</h6>

                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('ekskul.create') }}" class="btn btn-success">Tambah Ekstrakurikuler</a>
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
                                    <th scope="col" style="width: 20%;">Image</th>
                                    <th scope="col" style="width: 20%;">Judul</th>
                                    <th scope="col" style="width: 20%;">Deskripsi</th>
                                    <th scope="col" style="width: 20%;">Isi</th>
                                    <th scope="col" style="width: 15%;">Tanggal</th>
                                    <th scope="col" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ekskuls as $index => $ekskul)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if($ekskul->image)
                                        <img src="{{ asset('uploads/images/' . $ekskul->image) }}" alt="Ekskul Image"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        @else
                                        No Image
                                        @endif
                                    </td>
                                    <td>{{ $ekskul->judul }}</td>
                                    <td>{{ strip_tags($ekskul->deskripsi) }}</td>
                                    <td>{{ strip_tags($ekskul->isi) }}</td>
                                    <!-- Menghapus tag HTML -->
                                    <td>{{ $ekskul->tanggal }}</td>
                                    <td>
                                        <a href="{{ route('ekskul.edit', $ekskul->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('ekskul.destroy', $ekskul->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data?');"
                                            style="display:inline;">
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
