<?php

use Illuminate\Database\Seeder;

class TakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Take::class, 10)->create();
    }
}
