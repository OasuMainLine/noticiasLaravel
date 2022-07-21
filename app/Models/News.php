<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories_id',
        'title',
        'subtitle',
        'description',
        'image'
    ];


    function categories(){
        return $this->hasOne(Categories::class);
    }
}