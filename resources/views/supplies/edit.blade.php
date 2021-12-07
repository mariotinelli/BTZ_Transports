@extends('layouts.main')
@section('title', 'Editando')
@section('content')

<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Editando Abastecimento</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/supplies/update/{{$supply->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="vehicle_id">Veículo:</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control ">
                <option value="{{$supply->vehicle->id}}"> {{$supply->vehicle->board}} </option>
                @foreach($vehicles as $vehicle)
                @if($vehicle->board != $supply->vehicle->board)
                    <option value="{{ $vehicle->id }}"> {{ $vehicle->board }} </option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="driver_id">Motorista:</label>
            <select name="driver_id" id="driver_id" class="form-control">
            <option value="{{$supply->driver->id}}">{{$supply->driver->name}}</option>
                @foreach($drivers as $driver)
                @if($driver->name != $supply->driver->name)
                    <option value="{{ $driver->id }}"> {{ $driver->name }} </option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date" palceholder="Data do abastecimento" value="{{ date('Y-m-d', strtotime($supply->date)) }}">
        </div>
        <div class="form-group">
            <label for="fuel_id">Tipo de combustível:</label>
            <select name="fuel_id" id="fuel_id" class="form-control">
            <option value="{{$supply->fuel->id}}">{{$supply->fuel->typeFuel}}</option>
                @foreach($fuels as $fuel)
                    @if($fuel->typeFuel != "Flex" && $fuel->typeFuel != $supply->fuel->typeFuel)
                        <option value="{{ $fuel->id }}"> {{ $fuel->typeFuel }} </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="qtySupplied">Quantidade abastecida:</label>
            <input type="text" class="form-control" id="qtySupplied" name="qtySupplied" placeholder="Quantidade abastecida" value="{{$supply->qtySupplied}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Abastecimento">
    </form>
</div>


@endsection