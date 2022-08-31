<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Relationship extends Pivot
{
    protected $fillable = ['post_id', 'term_id'];
}
