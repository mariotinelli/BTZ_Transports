<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\EditVehicleRequest;
use Illuminate\Support\MessageBag;
use App\Models\Vehicle;
use App\Models\Fuel;

class VehicleController extends Controller
{
    
    public function dashboard(){

        $search = request('search');
        
        if($search){
            $vehicles = Vehicle::where([
                ['board', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $vehicles = Vehicle::all();
        }

        return view('vehicles.dashboard', ['vehicles' => $vehicles, 'search' => $search]);
    }

    public function create(){
        
        $fuels = Fuel::all();

        return view('vehicles.create', ['fuels' => $fuels]);
    }

    public function store(StoreVehicleRequest $request){
        $data = $request->validated();

        $vehicle = new Vehicle;
        $vehicle->board = $data['board'];
        $vehicle->vehicleName = $data['vehicleName'];
        $vehicle->fuel_id = $data['fuel_id'];
        $vehicle->manufacturer = $data['manufacturer'];
        $vehicle->yearManufacturer = $data['yearManufacturer'];
        $vehicle->maximumTankCapacity = $data['maximumTankCapacity'];
        $vehicle->comments = $data['comments'];

        $vehicle->save();

        return redirect('/vehicles/dashboard')->with('msg', 'Veículo cadastrado com sucesso!');
    }

    public function show($id){

        $vehicle = Vehicle::findOrFail($id);

        return view('vehicles.show', ['vehicle' => $vehicle]);
    }

    public function edit($id){
        $fuels = Fuel::all();
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', ['vehicle' => $vehicle, 'fuels' => $fuels]);
    }

    public function update(EditVehicleRequest $request){
        Vehicle::findOrFail($request->id)->update($request->all());
        return redirect('/vehicles/dashboard')->with('msg', 'Veículo editado com sucesso!');
    }

    public function destroy($id){
        Vehicle::findOrFail($id)->delete();
        return redirect('/vehicles/dashboard')->with('msg', 'Veículo deletado com sucesso!');
    }

}
