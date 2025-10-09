@extends('siswa.siswa_dashboard')

@section('siswa')

<div class="page-content">
    <h3>Pengumuman</h3>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Pengumuman Terbaru</h5>
                    <br>
                    <ul>
                        @foreach($pengumuman as $item)
                        <h3>{{ $item->judul }}</h3>
                        <h5>{!! $item->isi !!}</h5>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


