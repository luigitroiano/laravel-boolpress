<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Generator as Faker;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $newCategory = new Category();
            $newCategory->name = $faker->word();
            $newCategory->under18 = $faker->boolean();
            $newCategory->save();
        }
    }
}
