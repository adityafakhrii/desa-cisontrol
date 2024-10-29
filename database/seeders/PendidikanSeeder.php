<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikan')->insert([
            ['jenjang_pendidikan' => 'SD'],
            ['jenjang_pendidikan' => 'SMP'],
            ['jenjang_pendidikan' => 'SMA'],
            ['jenjang_pendidikan' => 'D3'],
            ['jenjang_pendidikan' => 'S1'],
            ['jenjang_pendidikan' => 'S2'],
            ['jenjang_pendidikan' => 'S3']
        ]);
    }
}
