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
        /*factory(App\Category::class,5)->create();
        factory(App\Product::class,100)->create();//crea y lo guarda en la base de datos
        factory(App\ProductImage::class,200)->create();*/
        $categories=factory(\App\Category::class,5)->create();
        $categories->each(function ($category){
            $products=factory(\App\Product::class,20)->make();
            $category->products()->saveMany($products);
            $products->each(function ($p)
            {
                $images=factory(\App\ProductImage::class,5)->make();
                $p->images()->saveMany($images);
            });
        });


    }
}
