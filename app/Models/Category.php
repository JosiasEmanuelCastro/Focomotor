<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "parent",
        "type_id",
    ];

    public function type()
    {
        return $this->belongsTo(CategoryType::class, 'type_id');
    }
    
    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent');
    } 
}
