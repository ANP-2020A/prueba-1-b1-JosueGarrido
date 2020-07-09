<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Products::truncate();

        $faker = \Faker\Factory::create();

        //Crear productos ficticios en la tabla
        for($i = 0; $i < 50; $i++) {
            Products::create([
                'name'=> $faker->name,
                'code'=> $faker->randomNumber(),
                'price'=> $faker->randomNumber(),
                'status'=> $faker->boolean,
            ]);
        }
    }
}
