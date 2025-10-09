@extends('layouts.app')

@section('content')
<h2>Edit Berkas</h2>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('berkas.update', $berkas->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $berkas->nama }}" required>

    <label>Akta Kelahiran:</label>
    @if ($berkas->akta_kelahiran)
    <img src="{{ asset('storage/'.$berkas->akta_kelahiran) }}" width="50">
    @endif
    <input type="file" name="akta_kelahiran" accept="image/*">

    <label>Kartu Keluarga:</label>
    @if ($berkas->kartu_keluarga)
    <img src="{{ asset('storage/'.$berkas->kartu_keluarga) }}" width="50">
    @endif
    <input type="file" name="kartu_keluarga" accept="image/*">

    <label>KTP Orang Tua:</label>
    @if ($berkas->ktp_orangtua)
    <img src="{{ asset('storage/'.$berkas->ktp_orangtua) }}" width="50">
    @endif
    <input type="file" name="ktp_orangtua" accept="image/*">

    <label>KIA:</label>
    @if ($berkas->kia)
    <img src="{{ asset('storage/'.$berkas->kia) }}" width="50">
    @endif
    <input type="file" name="kia" accept="image/*">

    <label>Ijazah TK/PAUD (jika ada):</label>
    @if ($berkas->ijazah_tk_paud)
    <img src="{{ asset('storage/'.$berkas->ijazah_tk_paud) }}" width="50">
    @endif
    <input type="file" name="ijazah_tk_paud" accept="image/*">

    <label>KIP/KPS/KKS (jika ada):</label>
    @if ($berkas->kip_kps_kks)
    <img src="{{ asset('storage/'.$berkas->kip_kps_kks) }}" width="50">
    @endif
    <input type="file" name="kip_kps_kks" accept="image/*">

    <button type="submit">Update</button>
</form>

<a href="{{ route('siswa.index') }}">Kembali</a>
@endsection
