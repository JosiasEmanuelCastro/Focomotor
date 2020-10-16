<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        "role_id",
        "name",
        "articles_limit",
        "price",
        "external_reference",
        "external_id",
    ];
}
