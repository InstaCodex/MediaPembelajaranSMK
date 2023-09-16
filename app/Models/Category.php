<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
<<<<<<< HEAD
    protected $guarded = ['id'];
    protected $fillable = [
        'name'
    ];
    use HasFactory;
    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id');
    }
=======
    protected $fillable = [
        'name', 'detail'
       // ...other fields,
       //'_token', // Add any other fields you want to mass assign here
   ];
    use HasFactory;
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
}
