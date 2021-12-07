@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Combustível</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/fuels" method="POST">
        @csrf
        <div class="form-group">
            <label for="typeFuel">Nome:</label>
            <input type="text" class="form-control" id="typeFuel" name="typeFuel" placeholder="Nome do combustível">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço do combustível">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Combustível">
    </form>
</div>


@endsection