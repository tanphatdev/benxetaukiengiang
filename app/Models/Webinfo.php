<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinfo extends Model
{
    protected $primaryKey = 'webinfo_id';
    protected $fillable = [
        'webinfo_name',
        'webinfo_email',
        'webinfo_sdt',
        'webinfo_diachi'
    ];
}
