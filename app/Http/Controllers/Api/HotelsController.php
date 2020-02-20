<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hotel;

class HotelsController extends Controller
{
    public function index() {
        $hotels = Hotel::all();
        return response()->json($hotels);
    }

    public function store(Request $request) {
        $hotel = new Hotel($request->all());
        $hotel->save();
        return response()->json($hotel);
    }
    public function show(Hotel $hotel) {
        return response()->json($hotel);
    }
    public function update(Request $request, Hotel $hotel) {
        $hotel->fill($request->all());
        $hotel->save();
        return response()->json($hotel);
    }
    public function destroy(Hotel $hotel){
        $hotel->delete();
        return response()->noContent();
    }
}
