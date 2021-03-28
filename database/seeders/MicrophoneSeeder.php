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
        $microphone->brand()->associate(Brand::ASTON_MICROPHONES);
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


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::NEUMANN);
        $microphone->model = "Neumann KM 184";
        $microphone->price = 1500;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "METALES"
            ],
            [
                "usage" => "ORQUESTAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SAMSON);
        $microphone->model = "Samson C02";
        $microphone->price = 129;
        $microphone->frequency_response = "50Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "ACUSTICOS"
            ],
            [
                "usage" => "VOCES DISCRETAS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::BEHRINGER);
        $microphone->model = "Behringer C-2";
        $microphone->price = 49;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "OVERHEADS"
            ],
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "ORQUESTAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure KSM137";
        $microphone->price = 665;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "GUITARRA ACUSTICA"
            ],
            [
                "usage" => "OVERHEADS"
            ],
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "ORQUESTAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure SM81";
        $microphone->price = 349;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "GUITARRA ACUSTICA"
            ],
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "OVERHEAD"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::BLUE);
        $microphone->model = "Blue Ember";
        $microphone->price = 99;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "GUITARRA ACUSTICA"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "AMPLIFICADORES"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure SM137";
        $microphone->price = 179;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "GUITARRA ACUSTICA"
            ],
            [
                "usage" => "OVERHEADS"
            ],
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "ORQUESTAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::WARM_AUDIO);
        $microphone->model = "Warm Audio WA-84";
        $microphone->price = 399;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE, PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "GUITARRA ACUSTICA"
            ],
            [
                "usage" => "OVERHEADS"
            ],
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "ORQUESTAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::EARTHWORKS);
        $microphone->model = "Earthworks SR314";
        $microphone->price = 699;
        $microphone->frequency_response = "20Hz-30kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "STAGE VOCALS"
            ],
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "MINIMAL PROXIMITY EFFECT"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::EARTHWORKS);
        $microphone->model = "Earthworks QTC40mp";
        $microphone->price = 1998;
        $microphone->frequency_response = "3Hz-40kHz";
        $microphone->type()->associate(MicrophoneType::CONDENSADOR);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "TRANSPARENTE"
            ],
            [
                "usage" => "PERCUSIONES"
            ],
            [
                "usage" => "ORQUESTAL"
            ],
            [
                "usage" => "SUPER SENSIBILIDAD"
            ],
        ]);
        $microphone->save();


        // CINTA

        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ROYER);
        $microphone->model = "Royer R-10";
        $microphone->price = 499;
        $microphone->frequency_response = "30Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "CLOSE UP"
            ],
            [
                "usage" => "STUDIO VOCALS"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "DUETOS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::BEYERDYNAMIC);
        $microphone->model = "Beyerdynamic M 160";
        $microphone->price = 699;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::HIPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "CUERDAS"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "CINE & TELEVISION"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AEA);
        $microphone->model = "AEA R88A";
        $microphone->price = 2399;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "CUERDAS"
            ],
            [
                "usage" => "PIANO"
            ],
            [
                "usage" => "VOCES DISCRETAS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AEA);
        $microphone->model = "AEA A440 ";
        $microphone->price = 5799;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "136dB SPL"
            ],
            [
                "usage" => "ORQUESTAL"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure KSM313/NE";
        $microphone->price = 1295;
        $microphone->frequency_response = "30Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "AMPLIFICADORES"
            ],
            [
                "usage" => "146dB SPL"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::GOLDEN_AGE);
        $microphone->model = "Golden Age Project R2 MKII";
        $microphone->price = 169.99;
        $microphone->frequency_response = "30Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "AMPLIFICADORES"
            ],
            [
                "usage" => "137dB SPL"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode NTR";
        $microphone->price = 799;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "AMPLIFICADORES"
            ],
            [
                "usage" => "METALES"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::CLOUD);
        $microphone->model = "Cloud Microphones 44-A";
        $microphone->price = 1499;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "VOCAL/MUSIC SWITCH"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "VOCALS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ROYER);
        $microphone->model = "Royer R-122V";
        $microphone->price = 3095;
        $microphone->frequency_response = "30Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "VOCALS"
            ],
            [
                "usage" => "AMPLIFICADORES"
            ],
            [
                "usage" => "CUERDAS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::GOLDEN_AGE);
        $microphone->model = "Golden Age Project R1 ST";
        $microphone->price = 599;
        $microphone->frequency_response = "30Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::CINTA);
        $microphone->patterns()->sync([PolarPattern::BIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "VOCALS"
            ],
            [
                "usage" => "OVERHEAD"
            ],
            [
                "usage" => "BLUMLEIN"
            ],
        ]);
        $microphone->save();


        // SHOTGUN

        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SENNHEISER);
        $microphone->model = "Sennheiser MKH 416";
        $microphone->price = 999;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "LOCATION SHOOTING"
            ],
            [
                "usage" => "DIRECTIVIDAD"
            ],
            [
                "usage" => "LOW NOISE"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode VideoMic NTG ";
        $microphone->price = 249;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DOCUMENTAL"
            ],
            [
                "usage" => "LIVESTREAMS"
            ],
            [
                "usage" => "MONTADO"
            ],
            [
                "usage" => "USB"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode VideoMic NTG ";
        $microphone->price = 249;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DOCUMENTAL"
            ],
            [
                "usage" => "LIVESTREAMS"
            ],
            [
                "usage" => "MONTADO"
            ],
            [
                "usage" => "USB"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AUDIO_TECHNICA);
        $microphone->model = "Audio-Technica AT8035";
        $microphone->price = 269;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "DIRECCIONAL"
            ],
            [
                "usage" => "OUTDOOR"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SCHOEPS);
        $microphone->model = "Schoeps CMIT 5 U";
        $microphone->price = 2299;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "MUSICA"
            ],
            [
                "usage" => "DIALOGO"
            ],
            [
                "usage" => "ROLL-OFF SWITCH"
            ],
            [
                "usage" => "LOW-CUT FILTER"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::DPA);
        $microphone->model = "DPA 4097 CORE";
        $microphone->price = 585;
        $microphone->frequency_response = "80Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "MINIATURA"
            ],
            [
                "usage" => "ENTREVISTAS"
            ],
            [
                "usage" => "USO EN SETS"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SARAMONIC);
        $microphone->model = "Saramonic Vmic Mini";
        $microphone->price = 59;
        $microphone->frequency_response = "75Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "MINIATURA"
            ],
            [
                "usage" => "MONTADO"
            ],
            [
                "usage" => "EN MOVILES"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode VideoMic Pro+";
        $microphone->price = 299;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "MONTADO"
            ],
            [
                "usage" => "CLIPPING-SAFE"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode NTG-8";
        $microphone->price = 999;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "ALTA SENSIBILIDAD"
            ],
            [
                "usage" => "DIRECCIONAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ACACIA);
        $microphone->model = "Acacia LIZ";
        $microphone->price = 219.99;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "FILM - RADIO - TV"
            ],
            [
                "usage" => "DIRECCIONAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ACACIA);
        $microphone->model = "Acacia LIZ";
        $microphone->price = 219.99;
        $microphone->frequency_response = "30Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "FILM - RADIO - TV"
            ],
            [
                "usage" => "DIRECCIONAL"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode NTG-3";
        $microphone->price = 699;
        $microphone->frequency_response = "40Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::SHOTGUN);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "EXTERIOR"
            ],
            [
                "usage" => "HEAVY-DUTY"
            ],
        ]);
        $microphone->save();


        // LAVALIER

        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::RODE);
        $microphone->model = "Rode Lavalier GO";
        $microphone->price = 79;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "KEVLAR-REINFORCED"
            ],
            [
                "usage" => "HEAVY-DUTY"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure WL185";
        $microphone->price = 108;
        $microphone->frequency_response = "50Hz-17kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "WIRELESS"
            ],
            [
                "usage" => "NOISE REDUCTION"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SENNHEISER);
        $microphone->model = "Sennheiser ME 2-II";
        $microphone->price = 129.95;
        $microphone->frequency_response = "50Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "WIRELESS"
            ],
            [
                "usage" => "DISCRETO"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure WL93";
        $microphone->price = 78;
        $microphone->frequency_response = "50Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "WIRELESS"
            ],
            [
                "usage" => "STANDARD"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AUDIO_TECHNICA);
        $microphone->model = "Audio-Technica Pro 70";
        $microphone->price = 139;
        $microphone->frequency_response = "100Hz-14kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "VOCALS"
            ],
            [
                "usage" => "GUITARRA ACUSTICA"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure CVL-TQG";
        $microphone->price = 39;
        $microphone->frequency_response = "50Hz-14kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "NOISE REDUCTION"
            ],
            [
                "usage" => "STANDARD"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::COUNTRYMAN);
        $microphone->model = "Countryman B3";
        $microphone->price = 189;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "SENNHEISSER COMPATIBLE"
            ],
            [
                "usage" => "HIGH QUALITY"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ACACIA);
        $microphone->model = "Acacia LIZ Platinum";
        $microphone->price = 229.99;
        $microphone->frequency_response = "50Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "CONFERENCIAS"
            ],
            [
                "usage" => "XLR"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::DPA);
        $microphone->model = "DPA 6060 CORE";
        $microphone->price = 549.95;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "SUPER CLARO"
            ],
            [
                "usage" => "DE ACERO"
            ],
            [
                "usage" => "REPELENTE DE AGUA"
            ],
            [
                "usage" => "ADAPTADORES"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::DPA);
        $microphone->model = "DPA 4060 Mini";
        $microphone->price = 429.95;
        $microphone->frequency_response = "20Hz-20kHz";
        $microphone->type()->associate(MicrophoneType::LAVALIER);
        $microphone->patterns()->sync([PolarPattern::OMNIDIRECCIONAL]);
        $microphone->uses()->createMany([
            [
                "usage" => "DE CONDENSADOR"
            ],
            [
                "usage" => "RESISTENTE A HUMEDAD"
            ],
            [
                "usage" => "ADAPTADORES"
            ],
        ]);
        $microphone->save();


        // DRUM KICK


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AUDIX);
        $microphone->model = "Audix D6";
        $microphone->price = 199;
        $microphone->frequency_response = "30Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
            [
                "usage" => "CUALQUIER POSICION"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AVANTONE);
        $microphone->model = "Avantone Pro MONDO";
        $microphone->price = 129.99;
        $microphone->frequency_response = "20Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "SHOCKMOUNT"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AUDIO_TECHNICA);
        $microphone->model = "Audio-Technica ATM250";
        $microphone->price = 199;
        $microphone->frequency_response = "40Hz-15kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::HIPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
            [
                "usage" => "CORROSION RESISTANT"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::TELEFUNKEN);
        $microphone->model = "Telefunken M82";
        $microphone->price = 399;
        $microphone->frequency_response = "25Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "DEEP VOCALS"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
            [
                "usage" => "HIGH BOOST SWITCH"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AKG);
        $microphone->model = "AKG D112 MKII";
        $microphone->price = 199;
        $microphone->frequency_response = "20Hz-17kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "BASS"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SHURE);
        $microphone->model = "Shure Beta 52A";
        $microphone->price = 189;
        $microphone->frequency_response = "20Hz-10kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::SUPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "BASS"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::AKG);
        $microphone->model = "AKG D12 VR";
        $microphone->price = 499;
        $microphone->frequency_response = "17Hz-17kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
            [
                "usage" => "FILTER SWITCHES"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::SENNHEISER);
        $microphone->model = "Sennheiser e 602-II";
        $microphone->price = 149.95;
        $microphone->frequency_response = "20Hz-16kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
            [
                "usage" => "FILTER SWITCHES"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::BEYERDYNAMIC);
        $microphone->model = "Beyerdynamic TG D70";
        $microphone->price = 249;
        $microphone->frequency_response = "20Hz-14kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::HIPERCARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
            [
                "usage" => "PUNCHY"
            ],
        ]);
        $microphone->save();


        $microphone = Microphone::create();
        $microphone->brand()->associate(Brand::ELECTROVOICE);
        $microphone->model = "Electro-Voice RE320";
        $microphone->price = 249;
        $microphone->frequency_response = "30Hz-18kHz";
        $microphone->type()->associate(MicrophoneType::DINAMICO);
        $microphone->patterns()->sync([PolarPattern::CARDIOIDE]);
        $microphone->uses()->createMany([
            [
                "usage" => "KICK"
            ],
            [
                "usage" => "INSTRUMENTOS"
            ],
            [
                "usage" => "STAGE"
            ],
            [
                "usage" => "STUDIO"
            ],
            [
                "usage" => "HUMBUCKING"
            ],
            [
                "usage" => "KICK/GENERAL SWITCH"
            ],
        ]);
        $microphone->save();

    }
}
