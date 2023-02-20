<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'    => 1,
                'name'  => 'Admin',
                'icon'  => 'slack',
                'class' => 'font-medium-3 text-danger me-50',
            ],
            [
                'id'    => 2,
                'name'  => 'Subscriber',
                'icon'  => 'user',
                'class' => 'font-medium-3 text-primary me-50',
            ],
            [
                'id'    => 3,
                'name'  => 'Author',
                'icon'  => 'settings',
                'class' => 'font-medium-3 text-warning me-50',
            ],
            [
                'id'    => 4,
                'name'  => 'Maintainer',
                'icon'  => 'database',
                'class' => 'font-medium-3 text-success me-50',
            ],
            [
                'id'    => 5,
                'name'  => 'Editor',
                'icon'  => 'edit-2',
                'class' => 'font-medium-3 text-info me-50',
            ],
        ]);
        DB::statement("SELECT setval('roles_id_seq', 100)");
    }
}
