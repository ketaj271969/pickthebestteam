<?php

namespace App\Http\Controllers;

use App\PtbtCity;
use App\PtbtRegion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminCitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $cities = PtbtCity::all();
        
        return view('/admin/cities/index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $regions = PtbtRegion::all();
        
        return view('/admin/cities/create', compact('regions'));
        //return "itworks";
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
        PtbtCity::create($request->all());
        return redirect('/admin/cities');
        //return "it works";
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
        $cities = PtbtCity::findOrFail($id);
        return view('city.show', compact('cities'));
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
        $cities = PtbtCity::findOrFail($id);
        return view('/admin/cities/edit', compact('cities'));
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
        $cities = PtbtCity::findOrFail($id);
        $cities->update($request->all());
        return redirect('/admin/cities');
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
        $cities = PtbtCity::whereId($id)->delete();
        return redirect('/admin/cities');
    }

    public function ptbtcity()

    {
        $ptbtstprov_id = Input::get('PTBTStProvId');
        $ptbtcity = ptbtcity::where('PTBTStProvId', '=', $ptbtstprov_id)->get();
        return response()->json($ptbtcity);
    }
}
