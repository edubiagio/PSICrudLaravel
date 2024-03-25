@extends('Template.template')

@section('content')
<div class="container mx-auto py-3 col-12">
    <div class="bg-blue-800 text-white py-2 mb-22 col-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-2">Cadastro de Despesa</h2>
        </div>
    </div>
    <div class="bg-white shadow-md rounded px-4 py-4 col-4 m-auto">
        <form action="{{ route('Despesa.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Unidade Demandante:</label>
                <input type="text" name="Unidade" value="{{old('Unidade')}} " class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('Unidade')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Data:</label>
                <input type="text" name="Data" value="{{old('Data')}} " class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('Data')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Valor Total:</label>
                <input type="text" name="Valor" value="{{old('Valor')}} " class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('Valor')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Observação:</label>
                <input type="text" name="observacao" value="{{old('observacao')}} " class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection