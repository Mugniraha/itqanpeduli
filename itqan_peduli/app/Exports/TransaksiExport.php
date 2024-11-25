<?php

namespace App\Exports;

use App\Models\Transaksi; // Model tetap sama, tapi merujuk ke tabel baru
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransaksiExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Menyesuaikan query untuk tabel transaksi_zakat
        return Transaksi::select(
            'order_id', 
            'tgl_transaksi', 
            'nama_donatur', 
            'nama_program_zakat', 
            'nominal_total', 
            'status'
        )->get();
    }

    public function headings(): array
    {
        return [
            'ID Transaksi',
            'Tanggal Transaksi',
            'Nama Donatur',
            'Nama Program',
            'Nominal',
            'Status',
        ];
    }
}
