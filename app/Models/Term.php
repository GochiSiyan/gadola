<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'taxonomy_id'];

    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class)->using(Relationship::class);
    }
}
