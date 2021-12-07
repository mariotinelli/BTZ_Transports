@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Veículos</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/vehicles" method="POST">
        @csrf
        <div class="form-group">
            <label for="board">Placa:</label>
            <input type="text" class="form-control" id="board" name="board" placeholder="Apenas letras e números.">
        </div>
        <div class="form-group">
            <label for="vehicleName">Nome:</label>
            <input type="text" class="form-control" id="vehicleName" name="vehicleName" placeholder="Nome do veículo">
        </div>
        <div class="form-group">
            <label for="fuel_id">Tipo do combustível</label>
            <select name="fuel_id" id="fuel_id" class="form-control">
            <option value="{{null}}">Selecione</option>
                @foreach($fuels as $fuel)
                    <option value="{{ $fuel->id }}"> {{ $fuel->typeFuel }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="manufacturer">Fabricante</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Fabricante">
        </div>
        <div class="form-group">
            <label for="yearManufacturer">Ano de fabricação:</label>
            <input type="text" class="form-control" id="yearManufacturer" name="yearManufacturer" placeholder="Ano de fabricação">
        </div>
        <div class="form-group">
            <label for="maximumTankCapacity">Capacidade máxima do tanque:</label>
            <input type="text" class="form-control" id="maximumTankCapacity" name="maximumTankCapacity" placeholder="Capacidade máxima do tanque em litros">
        </div>
        <div class="form-group">
            <label for="comments">Observações:</label>
            <textarea class="form-control" id="comments" name="comments" placeholder="Observações..."></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Veículo">
    </form>
</div>


@endsection