<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommerceData extends Model
{
    use HasFactory;

    // fillables
    protected $fillable = [
        'commerce_id',
        'key',
        'value',
    ];

    // relations
    public function commerce()
    {
        return $this->belongsTo(Commerce::class, 'commerce_id');
    }
}
