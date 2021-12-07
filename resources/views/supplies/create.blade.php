@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Abastecimento</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/supplies" method="POST">
        @csrf
        <div class="form-group">
            <label for="vehicle_id">Veículo:</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control ">
                <option value="{{ null }}"> Selecione um veículo </option>
                @foreach($vehicles as $vehicle)
                    <option value="{{ $vehicle->id }}"> {{ $vehicle->board }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="driver_id">Motorista:</label>
            <select name="driver_id" id="driver_id" class="form-control">
            <option value="{{null}}">Selecione</option>
                @foreach($drivers as $driver)
                    <option value="{{ $driver->id }}"> {{ $driver->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div>
        <div class="form-group">
            <label for="fuel_id">Tipo de combustível:</label>
            <select name="fuel_id" id="fuel_id" class="form-control">
            <option value="{{null}}">Selecione</option>
                @foreach($fuels as $fuel)
                    @if($fuel->typeFuel != "Flex")
                        <option value="{{ $fuel->id }}"> {{ $fuel->typeFuel }} </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="qtySupplied">Quantidade abastecida:</label>
            <input type="text" class="form-control" id="qtySupplied" name="qtySupplied" placeholder="Quantidade abastecida...">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Abastecimento">
    </form>
</div>


@endsection