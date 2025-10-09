@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <h3 class="mb-3">Welcome to Admin Dashboard</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Siswa</h4>
                    </div>
                    <div class="card-body">
                        <h3>{{ $jml_siswa ?? '-' }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Guru</h4>
                    </div>
                    <div class="card-body">
                        <h3>{!! $jml_guru ?? '-' !!}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Staff</h4>
                    </div>
                    <div class="card-body">
                        <h3>{{ $jml_staff ?? '-' }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h5 class="mt-5">Kegiatan Terbaru</h5>
    <br>
    @if(isset($kegiatan_terbaru) && count($kegiatan_terbaru) > 0)
    <ul class="list-unstyled">
        @foreach($kegiatan_terbaru as $kegiatan)
        <li class="media mb-3">
            <div class="media-body">
                <h5 class="mt-0 mb-1">{{ $kegiatan->judul }}</h5>
                <span>{{ $kegiatan->tanggal }}</span>
            </div>
        </li>
        @endforeach
    </ul>
    @else
    <p>Tidak ada kegiatan terbaru.</p>
    @endif

    <h5 class="mt-5">Informasi Akademik Terbaru</h5>
    <br>
    @if(isset($akademik_terbaru) && count($akademik_terbaru) > 0)
    <ul class="list-unstyled">
        @foreach($akademik_terbaru as $info)
        <li class="media mb-3">
            <div class="media-body">
                <h5 class="mt-0 mb-1">{{ $info->kategori }}</h5>
                <span>{{ $info->created_at->format('d M Y') }}</span>
            </div>
        </li>
        @endforeach
    </ul>
    @else
    <p>Tidak ada informasi akademik terbaru.</p>
    @endif

    <h5 class="mt-5">Galeri Terbaru</h5>
    <br>
    @if(isset($gallery_terbaru) && count($gallery_terbaru) > 0)
    <div class="row">
        @foreach($gallery_terbaru as $gallery)
        <div class="col-md-3">
            <img src="{{ asset('uploads/images/'.$gallery->image) }}" alt="{{ $gallery->kategori }}" class="img-fluid mb-3" style="width: 100%; height: 300px; object-fit: cover;">
        </div>
        @endforeach
    </div>
    @else
    <p>Tidak ada galeri terbaru.</p>
    @endif
</div>

@endsection

