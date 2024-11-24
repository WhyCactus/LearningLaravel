<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'thumbnail',
        'author',
        'publicsher',
        'publication',
        'price',
        'quantity',
        'category_id',
    ];

    public function categories_book(){
        return $this->belongsTo(category::class);
    }
}
