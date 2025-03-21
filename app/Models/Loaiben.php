<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaiben extends Model
{
    protected $primaryKey = 'loaiben_id';
    protected $fillable = [
        'loaiben_ten'
    ];
}
