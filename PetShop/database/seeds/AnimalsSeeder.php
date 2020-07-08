<?php

use Illuminate\Database\Seeder;

class AnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            [
                'name' => 'Jeep',
                'age' => '5',
                'description' => 'Un Berger Australien à la robe multicouleur',
                'sex' => 'Mâle',
                'weight' => '20',
                'species_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mimi',
                'age' => '5',
                'description' => 'Un chat noir et blanc plutôt Terminator',
                'sex' => 'Femelle',
                'weight' => '5',
                'species_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Fümthaar',
                'age' => '10',
                'description' => 'Un axolot tout mignion',
                'sex' => 'Mâle',
                'weight' => '1',
                'species_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
