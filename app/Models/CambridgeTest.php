<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CambridgeTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'start_time',
        'end_time',
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
