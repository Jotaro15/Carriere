<?php

namespace Database\Seeders;

use App\Models\Concession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class ConcessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concession::create([
            'name'=> 'Mine_exemple',
            'siret'=> '1234678901234',
            'phone'=> '0606060606',
        ]);
    }
}
