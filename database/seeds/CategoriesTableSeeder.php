<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = Carbon::now()->toDateTimeString();
        
        Category::insert([
            ['name' => 'Iron gates', 'slug' => 'iron-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wooden gates', 'slug' => 'wooden-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Scissor gates', 'slug' => 'scissor-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Aluminium gates', 'slug' => 'aluminium-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ornamental gates', 'slug' => 'ornamental-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shutter door', 'slug' => 'shutter-door', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sliding gates', 'slug' => 'sliding-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Electronic gates', 'slug' => 'electronic-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fold gates', 'slug' => 'fold-gates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Driveway gates', 'slug' => 'driveway-gates', 'created_at' => $now, 'updated_at' => $now],
            ]);
    }
}
