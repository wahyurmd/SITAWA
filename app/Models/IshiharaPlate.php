<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IshiharaPlate extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc',
        'plate',
        'pil_a',
        'pil_b',
        'pil_c',
        'pil_d',
        'answer_key',
        'status',
    ];
}
