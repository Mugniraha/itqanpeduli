<?php

namespace App\Exports;

use App\Models\Leaderboard;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeaderboardExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Leaderboard::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama',
            'Klik',
            'Transaksi',
            'Terkumpul',
        ];
    }
}
