<?php

use Illuminate\Database\Seeder;

class TodosTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Todo::class, 10)->create();
    }
}
