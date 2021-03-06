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
          'name'       => 'gersom',
          'email'      => 'gersom@gmail.com',
          'password'   => bcrypt('123456'),
          'role'       => 1, // administrator
          'people_id'  => 1
        ]);

        User::create([
          'name'       => 'juan',
          'email'      => 'juan@gmail.com',
          'password'   => bcrypt('123456'),
          'role'       => 3, // person
          'people_id'  => 2
        ]);

        User::create([
          'name'       => 'edteam',
          'email'      => 'hola@edteam.com',
          'password'   => bcrypt('123456'),
          'role'       => 2, // company
          'company_id' => 1
        ]);

        User::create([
          'name'       => 'codigofacilito',
          'email'      => 'hola@codigofacilito.com',
          'password'   => bcrypt('123456'),
          'role'       => 2, // company
          'company_id' => 2
        ]);
    }
}
