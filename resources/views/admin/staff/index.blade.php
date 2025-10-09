@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('staff.index') }}">Staff</a></li>
            <li class="breadcrumb-item active" aria-current="page">Staff List</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Staff List</h6>

                    <div class="mb-4 d-flex justify-content-end">
                        <!-- Perubahan di sini -->
                        <a href="{{ route('staff.create') }}" class="btn btn-info">Tambah Staff</a>
                    </div>

                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staffs as $index => $staff)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $staff->nama }}</td>
                                    <td>
                                        @if($staff->image)
                                        <img src="{{ asset('uploads/images/' . $staff->image) }}"
                                            alt="Image of {{ $staff->nama }}"
                                            style="width: 100px; height: auto; object-fit: cover;">
                                        @else
                                        No Image
                                        @endif
                                    </td>
                                    <td>{{ $staff->jabatan }}</td>
                                    <td>{{ $staff->kategori }}</td>
                                   <td>
                                    <div class="d-flex justify-content-start gap-2">
                                        <a href="{{ route('staff.edit', $staff->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('staff.destroy', $staff->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah aksi default
            var form = this.closest("form"); // Ambil form yang berhubungan
            var name = this.getAttribute("data-name"); // Nama item yang dihapus (jika ada)

            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "Ingin menghapus data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit form jika dikonfirmasi
                }
            });
        });
    });
</script>
@endsection
