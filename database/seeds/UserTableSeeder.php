<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'     => 'gersom',
          'email'    => 'gersom@gmail.com',
          'password' => bcrypt('123456'),
          'role'     => 1 // administrator
        ]);

        User::create([
          'name'     => 'juan',
          'email'    => 'juan@gmail.com',
          'password' => bcrypt('123456'),
          'role'     => 3 // person
        ]);

        User::create([
          'name'     => 'edteam',
          'email'    => 'hola@edteam.com',
          'password' => bcrypt('123456'),
          'role'     => 2 // company
        ]);

        User::create([
          'name'     => 'codigofacilito',
          'email'    => 'hola@codigofacilito.com',
          'password' => bcrypt('123456'),
          'role'     => 2 // company
        ]);
    }
}
