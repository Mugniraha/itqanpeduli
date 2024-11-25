<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransaksiManualExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Query data transaksi manual dari tabel transaksi_zakat
        return Transaksi::select(
            'order_id',
            'nama_donatur',
            'nama_program_zakat',
            'tgl_transaksi',
            'nominal_total',
            'status'
        )->whereNull('transaction_token') // Filter untuk transaksi manual
          ->get();
    }

    public function headings(): array
    {
        return [
            'ID Transaksi',
            'Nama Donatur',
            'Nama Program',
            'Tanggal Transaksi',
            'Nominal Total',
            'Status',
        ];
    }
}
