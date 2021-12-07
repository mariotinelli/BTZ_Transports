<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplyRequest;
use App\Models\Supply;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Fuel;

class SupplyController extends Controller
{
    public function dashboard(){

        $supplies = Supply::all();

        return view('supplies.dashboard', ['supplies' => $supplies]);
    }

    public function create(){
        $vehicles = Vehicle::all();
        $drivers = Driver::all();
        $fuels = Fuel::all();
        return view('supplies.create', ['vehicles' => $vehicles, 'drivers' => $drivers, 'fuels' => $fuels]);
    }

    public function store(SupplyRequest $request){
        $data = $request->validated();

        $supply = new Supply;
        $supply->vehicle_id = $data['vehicle_id'];
        $supply->driver_id = $data['driver_id'];
        $supply->fuel_id = $data['fuel_id'];
        $supply->date = $data['date'];
        $supply->qtySupplied = $data['qtySupplied'];
        $vehicleFuel = $vehicle->fuel->typeFuel;
        $supplyFuel = $supply->fuel->typeFuel;

        if ($vehicle->maximumTankCapacity < $supply->qtySupplied){
            return redirect('/supplies/create')->with('msg', 'Quantidade abastecida maior que o tanque do veículo!');
        }
        else if ($vehicleFuel == $supplyFuel){
            $supply->totalValueSupply = $supply->qtySupplied * $supply->fuel->price;
            $supply->save();
        }
        else if ($vehicleFuel == "Flex"){
            if ($supplyFuel == "Etanol"){
                $supply->totalValueSupply = $supply->qtySupplied * 2.99;
                $supply->save();
            }
            else if ($supplyFuel == "Gasolina"){
                $supply->totalValueSupply = $supply->qtySupplied * 4.29;
                $supply->save();
            }
        }
        else{
            return redirect('/supplies/create')->with('msg', 'Tipos de combustíveis incompatíveis!');
        }

        return redirect('/supplies/dashboard')->with('msg', 'Abastecimento cadastro com sucesso!');
    }

    public function show($id){

        $supply = Supply::findOrFail($id);
        $driver = Driver::where('id', $supply->driver_id)->first()->toArray();

        return view('supplies.show', ['supply' => $supply, 'driver' => $driver]);

    }

    public function edit($id){
        $supply = Supply::findOrFail($id);
        $fuels = Fuel::all();
        $drivers = Driver::all();
        $vehicles = Vehicle::all();
        return view('supplies.edit', ['supply' => $supply, 'drivers' => $drivers, 'vehicles' => $vehicles, 'fuels' => $fuels]);
    }

    public function update(SupplyRequest $request){
        Supply::findOrFail($request->id)->update($request->all());
        return redirect('/supplies/dashboard')->with('msg', 'Abastecimento editado com sucesso!');
    }

    public function destroy($id){
        Supply::findOrFail($id)->delete();
        return redirect('/supplies/dashboard')->with('msg', 'Abastecimento deletado com sucesso!');
    }

}
