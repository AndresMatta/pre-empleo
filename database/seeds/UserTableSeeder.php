<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'username'=>'amatta',
        	'name'=>'Andrés Matta Morales',
        	'email'=>'andres.sm123@gmail.com',
        	'tipo'=>'Administrador',
        	'password'=>bcrypt('a12062')
        ]);
    }
}
