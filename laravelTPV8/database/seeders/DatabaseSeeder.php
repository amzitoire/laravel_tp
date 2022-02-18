<?php

namespace Database\Seeders;


use App\Models\Formation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* User::factory(200)->create();
        for($i=1;$i<=200;$i++){
            $user =User::find($i);
            $formation = Formation::factory()->count(15)->for($user)->create();
        }*/


    }
}
