<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            [
                'brand' => 'SHURE',
            ],
            [
                'brand' => 'Sennheiser',
            ],
            [
                'brand' => 'Electro-Voice',
            ],
            [
                'brand' => 'Behringer',
            ],
            [
                'brand' => 'Rode',
            ],
            [
                'brand' => 'Samson',
            ],
            [
                'brand' => 'Telefunken',
            ],
            [
                'brand' => 'Blue',
            ],
            [
                'brand' => 'Townsend',
            ],
            [
                'brand' => 'AKG',
            ],
            [
                'brand' => 'Warm Audio',
            ],
            [
                'brand' => 'Neumann',
            ],
            [
                'brand' => 'Manley',
            ],
            [
                'brand' => 'Aston Microphones',
            ],
            [
                'brand' => 'Earthworks',
            ],
        ]);
    }
}
