@extends('Template.template')

@section('content')<div class="container mx-auto py-3 col-12">
    <div class="bg-blue-800 text-white py-2 mb-22 col-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-2">Excluir Despesa</h2>
        </div>
    </div>
    <div class="col-8 m-auto">
        <label for="nome" class="block border-black text-sm font-bold mb-2">Código:</label>
        <label for="nome" class="block border-black text-sm  mb-2"> {{$despesa->co_despesa}}</label>
        <label for="nome" class="block border-black text-sm font-bold mb-2">Unidade Demandante:</label>
        <label for="nome" class="block border-black text-sm  mb-2"> {{$despesa->co_unidade_demandante}}</label>
        <label for="nome" class="block border-black text-sm font-bold mb-2">Data:</label>
        <label for="nome" class="block border-black text-sm  mb-2"> {{$despesa->dt_pagamento}}</label>
        <label for="nome" class="block border-black text-sm font-bold mb-2">Usuário:</label>
        <label for="nome" class="block border-black text-sm mb-2"> {{$despesa->matricula_usuario_inclusao}}</label>
        <label for="nome" class="block border-black text-sm font-bold mb-2">Valor:</label>
        <label for="nome" class="block border-black text-sm  mb-2"> {{$despesa->vr_total}}</label>
        <label for="nome" class="block border-black text-sm font-bold mb-2">Observação:</label>
        <label for="nome" class="block border-black text-sm  mb-2"> {{$despesa->observacao}}</label>

    <table>
        <tr>
            <div class="col-1">

                <td>
                    <form action="{{ route('Despesa.listar') }}" method="get">
                        <button class="btn btn-outline-info">Listar Despesas</button>
                    </form>
                </td>
            </div>
            <div class="col-2">
                </td>
                <td>
                    <form action="{{ route('Despesa.destroy', [$despesa->co_despesa]) }}" method="get">
                        <button class="btn btn-outline-danger">Excluir</button>
                    </form>
            </div>
            </td>
    </table>


</div>
@endsection