@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery List</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Gallery</h6>

                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('gallery.create') }}" class="btn btn-success">Tambah Gallery</a>
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
                                    <th scope="col" style="width: 20%;">Kategori</th>
                                    <th scope="col" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $index => $gallery)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if($gallery->image)
                                        <img src="{{ asset('uploads/images/' . $gallery->image) }}" alt="Gallery Image"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        @else
                                        No Image
                                        @endif
                                    </td>
                                    <td>
                                        {{ $gallery->kategori }}
                                    </td>
                                    <td>
                                        <a href="{{ route('gallery.edit', $gallery->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST"
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
