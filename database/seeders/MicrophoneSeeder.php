<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Microphone;
use App\Models\MicrophoneType;
use App\Models\PolarPattern;
use Illuminate\Database\Seeder;

class MicrophoneSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $microphone = Microphone::create();
        $microphone->model = "SM7B";
        $microphone->frequency_response = "50Hz-20kHz";
        $microphone->price = 399;
        /*$microphone->picture = "/pictures/{$microphone->id}_microphone.webp";*/

        $microphone->brand()->associate(Brand::SHURE);
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE, PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "PODCASTS"
            ],
            [
                "usage" => "RADIO"
            ],
        ]);
        $microphone->save();


    }
}
