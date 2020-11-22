<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating2 extends Model
{
    protected $guarded = [];
    public function courser()
    {
        return $this->belongsTo(Course::class);
    }
}
