<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'marca', 'model', 'description', 'year', 'price'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
