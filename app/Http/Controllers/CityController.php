<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function all(){
        $cities = City::get();
        return view('index',[
            'cities' => $cities
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->only('name', 'visitedDate');
        $city = City::create([
            'name' => $data['name'],
            'visitedDate' => $data['visitedDate']
        ]);
        if($data['visitedDate']){
            $city->isVisited = true;
        }
        $city->save();
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $city = City::find($id);
        return view('edit', [
            'city' => $city
        ]);
    }

    public function updateCity(Request $request){
        $data = $request->only('name', 'visitedDate', 'id');
        $city = City::find($request['id']);
        $city->name = $data['name'];
        $city->visitedDate = $data['visitedDate'];
        $city->save();
        return redirect()->route('home');
    }

    public function destroy(Request $request){
        $data = $request->only('id');
        $city = City::find($data['id']);
        if ($city) $destroy = City::destroy($data['id']);
        return redirect()->back();
    }
}
