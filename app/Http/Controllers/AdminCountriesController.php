<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PtbtCountry;
use Illuminate\Support\Facades\Input;

class AdminCountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$regions = DB::table('ptbtregion')->get();
        $countries = PtbtCountry::all();
        
        //return view('region.index', ['regions' => $regions]);
        return view('country.index', compact('countries'));
       // return view('city.create', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findCountryName()
    {
        //
        $data=PtbtCountry::select('PTBTCountryName','id')->where('PTBTRegionId',
            $request->id)->take(100)->get();
            return response()->json($data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function ptbtcountry()
    {
        //$provinces_id = Input::get('province_id');
        //$regencies = Regencies::where('province_id', '=', $provinces_id)->get();
        //return response()->json($regencies);
        $ptbtregion_id = Input::get('PTBTRegionId');
        $countries = ptbtcountry::where('PTBTRegionId', '=', $ptbtregion_id)->get();
        return response()->json($countries);
    }
}
