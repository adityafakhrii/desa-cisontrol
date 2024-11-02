<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterKependudukan;

class MasterKependudukanSeeder extends Seeder
{
    public function run(): void
    {
        MasterKependudukan::factory()->count(5)->create();
    }
}
