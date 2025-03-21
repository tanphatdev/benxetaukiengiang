<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donvikinhdoanh extends Model
{
    use HasFactory;
    protected $primaryKey = 'donvikinhdoanh_id';
    protected $fillable = [
        'loaikinhdoanh_id',
        'donvikinhdoanh_ten',
        'donvikinhdoanh_mst',
        'donvikinhdoanh_tenviettat',
        'donvikinhdoanh_diachi',
        'donvikinhdoanh_sdt',
        'donvikinhdoanh_ghichu',
        'ben_id'
    ];
}
