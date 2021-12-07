@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <h1>Combustíveis</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/fuels/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
        <div class="col text-right"> 
            <form action="/fuels/dashboard" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar por nome">
            </form>
        </div>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
        @foreach($fuels as $fuel)
            <tr>
                <td scropt="row"> {{$fuel->typeFuel}} </a></td>
                <td> {{$fuel->price}} </td>
                <td>
                    <a href="/fuels/edit/{{ $fuel->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon></a> 
                    <form action="/fuels/{{$fuel->id}}" method="POST">
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