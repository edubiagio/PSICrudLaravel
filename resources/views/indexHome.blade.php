@extends('Template.template')

@section('content')
<div class="container mx-auto py-6 col-12">
    <div class="bg-blue-800 text-white py-4 mb-4 col-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6">Cadastro de Despesa</h2>
        </div>
    </div>
    <div class="bg-white shadow-md rounded px-8 py-6 mb-20 col-4">
        <form action="{{ route('Despesa.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nome" class="block border-black text-sm font-bold mb-2">Nome:</label>
                <input type="text" id="nome" name="nome" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="idade" class="block text-sm font-bold mb-2">Idade:</label>
                <input type="text" id="idade" name="idade" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
