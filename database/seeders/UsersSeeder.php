<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use File;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $json = File::get("database/data/users.json");
        $users = json_decode($json, true);

        foreach ($users["results"] as $key=>$value){
            User::create([
                "name" => $value["login"]['username'],
                "email" => $value["email"],
                "password" => $value["login"]['sha256'],
            ]);
        }
    }
}