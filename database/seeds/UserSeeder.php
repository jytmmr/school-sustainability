<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();

//        factory(App\User::class, 50)->create()->each(function ($u) {
//            $u->posts()->save(factory(App\TeachingData::class))->make());
//        });
    }
}
