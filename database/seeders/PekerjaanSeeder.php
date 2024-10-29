<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pekerjaan')->insert([
            ['jenis_pekerjaan' => 'Petani'],
            ['jenis_pekerjaan' => 'Guru'],
            ['jenis_pekerjaan' => 'Pedagang'],
            ['jenis_pekerjaan' => 'PNS'],
            ['jenis_pekerjaan' => 'TNI'],
            ['jenis_pekerjaan' => 'Polisi'],
            ['jenis_pekerjaan' => 'Lainnya']
        ]);
    }
}
