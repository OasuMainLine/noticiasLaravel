<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categories;
class UsersCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = User::all();

        foreach ($users as $user){
            $categories = Categories::inRandomOrder()->limit(3)->get();
            
            $user->categories()->attach($categories);

            $user->save();
        }
    }
}