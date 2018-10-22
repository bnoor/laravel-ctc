<?php

use Illuminate\Database\Seeder;

class articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        $data = [];
        
        for ($i = 1; $i <= 100 ; $i++) {
            array_push($data, [
                'name' => $faker->sentence,
                'body' => $faker->realText(2000),
                'user_id' => 1,
                'published_at' => $faker->dateTime(),
            ]);
        }
        
        DB::table('articles')->insert($data);
    }
}
