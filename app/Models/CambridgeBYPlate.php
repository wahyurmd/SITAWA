<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CambridgeBYPlate extends Model
{
    use HasFactory;

    protected $table = 'cambridge_by_plates';
    protected $fillable = [
        'desc',
        'plate',
        'answer_key',
        'keyword',
        'status',
    ];
}
