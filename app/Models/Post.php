<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'status', 'slug'];

    public function metas()
    {
        return $this->hasMany(PostMeta::class);
    }

    public function terms()
    {
        return $this->belongsToMany(Term::class)->using(Relationship::class);
    }
}
