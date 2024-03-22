@extends('Template.template')

@section('content')
<h1 class="text-center">Visualizar Despesa</h1>
<hr>

<div class="col-8 m-auto">

    Id: {{$despesa->co_despesa}}<br>
    Unidade: {{$despesa->co_unidade_demandante}}<br>
    Valor: R$ {{$despesa->vr_total}}<br>
    Usuário: {{$despesa->matricula_usuario_inclusao}} <br>
    Observação: {{$despesa->observacao}} <br>
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

                    <form action="{{ route('Despesa.edit', [$despesa->co_despesa]) }}" method="get">
                        <button class="btn btn-outline-info">Editar</button>
                    </form>
            </div>
            <div class="col-2">
                </td>
                <td>
                    <form action="{{ route('Despesa.delete', [$despesa->co_despesa]) }}" method="get">
                        <button class="btn btn-outline-danger">Excluir</button>
                    </form>
            </div>
            </td>
    </table>


</div>
@endsection