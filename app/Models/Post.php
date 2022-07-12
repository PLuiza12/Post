<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =[

        'titulo',
        'texto',
        'user_id'
    ];

    public function donoDoPost(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function postTag(){
        return $this->hasMany(PostTag::class);

    }

    public function ligacao(){
        return $this
          ->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id')
          ->withTimestamps()
          ->withPivot('id');
    }
}
