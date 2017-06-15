<?php

use Illuminate\Database\Seeder;
use App\Entities\People;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(People::class, 5)->create();
        People::create([
          'first_name' => 'Gersom',
          'last_name'  => 'Alaja',
          'email'      => 'gersom@gmail.com',
          'gender'     => 1,
          'nickname'   => 'gersom'
        ]);

        People::create([
          'first_name' => 'Juan',
          'last_name'  => 'Perrez',
          'email'      => 'juan@gmail.com',
          'gender'     => 1,
          'nickname'   => 'juan'
        ]);
    }
}
