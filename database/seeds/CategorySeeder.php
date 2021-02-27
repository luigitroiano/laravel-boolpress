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
        $category_list = config('categories');
        foreach ($category_list as $value) {
            $newCategory = new Category();
            $newCategory->name = $value['name'];
            $newCategory->under18 = $value['under18'];
            $newCategory->save();
        }
    }
}
