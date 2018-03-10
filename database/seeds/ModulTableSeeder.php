<?php

use Illuminate\Database\Seeder;

class ModulTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Modul::class, 10)->create();
    }
}
