<?php

use Illuminate\Database\Seeder;
use App\Entities\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Image::class, 10)->create();
        Image::create([
          'original'     => 'http://lorempixel.com/1366/660',
          'height_50px'  => 'http://lorempixel.com/54/50',
          'height_150px' => 'http://lorempixel.com/150/150',
          'height_500px' => 'http://lorempixel.com/613/500',
          'product_id'   => 1
        ]);
        Image::create([
          'original'     => 'http://lorempixel.com/1366/660',
          'height_50px'  => 'http://lorempixel.com/54/50',
          'height_150px' => 'http://lorempixel.com/150/150',
          'height_500px' => 'http://lorempixel.com/613/500',
          'product_id'   => 2
        ]);
        Image::create([
          'original'     => 'http://lorempixel.com/1366/660',
          'height_50px'  => 'http://lorempixel.com/54/50',
          'height_150px' => 'http://lorempixel.com/150/150',
          'height_500px' => 'http://lorempixel.com/613/500',
          'product_id'   => 3
        ]);
        Image::create([
          'original'     => 'http://lorempixel.com/1366/660',
          'height_50px'  => 'http://lorempixel.com/54/50',
          'height_150px' => 'http://lorempixel.com/150/150',
          'height_500px' => 'http://lorempixel.com/613/500',
          'product_id'   => 4
        ]);
        Image::create([
          'original'     => 'http://lorempixel.com/1366/660',
          'height_50px'  => 'http://lorempixel.com/54/50',
          'height_150px' => 'http://lorempixel.com/150/150',
          'height_500px' => 'http://lorempixel.com/613/500',
          'product_id'   => 5
        ]);
    }
}
