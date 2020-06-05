<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name'=>'grey gate',
            'slug'=>'grey-gate',
            'category'=>'garden',
            'description'=>'hardened iron ore gate',
            'price'=>25000,
            'image_path'=>'gate.png'



        ]);
        Product::create([
            'name'=>'mini grey gate',
            'slug'=>'mini-gate',
            'category'=>'garden',
            'description'=>'hardened iron ore gate with mini gate',
            'price'=>45000,
            'image_path'=>'gate-1.png'


        ]);
        Product::create([
            'name'=>'main gate',
            'slug'=>'main-gate',
            'category'=>'main gates',
            'description'=>'iron ore gate',
            'price'=>25000,
            'image_path'=>'gate-2.png'


        ]);
        Product::create([
            'name'=>'grey gate',
            'slug'=>'iron-gate',
            'category'=>'garden',
            'description'=>'hardened iron ore gate',
            'price'=>25000,
            'image_path'=>'gate-3.png'


        ]);

        Product::create([
            'name'=>'Small iron gate',
            'slug'=>'iron-gate-small',
            'category'=>'Small garden gates',
            'description'=>'Small golden gate for gardens',
            'price'=>25000,
            'image_path'=>'gate-4.png'


        ]);
    }
}
