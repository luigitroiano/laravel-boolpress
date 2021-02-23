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
        for ($i = 0; $i < 30; $i++) {
            $newTag = new Tag();
            $newTag->name = $faker->word();
            $newTag->views = $faker->randomNumber(6, true);
            $newTag->share = $faker->numberBetween(1000, 1000000);
            $newTag->save();
        }
    }
}
