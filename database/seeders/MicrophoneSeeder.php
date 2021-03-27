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
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
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

        $microphone = Microphone::create();
        $microphone->model = "SM57";
        $microphone->frequency_response = "40Hz-15kHz";
        $microphone->price = 99;
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "AMPLIFICADORES"
            ],
            [
                "usage" => "HEAVY DUTY"
            ],
            [
                "usage" => "VOCALS"
            ]
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->model = "SM58";
        $microphone->frequency_response = "50Hz-15kHz";
        $microphone->price = 99;
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "LIVE VOCALS"
            ],
            [
                "usage" => "HEAVY DUTY"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ]
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->model = "Rode PodMic Cardioid Dynamic Broadcast Microphone";
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->price = 99;
        $microphone->brand()->associate(Brand::RODE);
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "RADIO"
            ],
            [
                "usage" => "PODCASTS"
            ],
            [
                "usage" => "SENSIBILIDAD"
            ]
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->model = "Shure MV7 USB Podcast Microphone";
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->price = 249;
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "AUDIO PARA VIDEOS"
            ],
            [
                "usage" => "USB"
            ],
            [
                "usage" => "PODCASTS"
            ],
            [
                "usage" => "AUTO-LEVEL"
            ]
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Samson Q9U XLR/USB Dynamic Broadcast Microphone";
        $microphone->price = 199;
        $microphone->frequency_response = "50Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "SPEECH"
            ],
            [
                "usage" => "USB/XLR"
            ],
            [
                "usage" => "PODCASTS"
            ],
            [
                "usage" => "TRANSMISIONES"
            ]
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SENNHEISER);
        $microphone->model = "e 609 Silver";
        $microphone->price = 99.95;
        $microphone->frequency_response = "40Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "AMPLIFICADORES"
            ],
            [
                "usage" => "DURABLE"
            ],
            [
                "usage" => "SIMPLEZA"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SENNHEISER);
        $microphone->model = "MD 421-II";
        $microphone->price = 399.95;
        $microphone->frequency_response = "30Hz-17kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "HEAVY-DUTY"
            ],
            [
                "usage" => "CLARIDAD"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SENNHEISER);
        $microphone->model = "MD 441U";
        $microphone->price = 999;
        $microphone->frequency_response = "30Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "BROADCAST"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ELECTROVOICE);
        $microphone->model = "Electro-Voice RE20";
        $microphone->price = 449;
        $microphone->frequency_response = "45Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "BROADCAST"
            ],
            [
                "usage" => "RADIO"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ELECTROVOICE);
        $microphone->model = "Electro-Voice ND46";
        $microphone->price = 149;
        $microphone->frequency_response = "70Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "GUITARRA"
            ],
            [
                "usage" => "BAJOS"
            ],
            [
                "usage" => "PERCUSIONES"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "PGA48-QTR";
        $microphone->price = 39;
        $microphone->frequency_response = "70Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "ESTUDIO VOCALS"
            ],
            [
                "usage" => "SPEECH"
            ],
            [
                "usage" => "KARAOKE"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ELECTROVOICE);
        $microphone->model = "Electro-Voice RE50N/D-B";
        $microphone->price = 199;
        $microphone->frequency_response = "50Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "ENTREVISTAS"
            ],
            [
                "usage" => "HEAVY-DUTY"
            ],
            [
                "usage" => "KARAOKE"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SENNHEISER);
        $microphone->model = "Sennheiser e 608";
        $microphone->price = 179.95;
        $microphone->frequency_response = "40Hz-16kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "FORMA ADAPTABLE"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode M1";
        $microphone->price = 99;
        $microphone->frequency_response = "75Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "LIVE VOCALS"
            ],
            [
                "usage" => "HEAVY-DUTY"
            ],
            [
                "usage" => "STAGE"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SAMSON);
        $microphone->model = "Samson Q8x";
        $microphone->price = 99.99;
        $microphone->frequency_response = "50Hz-16kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "MIDRANGE CLARITY"
            ],
            [
                "usage" => "HIGH OUTPUT"
            ],
            [
                "usage" => "FLAT FREQUENCY RESPONSE"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::BEHRINGER);
        $microphone->model = "Behringer XM8500";
        $microphone->price = 19;
        $microphone->frequency_response = "50Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "LIVE VOCALS"
            ],
            [
                "usage" => "HEAVY-DUTY"
            ],
            [
                "usage" => "TWO STAGE POP FILTER"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::TELEFUNKEN);
        $microphone->model = "Telefunken M80";
        $microphone->price = 249;
        $microphone->frequency_response = "50Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "SUPER SENSIBLE"
            ],
            [
                "usage" => "LIVE VOCALS"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::TELEFUNKEN);
        $microphone->model = "Telefunken M81-SH";
        $microphone->price = 249;
        $microphone->frequency_response = "50Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "COMPACTO"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "FLATTER"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::BLUE);
        $microphone->model = "Blue enCORE 200";
        $microphone->price = 249;
        $microphone->frequency_response = "50Hz-16kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "BROADCAST"
            ],
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "FLATTER"
            ],
        ]);
        $microphone->save();


        // CONDENSER

        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode NT1-A";
        $microphone->price = 229;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "CABINETS"
            ],
            [
                "usage" => "INSTRUMENTS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::TOWNSEND);
        $microphone->model = "Townsend Labs Sphere L22 Microphone Modeling System";
        $microphone->price = 1499;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE, PolarPattern::OMNIDIRECCIONAL, PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "MULTI-PATRON"
            ],
            [
                "usage" => "SISTEMA DE MODELADO"
            ],
            [
                "usage" => "VOCALS"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AKG);
        $microphone->model = "AKG P420";
        $microphone->price = 149;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE, PolarPattern::OMNIDIRECCIONAL, PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "MULTI-PATRON"
            ],
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "AMBIENTAL"
            ],
            [
                "usage" => "LIVE VOCALS"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AKG);
        $microphone->model = "AKG C414 XLII";
        $microphone->price = 1099;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([
            PolarPattern::CARDIOIDE,
            PolarPattern::OMNIDIRECCIONAL,
            PolarPattern::BIDIRECCIONAL,
            PolarPattern::HIPERCARDIOIDE,
            PolarPattern::CARDIOIDE_AMPLIO
        ]);
        $microphone->uses()->createMany([
            [
                "usage" => "MULTI-PATRON"
            ],
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "AMBIENTAL"
            ],
            [
                "usage" => "LIVE VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::WARM_AUDIO);
        $microphone->model = "Warm Audio WA-47";
        $microphone->price = 899;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([
            PolarPattern::CARDIOIDE,
            PolarPattern::OMNIDIRECCIONAL,
            PolarPattern::BIDIRECCIONAL,
            PolarPattern::HIPERCARDIOIDE,
            PolarPattern::MIXED
        ]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "AMBIENTAL"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::BLUE);
        $microphone->model = "Blue Bluebird SL";
        $microphone->price = 299;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([
            PolarPattern::CARDIOIDE,
        ]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "ORQUESTA"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::NEUMANN);
        $microphone->model = "Neumann TLM 102";
        $microphone->price = 699;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([
            PolarPattern::CARDIOIDE,
        ]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "HEAVY-DUTY"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::MANLEY);
        $microphone->model = "Manley Reference Cardioid";
        $microphone->price = 2999;
        $microphone->frequency_response = "10Hz-30kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([
            PolarPattern::CARDIOIDE,
        ]);
        $microphone->uses()->createMany([
            [
                "usage" => "SUPER VOCALS"
            ],
            [
                "usage" => "LEGENDARY"
            ],
            [
                "usage" => "DE TUBOS"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::NEUMANN);
        $microphone->model = "Neumann U 87 Ai";
        $microphone->price = 3200;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE, PolarPattern::OMNIDIRECCIONAL, PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "MULTI-PATRON"
            ],
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "AMBIENTAL"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::NEUMANN);
        $microphone->model = "Aston Microphones Origin";
        $microphone->price = 299;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "GUITARRAS ACUSTICAS"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
        ]);
        $microphone->save();

    }
}
