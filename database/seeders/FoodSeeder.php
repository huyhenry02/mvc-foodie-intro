<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = file_get_contents(database_path('seeders/json/food.json'));
        $data = json_decode($json);

        foreach ($data as $item) {
            Food::create([
                'name' => $item->name,
                'description' => $item->description,
                'category_food_id' => $item->category_food_id,
                'note' => $item->note,
                'total_time' => $item->total_time,
                'create_user_id' => $item->create_user_id,
            ]);
        }
    }
}
