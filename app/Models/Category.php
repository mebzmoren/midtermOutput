<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'image',
        'navbar_status',
        'status',
        'created_by'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
