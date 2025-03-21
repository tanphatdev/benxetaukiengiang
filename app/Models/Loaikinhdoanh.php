<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaikinhdoanh extends Model
{
    protected $primaryKey = 'loaikinhdoanh_id';
    protected $fillable = [
        'loaikinhdoanh_name'
    ];
}
