<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Relationship extends Pivot
{
    protected $fillable = ['post_id', 'term_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
}
