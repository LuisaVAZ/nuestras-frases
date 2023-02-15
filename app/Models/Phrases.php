<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrases extends Model
{
    
    use HasFactory;
    protected $fillable =[
        'author',
        'phrase',
        'image',
        'is_onslider'
        ];
        
        protected $hidden =[
        'create_at',
        'update_at'
        ];

}
