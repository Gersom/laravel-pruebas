<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompaniesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
