<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'id_company'    => '1',
                'company_name'  => 'PT. Contoh Perusahaan',
                'phone'         => '(0271)5993571',
                'address'       => 'Jl. Solo wonogiri',
            ]
        ]);
        DB::statement("SELECT setval('companies_id_company_seq', 100)");
    }
}
