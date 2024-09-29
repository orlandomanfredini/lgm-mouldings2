<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article',
        'color',
        'material',
        'description',
        'price',
        'storage',
        'image'
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
