<?php

namespace App\Imports;

use App\Models\Amount;
use Maatwebsite\Excel\Concerns\ToModel;

class AmountImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Amount([
            'customer_id' => 1,
            'month' => $row[2],
            'income' => $row[3],
            'expenses' => $row[4]
        ]);
    }
}
