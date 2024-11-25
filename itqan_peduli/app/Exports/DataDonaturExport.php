<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataDonaturExport implements FromCollection, WithHeadings
{
    /**
     * Mengambil data untuk diekspor.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Join tabel transaksi_zakat dengan users untuk mengambil email
        return DB::table('transaksi_zakat')
            ->join('users', 'transaksi_zakat.user_id', '=', 'users.id') // Relasi antara tabel
            ->select(
                'transaksi_zakat.nama_donatur',
                'users.email',
                'users.phone_number',
                'transaksi_zakat.nominal_total',
                'transaksi_zakat.status'
            )
            ->get();
    }

    /**
     * Tambahkan header untuk file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama Donatur',
            'Email',
            'Nomor Telepon',
            'Nominal Total',
            'Status',
        ];
    }
}
