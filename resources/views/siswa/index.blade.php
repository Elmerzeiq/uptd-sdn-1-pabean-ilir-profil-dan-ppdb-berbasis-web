@extends('siswa.siswa_dashboard')

@section('siswa')

<div class="page-content">
    <h3>Welcome, {{ Auth::user()->name }} to the PPDB UPTD SDN 1 Pabean Ilir</h3>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Formulir</h5>
                    {{-- <h3>{{ $jml_siswa }}</h3> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Kartu Pendaftaran</h5>
                    {{-- <h3>{{ $jml_guru }}</h3> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Berkas Lainnya</h5>
                    {{-- <h3>{{ $jml_staff }}</h3> --}}
                </div>
            </div>
        </div>
    </div>

    <h5 class="mt-5">Pengumuman</h5>
    <ul>
        {{-- @foreach($kegiatan_terbaru as $kegiatan)
        <li>{{ $kegiatan->judul }} - {{ $kegiatan->tanggal }}</li>
        @endforeach --}}
    </ul>

    <h5 class="mt-5">UPTD SDN 1 Pabean Ilir</h5>
    <ul>
        {{-- @foreach($akademik_terbaru as $info)
        <li>{{ $info->kategori }} - {{ $info->created_at->format('d M Y') }}</li>
        @endforeach --}}
    </ul>


</div>



@endsection
