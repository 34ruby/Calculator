<?php

namespace App\Imports;

use App\Models\Office;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class OfficeImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new Office([
           'name'     => $row[0],
           'address'    => $row[1],
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
