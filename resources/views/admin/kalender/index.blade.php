@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('kalender.index') }}">Kalender</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Kalender</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Daftar Kalender</h6>
                    <div class="mb-4 d-flex justify-content-end">
                        <a href="{{ route('kalender.create') }}" class="btn btn-primary btn-sm"
                            style="float:right;">Tambah Kalender</a>
                    </div>
                    <div class="mt-3 table-responsive">
                        <table class="table" style="width: 100%; table-layout: auto;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%;">No</th>
                                    <th scope="col" style="width: 25%;">Judul</th>
                                    <th scope="col" style="width: 25%;">Deskripsi</th>
                                    <th scope="col" style="width: 10%;">Isi</th>
                                    <th scope="col" style="width: 20%;">Gambar</th>
                                    <th scope="col" style="width: 20%;">Tanggal</th>
                                    <th scope="col" style="width: 15%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kalenders as $index => $kalender)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $kalender->judul }}</td>
                                    <td>{{ strip_tags($kalender->deskripsi) }}</td>
                                    <td>{{ strip_tags($kalender->isi) }}</td>
                                   <td>
                                        @if($kalender->image)
                                        <img src="{{ asset('uploads/images/' . $kalender->image) }}" alt="Kalender Image"
                                            style="width: 100px; height: 100px; object-fit: cover; border-radius: 10px;">
                                        @else
                                        No Image
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($kalender->tanggal)->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('kalender.edit',$kalender->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kalender.destroy', $kalender->id) }}" method="POST"
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

