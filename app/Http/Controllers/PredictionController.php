<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PredictionController extends Controller
{
    public function predictSleepDisorder(Request $request){
        $data = $request->all();
        $data = $request->except('_token');
        $response = Http::post('http://127.0.0.1:5000/predictSleep', $data);
        if ($response->successful()) {
            $predictedSleepDisorder = $response->json()['predicted_sleep_disorder']??null;
            if ($predictedSleepDisorder !== null) {
                return $predictedSleepDisorder;
            } else {
                return response()->json(['error'=>'Failed'],500);
            }
            
        }
        else{
            return response()->json(['error'=>'Failed to predict'],$response->status());
        }
    }
}
