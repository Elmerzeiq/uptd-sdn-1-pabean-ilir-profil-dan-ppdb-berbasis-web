<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Bukti Pendaftaran</title>
    <style>
        /* CSS dasar untuk tampilan PDF */
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            padding: 20px;
        }

        .invoice {
            border: 1px solid #ddd;
            padding: 20px;
        }

        .page-header {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .page-header i {
            margin-right: 5px;
        }

        .float-right {
            float: right;
        }

        address {
            margin-bottom: 0;
        }

        hr {
            border-top: 1px solid #ddd;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .lead {
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 5px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-8,
        .col-12 {
            float: left;
            box-sizing: border-box;
            padding: 5px;
        }

        .col-12 {
            width: 100%;
        }

        .col-sm-2 {
            width: 16.66%;
        }

        .col-sm-3 {
            width: 25%;
        }

        .col-sm-4 {
            width: 33.33%;
        }

        .col-sm-8 {
            width: 66.66%;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- Title row -->
            <div class="row">
                <div class="col-12">
                    <h6 class="page-header">
                        <i class="fas fa-globe"></i> PPDB Online UPTD SDN 1 PABEAN ILIR
                        <small class="float-right">Tahun Pelajaran 2025/2026</small>
                    </h6>
                </div>
            </div>
            <!-- Info row -->
            <div class="row invoice-info">
                <div class="col-sm-2">
                    <img src="{{ asset('img/favicon.png') }}" alt="Logo Instansi" width="75">
                </div>
                <div class="col-sm-8 text-center">
                    <address>
                        <h4>
                            <strong>PENDAFTARAN PESERTA DIDIK BARU</strong><br>
                            <strong>UPTD SDN 1 PABEAN ILIR</strong><br>
                            Tahun Pelajaran 2025/2026
                        </h4>
                    </address>
                </div>
                <div class="col-sm-2">
                    <!-- Kosong atau bisa ditambahkan info lain -->
                </div>
            </div>
            <hr>
            <!-- Judul bukti pendaftaran -->
            <div class="row text-center">
                <address>
                    <strong>
                        <h3>BUKTI PENDAFTARAN ONLINE</h3>
                    </strong>
                </address>
            </div>
            <!-- Data pendaftaran -->
            <div class="row invoice-info">
                <div class="col-sm-4">
                    Nomor Pendaftaran:
                    <address>
                        <strong></strong>
                    </address>
                </div>
                <div class="col-sm-4">
                    Tanggal Daftar:
                    <address>
                        <strong></strong>
                    </address>
                </div>
                <div class="col-sm-4">
                    Tanggal Cetak:
                    <address>
                        <strong>{{ now()->format('d-m-Y H:i:s') }}</strong>
                    </address>
                </div>
            </div>
            <!-- Identitas Peserta Didik -->
            <div class="row">
                <div class="col-12">
                    <p class="lead">I. Identitas Peserta Didik</p>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            Nama Lengkap
                        </div>
                        <div class="col-sm-9">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            Nama Panggilan
                        </div>
                        <div class="col-sm-9">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            Tempat, Tanggal Lahir
                        </div>
                        <div class="col-sm-9">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            Jenis Kelamin
                        </div>
                        <div class="col-sm-9">
                            :
                        </div>
                    </div>
                    <!-- Tambahkan field lainnya sesuai kebutuhan -->
                </div>
            </div>
            <br>
            <!-- Data Keluarga -->
            <div class="row">
                <div class="col-12">
                    <p class="lead">II. Data Keluarga</p>
                    <table class="table">
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
                                <td>

                                </td>
                                <td>

                                </td>
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
                                <td>Jabatan / Nama Instansi</td>
                                <td></td>
                                <td></td>
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
    </div>
</body>

</html>
