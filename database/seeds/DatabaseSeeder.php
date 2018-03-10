<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LoginTableSeeder::class);
        $this->call(ModulTableSeeder::class);
        $this->call(TakeTableSeeder::class);
    }
}
