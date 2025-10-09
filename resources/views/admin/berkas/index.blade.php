@extends('admin.admin_dashboard')

@section('admin')
<a href="{{ route('berkas.create') }}">Tambah Berkas</a>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Akta</th>
            <th>KK</th>
            <th>KTP</th>
            <th>KIA</th>
            <th>Ijazah</th>
            <th>KIP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($berkas as $b)
        <tr>
            <td>{{ $b->nama }}</td>
            <td><img src="{{ asset('storage/'.$b->akta_kelahiran) }}" width="50"></td>
            <td><img src="{{ asset('storage/'.$b->kartu_keluarga) }}" width="50"></td>
            <td><img src="{{ asset('storage/'.$b->ktp_orangtua) }}" width="50"></td>
            <td><img src="{{ asset('storage/'.$b->kia) }}" width="50"></td>
            <td><img src="{{ asset('storage/'.$b->ijazah_tk_paud) }}" width="50"></td>
            <td><img src="{{ asset('storage/'.$b->kip_kps_kks) }}" width="50"></td>
            <td>
                <a href="{{ route('berkas.edit', $b->id) }}">Edit</a>
                <form action="{{ route('berkas.destroy', $b->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
