@extends('Template.template')

@section('content')

<hr>

<div class="col-8 m-auto">
    <h1 class="text-center">PSI CRUD Laravel</h1>
    <hr>
    <h4>olá {{$user}}, Grato pela oportunidade de mostrar um pouco do meu conhecimento em prática, descobri que o univero Laravel é gigante, espero que todo aprendizado desses 2 dias seja suficiente para fazer parte da equipe </h4>
    <h4>Desculpa o layout </h4>

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
                <td>

                    <form action="{{ route('Despesa.create') }}" method="get">
                        <button class="btn btn-outline-success">Cadastrar Despesa</button>
                    </form>
            </div>
        </tr>
    </table>
</div>
@endsection
