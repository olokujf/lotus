@extends('layouts.app')

@section('content')

    <h1>Homes</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($homes as $home)
                <tr>
                    <td>{{$home->foto}}</td>
                    <td>{{$home->titulo}}</td>
                    <td>{{$home->descricao}}</td>
                    <td>{{$home->ativo}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection