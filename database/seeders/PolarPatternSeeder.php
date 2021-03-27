<?php

namespace Database\Seeders;

use App\Models\PolarPattern;
use Illuminate\Database\Seeder;

class PolarPatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PolarPattern::insert([
            [
                'pattern' => 'CARDIOIDE',
            ],
            [
                'pattern' => 'SUPER-CARDIOIDE',
            ],
            [
                'pattern' => 'HIPER-CARDIOIDE',
            ],
            [
                'pattern' => 'OMNIDIRECCIONAL',
            ],
            [
                'pattern' => 'BIDIRECCIONAL',
            ],
        ]);
    }
}
