<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{
	

	public function run()
	{
	$faker = Faker::create();
	

	for ($i=0; $i < 30; $i++) { 
		
		\DB::table('users')->insert(array(

				'name'			=>		$faker->name,
				'email'			=>		$faker->freeEmail,
				'password'		=>		\Hash::make('123456'),
				'type'			=>		'user',
				'descripcion'	=>		$faker->randomElement($array = array ('Estudiante','Dosente','Egresado')),
				'telefono'		=>		'7654321',
				'direccion'		=>		$faker->streetAddress

			));
	}



	}
}