<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CambridgeRGAnswer extends Model
{
    use HasFactory;

    protected $table = 'cambridge_rg_answers';
    protected $fillable = [
        'cambridge_test_id',
        'cambridgerg_plates_id',
        'user_answer',
        'keywords',
        'status',
    ];

    public function getIncrementing()
    {
        return false;
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getKeyType()
    {
        return 'string';
    }
}
