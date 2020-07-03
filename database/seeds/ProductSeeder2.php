<?php

use Illuminate\Database\Seeder;

class ProductSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product2s')->insert([
            'name' => 'grey gate',
            'category'=>'garden',
            'description' => 'hardened iron ore gate',
            'photo' => 'https://image.shutterstock.com/image-photo/wrought-iron-gate-stone-pillar-260nw-1134002153.jpg',
            'price' => 698.88
         ]);
  
         DB::table('product2s')->insert([
            'name'=>'mini grey gate',
            'category'=>'garden',
            'description'=>'hardened iron ore gate with mini gate',
             'photo' => 'https://www.yourdictionary.com/images/definitions/lg/5050.gate.jpg',
             'price' => 983.00
         ]);
  
         DB::table('product2s')->insert([
            'name'=>'main gate',
            'category'=>'main-gate',
            'description'=>'iron ore gate',
             'photo' => 'https://www.yourdictionary.com/images/definitions/lg/5050.gate.jpg',
             'price' => 675.00
         ]);
  
         DB::table('product2s')->insert([
            'name'=>'grey gate',
            'category'=>'garden',
            'description'=>'hardened iron ore gate',
             'photo' => 'https://nigeriandictionary.com/images/large/large_1476440100.jpg',
             'price' => 159.99
         ]);
  
         DB::table('product2s')->insert([
            'name'=>'Small iron gate',
            'category'=>'Small garden gates',
            'description'=>'Small golden gate for gardens',
             'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/5e/24/ac/front-gate.jpg',
             'price' => 68.00
         ]);
  
        
    }
}
