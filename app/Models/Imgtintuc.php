<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgtintuc extends Model
{
    protected $primaryKey = 'imgtintuc_id';
    protected $fillable = [
        'imgtintuc_name',
        'imgtintuc_link',
        'tintuc_id'
    ];
}
