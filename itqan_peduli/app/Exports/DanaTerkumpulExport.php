<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DanaTerkumpulExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Transaksi::selectRaw('SUM(nominal_total) as total_donasi, COUNT(id) as jumlah_transaksi')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Total Donasi',
            'Jumlah Transaksi',
        ];
    }
}
