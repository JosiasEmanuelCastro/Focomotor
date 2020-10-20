<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "parent_id",
        "type_id",
    ];

    public function type()
    {
        return $this->belongsTo(CategoryType::class, 'type_id');
    }

    public function getSlugAttribute()
    {
        $slug = Str::slug($this->name);

        return $slug;
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    
    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id');
    } 
}
