<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransaksiOnlineExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Query data transaksi online dari tabel transaksi_zakat
        return Transaksi::select(
            'order_id',
            'nama_donatur',
            'nama_program_zakat',
            'tgl_transaksi',
            'metode_pembayaran',
            'nominal_total',
            'status'
        )->whereNotNull('transaction_token') // Filter untuk transaksi online
          ->get();
    }

    public function headings(): array
    {
        return [
            'ID Transaksi',
            'Nama Donatur',
            'Nama Program',
            'Tanggal Transaksi',
            'Metode Pembayaran',
            'Nominal Total',
            'Status',
        ];
    }
}
