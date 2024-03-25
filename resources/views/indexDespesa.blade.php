@extends('Template.template')

@section('content')
<div class="container mx-auto py-3 col-12">
    <div class="bg-blue-800 text-white py-2 mb-22 col-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-2">Lista de Despesas</h2>
        </div>
    </div>

    <div class="py-2 col-8 m-auto">
        <table class="table table-auto caption-top md:caption-bottom border-spacing-px">
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
</div>
@endsection