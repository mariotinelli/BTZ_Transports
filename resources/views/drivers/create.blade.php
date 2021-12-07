@extends('layouts.main')
@section('title', 'BTZ Transports')
@section('content')



<div id="driver-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Motorista</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/drivers" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do motorista">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF do motorista">
        </div>
        <div class="form-group">
            <label for="cnhNumber">Número da CNH:</label>
            <input type="text" class="form-control" id="cnhNumber" name="cnhNumber" placeholder="Número da CNH do motorista">
        </div>
        <div class="form-group">
            <label for="cnhCategory">Categoria da CNH:</label>
            <select name="cnhCategory" id="cnhCategory" class="form-control">
                <option value="{{null}}">Selecione uma categoria</option>
                <option value="Categoria A">Categoria A</option>
                <option value="Categoria B">Categoria B</option>                
                <option value="Categoria C">Categoria C</option>
                <option value="Categoria D">Categoria D</option>
                <option value="Categoria E">Categoria E</option>
                <option value="Categoria AB">Categoria AB</option>
                <option value="Categoria AC">Categoria AC</option>
                <option value="Categoria AD">Categoria AD</option>
                <option value="Categoria AE">Categoria AE</option>
            </select>
        </div>
        <div class="form-group">
            <label for="birthDate">Data de Nascimento:</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" palceholder="Data de nascimento do motorista">
        </div>
        <div class="form-group">
            <label for="status">O motorista está ativo?</label>
            <select name="status" id="status" class="form-control">
                <option value="{{null}}">Selecione um status</option>
                <option value="Inativo">Inativo</option>
                <option value="Ativo">Ativo</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Motorista">
    </form>
</div>


@endsection