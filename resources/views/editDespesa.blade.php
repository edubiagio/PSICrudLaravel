@extends('Template.template')

@section('content')
<div class="container mx-auto py-3 col-12">
    <div class="bg-blue-800 text-white py-2 mb-22 col-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-2">Editar Despesa</h2>
        </div>
    </div>
    <div class="bg-white shadow-md rounded px-4 py-4 col-4 m-auto">
        <form action="/Despesa/update/{{$despesa->co_despesa}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Unidade Demandante:</label>
                <input type="text" name="co_unidade_demandante" value="{{$despesa->co_unidade_demandante}} " class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('co_unidade_demandante')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Data:</label>
                <input type="text" name="dt_pagamento" value="{{$despesa->dt_pagamento}}" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('dt_pagamento')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Valor Total:</label>
                <input type="text" name="vr_total" value="{{$despesa->vr_total}}" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('vr_total')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Observação:</label>
                <input type="text" name="observacao" value="{{$despesa->observacao}}" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection