<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'comments';

    protected $primaryKey = 'id';

    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'content',
        'parent_id',
        'post_id',
    ];

    protected $casts = [
        'id' => 'string',
        'content' => 'string',
        'parent_id' => 'string',
        'post_id' => 'string',
    ];

    public function childrenComments () {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function parentComment () {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function post () {
        return $this->belongsTo(Post::class);
    }
}
