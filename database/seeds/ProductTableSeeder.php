<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
           'imagePath'    => 'http://t1.gstatic.com/images?q=tbn:ANd9GcTHxIgkw761_VLTV-5W6HhkCAsFChf6c97ELNfVjzHZpwcdx0Ps',
            'title'       => 'Harry Potter',
            'description' => 'Sper cool - at least as a child.',
            'price'       => 10

        ]);

        $product->save();
    }
}
