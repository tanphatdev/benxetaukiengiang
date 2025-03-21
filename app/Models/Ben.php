<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ben extends Model
{
    protected $primaryKey = 'ben_id';
    protected $fillable = [
        'ben_ten',
        'ben_diachi',
        'ben_sodienthoai',
        'ben_email',
        'loaiben_id',
        'ben_phancap',
        'ben_img'
    ];
    
}
