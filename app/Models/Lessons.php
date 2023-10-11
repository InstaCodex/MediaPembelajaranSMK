<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name',
        'minutes',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function levels()
    {
        return $this->hasMany(Level::class, 'lesson_id', 'id_user');
    }
}
