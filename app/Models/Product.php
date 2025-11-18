<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'nombre',
        'precio',
        'stock',
        'fecha_caducidad',
        'category_id', // 🔹 si tiene relación con categoría
    ];

    // Relación con Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación many-to-many con Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}



