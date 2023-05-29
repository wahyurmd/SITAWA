<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CambridgeRGPlate extends Model
{
    use HasFactory;

    protected $table = 'cambridge_rg_plates';
    protected $fillable = [
        'desc',
        'plate',
        'answer_key',
        'keyword',
        'status',
    ];
}
