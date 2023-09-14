<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'name'
    ];
    use HasFactory;
    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id');
    }
}
