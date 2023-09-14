<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id'];
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'user_id', 'category_id', 'dokumen'];
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
