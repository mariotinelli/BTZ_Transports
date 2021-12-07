@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container p-5">
    <h1>Veículos</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/vehicles/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
        <div class="col text-right"> 
            <form action="/vehicles/dashboard" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar placa">
            </form>
        </div>
    </div>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th scope="col">Placa</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo de Combustível</th>
                <th scope="col">Fabricante</th>
                <th scope="col">Ano de Fabricação</th>
                <th scope="col">Capacidade Máxima do Tanque</th>
                <th scope="col">Observações</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td scropt="row"> {{ $vehicle->board }} </td>
                    <td> {{ $vehicle->vehicleName }} </td>
                    <td> {{ $vehicle->fuel->typeFuel }} </td>
                    <td> {{ $vehicle->manufacturer }} </td>
                    <td> {{ $vehicle->yearManufacturer }} </td>
                    <td> {{ $vehicle->maximumTankCapacity }} </td>
                    <td> {{ $vehicle->comments }} </td>
                    <td>
                    <a href="/vehicles/edit/{{ $vehicle->id }}" class="btn btn-info edit-btn btn-sm"><ion-icon name="create-outline"></ion-icon></a> 
                    <form action="/vehicles/{{$vehicle->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection