<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'image',
        'title',
        'sub_content',
        'content',
    ];

    protected $casts = [
        'id' => 'string',
        'image' => 'string',
        'title' => 'string',
        'sub_content' => 'string',
        'content' => 'string',
    ];

    public function comments () {
        return $this->hasMany(Comment::class);
    }
}
