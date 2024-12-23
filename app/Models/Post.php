<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'description',
        'content',
        'category_id',
    ];

    public function categories_book(){
        return $this->belongsTo(category::class);
    }
}
