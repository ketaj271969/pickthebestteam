<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PtbtRegion;

class AdminRegionsController extends Controller
{
    //
    
    public function index()
    {
        //$regions = DB::table('ptbtregion')->get();
        $regions = PtbtRegion::all();
        
        //return view('region.index', ['regions' => $regions]);
        return view('regions.index', compact('regions'));
    }
    
    public function show($id)
    {
        //
        $regions = PtbtRegion::findOrFail($id);
        return view('regions.show', compact('regions'));
    }
    
}
