<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Microphone;
use App\Models\MicrophoneType;
use App\Models\PolarPattern;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MicrophoneController extends Controller
{

    public function apiGetAll(): JsonResponse
    {
        $microphones = Microphone::all();
        $microphones->load(['uses', 'type', 'patterns', 'brand']);
        return response()->json($microphones);
    }

    public function apiGetBrands(): JsonResponse
    {
        $brands = Brand::all();
        return response()->json($brands);
    }

    public function apiGetTypes(): JsonResponse
    {
        $types = MicrophoneType::all();
        return response()->json($types);
    }

    public function apiGetPolarPatterns(): JsonResponse
    {
        $microphones = PolarPattern::all();
        return response()->json($microphones);
    }
}
