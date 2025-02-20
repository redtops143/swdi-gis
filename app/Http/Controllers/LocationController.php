<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\Municipality;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        
        return view('generate-gis', compact('provinces'));
    }

    public function getMunicipalities(Request $request)
    {
        $municipalities = DB::table('municipalities')
                          ->join('provinces','municipalities.province_id','provinces.id')
                          ->where('PROVINCE',$request->PROVINCE)
                          ->get();
        //dd($request->PROVINCE);
        //Municipality::where('PROVINCE', $request->PROVINCE)->get();
        
        return response()->json($municipalities);
    }

    public function submitLocation(Request $request)
    {
        
        //dd($request->province);

        $request->validate([
            'province' => 'required|exists:provinces,PROVINCE',
            'municipality' => 'required|exists:municipalities,MUNICIPALITY',
        ]);
           
        return back()->with('success', 'Location submitted successfully!');
    }
}
