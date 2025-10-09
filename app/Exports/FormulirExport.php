<?php
// filepath: /e:/smnr_ta/app/Exports/FormulirExport.php
namespace App\Exports;

use App\Models\Formulir;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormulirExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Formulir::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama Lengkap',
            'NISN',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat',
            'No Handphone',
            'Email',
            'Nama Ayah',
            'Nama Ibu',
            'Pekerjaan Ayah',
            'Pekerjaan Ibu',
            'Alamat Orang Tua',
            'No Handphone Orang Tua',
            'Tanggal Pendaftaran',
        ];
    }
}
