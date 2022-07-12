<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot
{
    use HasFactory;
    protected $fillable =[
        'post_id',
        'tag_id'
    ];

    public $incrementing = true;

    public function post(){
        return $this->belongsTo(Post::class);
    } 

    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
