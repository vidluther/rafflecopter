<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entry;
use App\Models\Raffle;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $num_raffles = rand(1,23);


        // this is a really stupid and silly hack to generate a random number of raffles and tickets per raffle
        for($i=1; $i < $num_raffles; $i++ ) {
            $num_entries = rand(10,500);
            \App\Models\Raffle::factory('1')
                ->has(Entry::factory()->count($num_entries))->create();
        }
        // NORMALLY THIS IS ALL YOU NEED TO DO TO SEED THE DB
        //        \App\Models\Raffle::factory('34')
        //            ->has(Ticket::factory()->count(rand(10,3030)))->create();
    }
}
