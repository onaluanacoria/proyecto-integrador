<?php

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
        factory(\App\Category::class,6)->create();
        factory(\App\Product::class,12)->create();

        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
