@extends('Template.template')

@section('content')
<h1 class="text-center">PSI CRUD Laravel</h1>
<hr>
<div class="col-8 m-auto">

    <h4>Castrar Despesa</h4>
    <br>
    <form action="{{ route('Despesa.store')}}" method="POST">

        @csrf
        <label>Unidade Demandante</label>
        <input type="text" name="Unidade" value="{{old('Unidade')}}">
        @error('Unidade')
        <div class="alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
        <br>
        <label>Data</label>
        <input type="text" name="Data" value="{{old('Data')}}">
        @error('Data')
        <div class="alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
        <br>
        <label>Valor Total</label>
        <input type="text" name="Valor" value="{{old('Valor')}}">
        @error('Valor')
        <div class="alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
        <br>
        <label>Observação</label>
        <input type="text" name="observacao" value="{{old('observacao')}}">
        <br><br>
        <button class="btn btn-outline-success">Salvar Despesa</button>
        </form>
</div>
    @endsection