@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container p-5">
    <h1>Motoristas</h1>
    <div class="row p-3">
        <div class="col-10">
            <a href="/drivers/create" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar um Novo</a>
        </div>
        <div class="col text-right"> 
            <form action="/drivers/dashboard" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar por nome">
            </form>
        </div>
    </div>
    <table class='table'>   
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Número da CNH</th>
                <th scope="col">Categoria da CNH</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            @foreach($drivers as $driver)
            <tr>
                <td scropt="row"> {{$driver->name}} </a></td>
                <td> {{$driver->cpf}} </td>
                <td> {{$driver->cnhNumber}} </td>
                <td> {{$driver->cnhCategory}} </td>
                <td> {{ date('d/m/Y', strtotime($driver->birthDate))}} </td>               
                <td> {{ $driver->status }}</td>

                <td>
                    <a href="/drivers/edit/{{ $driver->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon></a> 
                    <form action="/drivers/{{$driver->id}}" method="POST">
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