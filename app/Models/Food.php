<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        'name',
        'description',
        'category_food_id',
        'note',
        'total_time',
        'create_user_id',
    ];

    public function categoryFood(): BelongsTo
    {
        return $this->belongsTo(CategoryFood::class, 'category_food_id');
    }

    public function createUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'create_user_id');
    }

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class, 'food_id');
    }

    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class, 'food_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'food_id');
    }
}
