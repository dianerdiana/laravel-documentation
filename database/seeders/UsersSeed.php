<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        DB::table('users')->insert([
            [
                'id'                 => '1',
                'name'               => 'Administrator',
                'username'           => 'admin',
                'password'           => bcrypt('admin'),
                'email'              => 'admin@mail.com',
                'email_verified_at'  => '2019-09-09 09:09:09',
                'company_id'         => 1,
                'role'               => 'admin',
            ],
            [
                'id'                 => '2',
                'name'               => 'Sales Mashiro',
                'username'           => 'mashiro',
                'password'           => bcrypt('password'),
                'email'              => 'mashiro@mail.com',
                'email_verified_at'  => '2019-09-09 09:09:09',
                'company_id'         => 1,
                'role'               => 'user',
            ]
        ]);
        DB::statement("SELECT setval('users_id_seq', 100)");
    }
}
