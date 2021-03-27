<?php

namespace Database\Seeders;

use App\Models\MicrophoneType;
use Illuminate\Database\Seeder;

class MicrophoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        MicrophoneType::insert([
            [
                'type' => 'DINAMICO',
            ],
            [
                'type' => 'CONDENSADOR',
            ],
            [
                'type' => 'CINTA',
            ],
            [
                'type' => 'SHOTGUN',
            ],
            [
                'type' => 'LAVALIER',
            ],
        ]);
    }
}
