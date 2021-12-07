<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\EditDriverRequest;
use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    
    public function index (){
        $drivers = Driver::all();
        return view('welcome', ['drivers' => $drivers]);    
    }

    public function dashboard(){

        $search = request('search');
        
        if($search){
            $drivers = Driver::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $drivers = Driver::all();
        }

        return view('drivers.dashboard', ['drivers' => $drivers, 'search' => $search]);
    }

    public function create(){
        return view('drivers.create');
    }

    public function store(StoreDriverRequest $request){
        $data = $request->validated();

        $driver = new Driver;
        $driver->name = $data['name']; 
        $driver->cpf = $data['cpf']; 
        $driver->cnhNumber = $data['cnhNumber']; 
        $driver->cnhCategory = $data['cnhCategory']; 
        $driver->birthDate = $data['birthDate'];
        $driver->status = $data['status'];

        $driver->save();

        return redirect('/drivers/dashboard')->with('msg', 'Motorista cadastro com sucesso!');
    }

    public function show($id){

        $driver = Driver::findOrFail($id);

        return view('drivers.show', ['driver' => $driver]);

    }

    public function edit($id){
        $driver = Driver::findOrFail($id);
        return view('drivers.edit', ['driver' => $driver]);
    }

    public function update(EditDriverRequest $request){
        Driver::findOrFail($request->id)->update($request->all());
        return redirect('/drivers/dashboard')->with('msg', 'Motorista editado com sucesso!');
    }

    public function destroy($id){
        Driver::findOrFail($id)->delete();
        return redirect('/drivers/dashboard')->with('msg', 'Motorista deletado com sucesso!');
    }

}
