<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    protected $primaryKey = 'tintuc_id';
    protected $fillable = [
        'tintuc_tieude',
        'tintuc_noidung',
        'tintuc_ngaytao'
    ];
}
