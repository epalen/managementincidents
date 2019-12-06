<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
	        	'name' 			=> 'Actualización de software',
	        	'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
            ],
        );

        Category::insert($data);
    }
}
