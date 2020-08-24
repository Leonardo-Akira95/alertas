<?php

use Illuminate\Database\Seeder;
use App\Alerta;

class AlertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Alerta::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Alerta::create([
                'tipo' => $faker->words,
                'valor' => $faker->randomNumber,
                'target' => $faker->randomNumber,
                'idModulo' => $faker->randomNumber,
                'data' => $faker->date,
                'hora' => $faker->time
            ]);
        }
    }
}
