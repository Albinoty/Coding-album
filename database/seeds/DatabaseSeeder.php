<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Album;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(UsersTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
    }
}
