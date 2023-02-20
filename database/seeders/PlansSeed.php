<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'id'    => 1,
                'name'  => 'Basic',
            ],
            [
                'id'    => 2,
                'name'  => 'Company',
            ],
            [
                'id'    => 3,
                'name'  => 'Enterprise',
            ],
            [
                'id'    => 4,
                'name'  => 'Team',
            ],
        ]);
        DB::statement("SELECT setval('plans_id_seq', 100)");
    }
}
