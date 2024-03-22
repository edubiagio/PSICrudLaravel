@extends('Template.template')

@section('content')
<h1 class="text-center">CRUD Laravel</h1>
<hr>

<div class="text-center mt-3 mb-4">
    <form action="{{ route('Despesa.create')}}" method="GET">
        <a href="">
            <button class="btn btn-outline-success">Cadastrar Despesa</button>
        </a>
    </form>
</div>

<div class="col-8 m-auto">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Unidade</th>
                <th scope="col">Usuário</th>
                <th scope="col">Valor</th>
                <th scope="col">Observação</th>
            </tr>
        </thead>
        <tbody>

            @foreach($despesa as $despesas)
            <tr>
                <th scope="row">{{$despesas->co_despesa}}</th>
                <td>{{$despesas->co_unidade_demandante}}</td>
                <td>{{$despesas->matricula_usuario_inclusao}}</td>
                <td>{{$despesas->vr_total}}</td>
                <td>{{$despesas->observacao}}</td>
                <div class="col-1">

                    <td>
                        <form action="{{ route('Despesa.show', [$despesas->co_despesa]) }}" method="get">
                            <button class="btn btn-outline-info">Visualizar</button>
                        </form>
                    </td>
                </div>
                <div class="col-2">
                    <td>

                        <form action="{{ route('Despesa.edit', [$despesas->co_despesa]) }}" method="get">
                            <button class="btn btn-outline-info">Editar</button>
                        </form>
                </div>
                <div class="col-2">
                    </td>
                    <td>
                        <form action="{{ route('Despesa.delete', [$despesas->co_despesa]) }}" method="get">
                            <button class="btn btn-outline-danger">Deletar</button>
                        </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $despesa->links('pagination::bootstrap-4') }}

</div>



@endsection