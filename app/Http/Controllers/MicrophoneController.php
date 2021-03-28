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
        $microphones = Microphone::query()->orderBy('model')->get();
        $microphones->load(['uses', 'type', 'patterns', 'brand']);
        return response()->json($microphones);
    }

    public function apiGetBrands(): JsonResponse
    {
        $brands = Brand::query()->orderBy('brand')->get();
        return response()->json($brands);
    }

    public function apiGetTypes(): JsonResponse
    {
        $types = MicrophoneType::query()->orderBy('type')->get();
        return response()->json($types);
    }

    public function apiGetPolarPatterns(): JsonResponse
    {
        $microphones = PolarPattern::query()->orderBy('pattern')->get();
        return response()->json($microphones);
    }
}
