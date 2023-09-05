@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicos as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <td>{{ $item->nome }}</td>
                    <td>
                        <a
                        href="{{ route('servicos.edit', $item) }}">
                         <i class="fa fa-edit"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-trash"></i>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $servicos->links() }}
    </div>
    <div class="float-right">
        <a href="{{ route('servicos.create') }}" class="btn btn-info">Novo Servico</a>
    </div>
@stop
