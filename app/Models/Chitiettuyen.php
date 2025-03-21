<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitiettuyen extends Model
{
    protected $primaryKey = 'chitiettuyen_id';
    protected $fillable = [
        'tuyen_id',
        'donvikinhdoanh_id',
        'chitiettuyen_hanhtrinh',
        'chitiettuyen_ghichu',
        'chitiettuyen_giave',
        'chitiettuyen_trangthai'
    ];
}
