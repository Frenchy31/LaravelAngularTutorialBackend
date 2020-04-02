<?php

namespace App\Http\Controllers;

use App\Appareil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AppareilController extends Controller
{
    public function update(Request $request, $id){
        $appareil = Appareil::find($id);
        $appareil->status = $request->status;
        Log::info($request);
        $appareil->save();
        return response()->json([''],200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function delete($id){
        Appareil::destroy($id);
        return response()->json([''],200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
}
