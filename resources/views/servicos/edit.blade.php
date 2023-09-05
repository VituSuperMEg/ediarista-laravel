@extends('adminlte::page')

@section('title', 'Editar Serviço')

@section('content_header')
    <h1>Editar Serviço</h1>
@stop

@section('content')
    <form action="{{ route('servicos.update', $servico) }}" method="POST">
        @method('PUT')
        @include('servicos._form')
    </form>
@stop
