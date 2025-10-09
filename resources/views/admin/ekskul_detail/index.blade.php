@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('ekskul.index') }}">Ekstrakurikuler</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Ekstrakurikuler</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Detail Ekstrakurikuler</h6>

                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('ekskul_detail.create') }}" class="btn btn-success">Tambah Ekstrakurikuler</a>
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
                                @foreach ($ekskul_details as $index => $ekskul_detail)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if($ekskul_detail->image)
                                        <img src="{{ asset('uploads/images/' . $ekskul_detail->image) }}" alt="Ekskul Image"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        @else
                                        No Image
                                        @endif
                                    </td>
                                    <td>{{ $ekskul_detail->kategori }}</td>
                                    <td>
                                        <a href="{{ route('ekskul_detail.edit', $ekskul_detail->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('ekskul.destroy', $ekskul_detail->id) }}" method="POST"
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

