<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'detail'
       // ...other fields,
       //'_token', // Add any other fields you want to mass assign here
   ];
    use HasFactory;
}
