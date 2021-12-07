@extends('layouts.main')
@section('title', 'Editando: ' . $fuel->typeFuel)
@section('content')



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $fuel->typeFuel }}</h1>
    <form action="/fuels/update/{{$fuel->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="typeFuel">Nome:</label>
            <input type="text" class="form-control" id="typeFuel" name="typeFuel" placeholder="Nome do combustível..." value="{{ $fuel->typeFuel }}">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço do combustível..." value="{{ $fuel->price }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Combustível">
    </form>
</div>



@endsection