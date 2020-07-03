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
            ['name' => 'Ornamental gates', 'slug' => 'ornamental-gates', 'created_at' => $now, 'updated_at' => $now]
            ]);
    }
}
