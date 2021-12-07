@extends('layouts.main')
@section('title', 'Editando: ' . $vehicle->vehicleName)
@section('content')

<div id="vehicle-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $vehicle->vehicleName}}</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/vehicles/update/{{$vehicle->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="board">Placa:</label>
            <input type="text" class="form-control" id="board" name="board" placeholder="Placa do veículo..." value="{{$vehicle->board}}">
        </div>
        <div class="form-group">
            <label for="vehicleName">Nome:</label>
            <input type="text" class="form-control" id="vehicleName" name="vehicleName" placeholder="Nome do veículo..." value="{{$vehicle->vehicleName}}">
        </div>
        <div class="form-group">
            <label for="fuel_id">Tipo do combustível</label>
            <select name="fuel_id" id="fuel_id" class="form-control">
                <option value="{{$vehicle->fuel->id}}">{{$vehicle->fuel->typeFuel}}</option>
                @foreach($fuels as $fuel)
                    @if($vehicle->fuel->typeFuel != $fuel->typeFuel)
                        <option value="{{ $fuel->id }}"> {{ $fuel->typeFuel }} </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="manufacturer">Fabricante</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Fabricante..." value="{{$vehicle->manufacturer}}">
        </div>
        <div class="form-group">
            <label for="yearManufacturer">Ano de fabricação:</label>
            <input type="text" class="form-control" id="yearManufacturer" name="yearManufacturer" placeholder="Ano de fabricação" value="{{ $vehicle->yearManufacturer }}">
        </div>
        <div class="form-group">
            <label for="maximumTankCapacity">Capacidade máxima do tanque:</label>
            <input type="text" class="form-control" id="maximumTankCapacity" name="maximumTankCapacity" placeholder="Capacidade máxima do tanque..." value="{{$vehicle->maximumTankCapacity}}">
        </div>
        <div class="form-group">
            <label for="comments">Observações:</label>
            <textarea class="form-control" id="comments" name="comments" placeholder="Observações..."> {{ $vehicle->comments }} </textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Veículo">
    </form>


@endsection