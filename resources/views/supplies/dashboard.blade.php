@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container p-5">
    <h1>Abastecimentos</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/supplies/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">Veículo</th>
                <th scope="col">Motorista</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo de Combustível</th>
                <th scope="col">Quantidade Abastecida</th>
                <th scope="col">Valor Total</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            @foreach($supplies as $supply)
                <tr>
                    <td scropt="row"> {{ $supply->vehicle->board }} </td>
                    <td> {{ $supply->driver->cpf }} </td>
                    <td> {{ date('d/m/Y', strtotime($supply->date))}} </td>
                    <td> {{ $supply->fuel->typeFuel }} </td>
                    <td> {{ $supply->qtySupplied }} </td>
                    <td> {{ $supply->totalValueSupply }} </td>
                    <td>
                        <form action="/supplies/{{$supply->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection