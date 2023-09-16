<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
<<<<<<< HEAD
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
=======
    protected $fillable = [
         'name', 
        // ...other fields,
        //'_token', // Add any other fields you want to mass assign here
    ];
    use HasFactory;
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
}
