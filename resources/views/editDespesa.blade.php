@extends('Template.template')

@section('content')
<h1 class="text-center">PSI CRUD Laravel</h1>
<hr>
<div class="col-8 m-auto">

    <h4>Editar Despesa</h4>
    <br>
    <form action="/Despesa/update/{{$despesa->co_despesa}}" method="POST">

        @csrf
        <label>Unidade Demandante</label>
        <input type="text" name="Unidade" value="{{$despesa->co_unidade_demandante}}">
        @error('Unidade')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
        <br>
        <label>Data</label>
        <input type="text" name="Data" value="{{$despesa->dt_pagamento}}">
        @error('Data')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
        <br>
        <label>Valor Total</label>
        <input type="text" name="Valor" value="{{$despesa->vr_total}}">
        @error('Valor')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
        <br>
        <label>Observação</label>
        <input type="text" name="observacao" value="{{$despesa->observacao}}">
        <br><br>
        <button class="btn btn-outline-success">Salvar Despesa</button>
    </form>

    <form action="{{ route('Despesa.listar') }}" method="get">
        <button class="btn btn-outline-info">Desistir e Listar Despesas</button>
    </form>
</div>
@endsection