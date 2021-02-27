<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Generator as Faker;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tag_list = config('tags');
        foreach ($tag_list as $value){
            $newTag = new Tag();
            $newTag->name = $value['name'];
            $newTag->views = $faker->randomNumber(6, true);
            $newTag->share = $faker->numberBetween(1000, 1000000);
            $newTag->save();
        }
    }
}
