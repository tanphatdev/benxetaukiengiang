<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giokhoihanh extends Model
{
    protected $primaryKey = 'giokhoihanh_id';
    protected $fillable = [
        'chitiettuyen_id',
        'giokhoihanh',
    ];
}
