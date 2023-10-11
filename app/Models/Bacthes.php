<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bacthes extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    // Relasi dengan user (admin)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
