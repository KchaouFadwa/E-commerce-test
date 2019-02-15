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
        //
        $product1=new \App\Product(['imagePath'=>'cart/public/src/images/France.jpg',
            'title'=>'France',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborfugiat nul',
            'price'=> 10
        ]);
        $product1->save();

        $product2=new \App\Product(['imagePath'=>'cart/public/src/images/Bali.jpg',

            'title'=>'Bali',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ',
            'price'=> 20
        ]);
        $product2->save();

        $product3=new \App\Product(['imagePath'=>'cart/public/src/images/Japn.jpg',

            'title'=>'Japan',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ',
            'price'=> 30
        ]);
        $product3->save();






    }
}
