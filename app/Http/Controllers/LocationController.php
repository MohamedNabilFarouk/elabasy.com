<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $validate_data = $request->validate([
            'city_id' =>'required',
            'lat' =>'required',
            'lng' => 'required',
            'address' => 'required',
        ]);


        $doctor = \Auth::user()->userable()->first();
        $location = new Location();
        $location->fill($request->all());
        DB::transaction(function () use($doctor,$request,$location){
            $doctor->location()->save($location);
        });


        return response()->json('تم حفظ المكان بنجاح',201);
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
}
