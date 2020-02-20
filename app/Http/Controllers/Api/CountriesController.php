<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function index() {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function store(Request $request) {
        $country = new Country($request->all());
        $country->save();
        return response()->json($country);
    }
    public function show(Country $country) {
        return response()->json($country);
    }
    public function update(Request $request, Country $country) {
        $country->fill($request->all());
        $country->save();
        return response()->json($country);
    }
    public function destroy(Country $country){
        $country->delete();
        return response()->noContent();
    }
}
