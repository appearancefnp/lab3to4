<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cities = City::where('country_id', '=', $id)->get();
        return view('cities', ['country_id' => $id, 'cities' => $cities]);
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
        $city = City::where('city_id', '=', $id)->first();
        return view('city_update', ['city' => $city]);
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
        $request->validate([
            'city_name' => 'required',
        ]);
        $city = City::where('city_id','=',$id);
        $city->update(['city_name' => $request->city_name]);
        
        return redirect('/cities/' . $city->first()->country_id)->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::where('city_id', '=', $id);
        $country_id = $city->first()->country_id;
        $city->delete();
        return redirect('cities/' . $country_id)->with('success');
    }
    
    public function new($id) {
        $countries = Country::where('country_id', '=', $id)->get();
        return view('city_new', ['country_id' => $id, 'country_name' => $countries[0]->country_name]);
    }
    
    public function store($id, $name) {
        $city = new City();
        $city->city_name = $name;
        $city->country_id = $id;
        $city->save();
        return redirect('cities/'. $id);
    }
}
