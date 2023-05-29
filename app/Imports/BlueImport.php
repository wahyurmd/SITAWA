<?php

namespace App\Imports;

use App\Models\CambridgeBYPlate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class BlueImport implements ToCollection
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
            CambridgeBYPlate::create([
                'desc'          => $row[0],
                'plate'         => $row[1],
                'answer_key'    => $row[2],
                'keyword'       => $row[3],
            ]);
        }
    }
}
