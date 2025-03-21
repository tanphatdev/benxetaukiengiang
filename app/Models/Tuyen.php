<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuyen extends Model
{
    protected $primaryKey = 'tuyen_id';
    protected $fillable = [
        'tuyen_matuyen',
        'tuyen_bendi',
        'tuyen_benden',
        'tuyen_culy',
        'loaikinhdoanh_id'
    ];
}
