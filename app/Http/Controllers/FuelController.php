<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFuelRequest;
use App\Http\Requests\EditFuelRequest;
use App\Models\Fuel;

class FuelController extends Controller
{
    public function dashboard(){

        $search = request('search');
        
        if($search){
            $fuels = Fuel::where([
                ['typeFuel', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $fuels = Fuel::all();
        }

        return view('fuels.dashboard', ['fuels' => $fuels, 'search' => $search]);
    }

    public function create(){
        return view('fuels.create');
    }

    public function store(StoreFuelRequest $request){
        $data = $request->validated();

        $fuel = new Fuel;
        $fuel->typeFuel = $data['typeFuel'];
        $fuel->price = $data['price'];

        $fuel->save();

        return redirect('/fuels/dashboard')->with('msg', 'Combustível cadastro com sucesso!');
    }

    public function show($id){

        $fuel = Fuel::findOrFail($id);

        return view('fuels.show', ['fuel' => $fuel]);

    }

    public function edit($id){
        $fuel = Fuel::findOrFail($id);
        return view('fuels.edit', ['fuel' => $fuel]);
    }

    public function update(EditFuelRequest $request){
        Fuel::findOrFail($request->id)->update($request->all());
        return redirect('/fuels/dashboard')->with('msg', 'Combustível editado com sucesso!');
    }

    public function destroy($id){
        Fuel::findOrFail($id)->delete();
        return redirect('/fuels/dashboard')->with('msg', 'Combustível deletado com sucesso!');
    }

}
