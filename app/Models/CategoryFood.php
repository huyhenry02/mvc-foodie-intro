<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryFood extends Model
{
    use HasFactory;

    protected $table = 'category_foods';
    protected $fillable = [
        'name',
        'description'
    ];

    public function foods(): HasMany
    {
        return $this->hasMany(Food::class, 'category_food_id');
    }
}
