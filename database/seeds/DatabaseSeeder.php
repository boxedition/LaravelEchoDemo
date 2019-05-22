<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Each User creates 3 Posts
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 5)->create()->each(function ($u) {
        for ($i=0; $i <= 2; $i++) {
          $u->posts()->save(factory(App\Post::class)->make());
        }  
      });
    }
}
