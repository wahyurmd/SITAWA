<?php

namespace App\Imports;

use App\Models\IshiharaPlate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IshiharaImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            IshiharaPlate::create([
                'desc'          => $row['desc'],
                'plate'         => $row['plate'],
                'pil_a'         => $row['pil_a'],
                'pil_b'         => $row['pil_b'],
                'pil_c'         => $row['pil_c'],
                'pil_d'         => $row['pil_d'],
                'answer_key'    => $row['answer_key'],
                'status'        => 1,
            ]);
        }
    }
}
