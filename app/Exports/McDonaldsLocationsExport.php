<?php

namespace App\Exports;

use App\Models\McDonaldsLocation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class McDonaldsLocationsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return McDonaldsLocation::all();
    }

    public function headings(): array
    {
        return [
            'Title',
            'Link',
            'Domain',
            'Displayed Link',
            'Snippet',
            'Prerender',
            'Block Position',
        ];
    }
}
