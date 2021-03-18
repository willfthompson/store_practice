<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product = new Product;
        $product->name = "MEN'S BETTER THAN NAKED & JACKET";
        $product->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.';
        $product->price = 200.10;
        $product->image = 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png';
        $product->save();



        $product = new Product;
        $product->name = "WOMEN'S BETTER THAN NAKED™ JACKET";
        $product->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.';
        $product->price = 255.95;
        $product->image = 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png';
        $product->save();


    }
}
