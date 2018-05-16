@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Banners</h1>
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
                @foreach($banners as $banner)
                    <tr>
                        <td>{{$banner->foto}}</td>
                        <td>{{$banner->titulo}}</td>
                        <td>{{$banner->descricao}}</td>
                        <td>{{$banner->ativo}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <button id="novoBanner" class="btn btn-success">Novo</button>
        </div>
    </div>

    {{--Modal--}}
    <div class="modal fade" id="bannerModal" role="dialog">
        <div class="modal-dialog">

            {{--Modal Content--}}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Banner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    {{Form::open()}}

                    {{Form::label('titulo', 'Titulo')}}
                    {{Form::text('titulo', '', ['class' => 'form-control', 'required', 'placeholder' => 'Titulo'])}}

                    {{Form::close()}}
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#novoBanner").click(function(){
                $("#bannerModal").modal();
            });
        });
    </script>

@endsection