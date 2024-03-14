<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\McDonaldsLocation;

class McDonaldsLocationsImport implements ToModel
{
    /**
     * Create a new model instance for the row.
     *
     * @param  array  $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new McDonaldsLocation([
            'title' => $row[0],
            'link' => $row[1],
            'domain' => $row[2],
            'displayed_link' => $row[3],
            'snippet' => $row[4],
            'prerender' => $row[5],
            'block_position' => $row[6],
        ]);
    }
}
