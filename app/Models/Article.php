<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function gallery()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function type()
    {
        return $this->belongsTo(Category::class, 'type_id');
    }

    public function getPlaceAttribute()
    {
        return $this->location ? $this->city : $this->user->city;
    }

    public function setSlugAttribute($value) {

        if (static::whereSlug($slug = Str::slug($value))->exists()) {
    
            $slug = $this->incrementSlug($slug);
        }
    
        $this->attributes['slug'] = $slug;
    }

    public function setTitleAttribute($value) {

        $trademark = $this->category->parent->name;
        $model = $this->category->name;

        $title = "$trademark $model $this->kilometers Km $this->year $this->fuel";
    
        $this->attributes['title'] = $title;
    }

    public function incrementSlug($slug) {

        $original = $slug;
    
        $count = 2;
    
        while (static::whereSlug($slug)->exists()) {
    
            $slug = "{$original}-" . $count++;
        }
    
        return $slug;
    
    }


    public function getCityAttribute()
    {
        $location = json_decode($this->location);
        return (isset($location->address->city)) ? $location->address->city : $location->address->town;
    }

}
