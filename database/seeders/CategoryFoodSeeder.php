<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\CategoryFood;
use Illuminate\Database\Seeder;

class CategoryFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = file_get_contents(database_path('seeders/json/category_food.json'));
        $data = json_decode($json);

        foreach ($data as $item) {
            CategoryFood::create([
                'name' => $item->name,
                'description' => $item->description,
            ]);
        }
    }
}
