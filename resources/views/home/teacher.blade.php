@extends('home.home_page')

@section('home')
        <!--End of Header Area-->
        <!--Breadcrumb Banner Area Start-->
        <div class="breadcrumb-banner-area teachers">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center">Guru</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="{{ route('home.index') }}">Home</a></li>
                                    <li>Guru</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Teacher Fullwidth Area Start-->
        <div class="teacher-fullwidth-area section-padding">
            <div class="container">
                <div class="row">
                    @foreach($staffs as $staff)
                    @if($staff->kategori === 'guru')
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="text-center single-teachers-column">
                            <div class="teachers-image-column">
                                <img src="{{ $staff->image ? url('uploads/images/' . $staff->image) : '' }}" alt="" />
                            </div>
                            <div class="teacher-column-carousel-text">
                                <h4>{{ $staff->nama }}</h4>
                                <h2>{{ $staff->jabatan }}</h2>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--End of Teacher Fullwidth Area-->
@endsection

