@extends('siswa.siswa_dashboard')

@section('home')

<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h6 class="page-header">
                    <i class="fas fa-globe"></i> PPDB Online UPTD SDN 1 PABEAN ILIR
                    <small class="float-right">Tahun Pelejaran 2025/2026</small>
                </h6>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info my-0 mr-sm-0">
            <div class="col-sm-2 invoice-col my-0 mr-sm-0">
                <img id="logo" src="{{ asset('public/img/favicon.png') }}" alt="Logo Instansi" class="rounded" width="75">
            </div>
            <!-- /.col -->
            <div class="col-sm-8 invoice-col my-0 mr-sm-0">
                <center>
                    <address class="justify-content-center">
                        <h4>
                            <strong>PENDAFTARAN PESERTA DIDIK BARU</strong><br>
                            <strong>UPTD SDN 1 PABEAN ILIR</strong> <br>
                            Tahun Pelajaran 2025/2026
                        </h4>
                    </address>
                </center>
            </div>
            <div class="col-sm-2 invoice-col my-0 mr-sm-0">

            </div>
            <!-- /.col -->
        </div>
        <hr>
        <!-- /.row -->
        <tr>
            <center>
                <address class="justify-content-center">
                    <strong>
                        <h3>BUKTI PENDAFTARAN ONLINE</h3>
                    </strong>
                </address>
            </center>
        </tr>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Nomor Pendaftaran :
                <address>
                    <strong>202100</strong>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Tanggal Daftar :
                <address>
                    <strong></strong>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Tanggal Cetak :
                <address>
                    <strong>
                        <?php echo date("d-m-Y h:i:s");?>
                    </strong>
                </address>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <p class="lead  my-1 mr-sm-1">I. Identitas Peserta Didik</p>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3 ">
                        Nama Lengkap
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Nama Panggilan
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Tempat, Tanggal Lahir
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Jenis Kelamin
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Berat / Tinggi Badan
                    </div>
                    <div class="col-sm-9">
                        :  kg /  cm
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Golongan Darah
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Penyakit Yang Pernah Diderita
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Agama
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Kewarganegaraan
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Tinggal Bersama
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Anak Ke
                    </div>
                    <div class="col-sm-9">
                        :  dari  saudara
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Bahasa Sehari-hari Dikeluarga
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Jarak Rumah Ke Sekolah
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Asal TK/RA
                    </div>
                    <div class="col-sm-9">
                        :  Alamat :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Tanggal Dan Nomor STTB
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Kesulitan Yang Dialami DI TK/RA
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Bakat dan Minat Anak
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
                <div class="form-group row my-1 mr-sm-1">
                    <div class="col-sm-3">
                        Prestasi Belajar Di TK/RA
                    </div>
                    <div class="col-sm-9">
                        :
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div><br>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <p class="lead">II. Data Keluarga</p>
                <table class="table table-striped my-1 mr-sm-1">
                    <thead>
                        <tr>
                            <th>Uraian</th>
                            <th>Data Ayah</th>
                            <th>Data Ibu</th>
                        </tr>
                    </thead>
                        <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tanggal Lahir</td>
                                    <td>, </td>
                                    <td>, </td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Terakhir</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Jabatan / Nama Instansi Tempat Kerja</td>
                                    <td>, </td>
                                    <td>, </td>
                                </tr>
                                <tr>
                                    <td>Penghasilan Perbulan</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alamat Rumah</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Nomor HP</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            </table>
                            <hr>
                            </div>
                            </div>
                            </section>
                            <!-- /.content -->
                            </div>
                            <!-- ./wrapper -->

                            <script type="text/javascript">
                                window.addEventListener("load", window.print());
                            </script>

                            @endsection


