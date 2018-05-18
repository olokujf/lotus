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
        <div class="modal-dialog modal-lg">

            {{--Modal Content--}}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Banner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    {{Form::open()}}

                    <div class="form-group">
                        {{Form::label('titulo', 'Titulo')}}
                        {{Form::text('titulo', '', ['class' => 'form-control', 'required', 'placeholder' => 'Titulo'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('descricao', 'Descrição')}}
                        {{Form::text('descricao', '', ['class' => 'form-control', 'required', 'placeholder' => 'Descrição'])}}
                    </div>
                    <div class="form-group">
                        {{Form::checkbox('ativo', 1, null, false, ['class' => 'form-check-input'])}}
                        {{Form::label('ativo', 'Ativo')}}
                    </div>
                    <div class="form-group">

                        <div class="image-editor">

                            <input type="hidden" name="image-data" class="hidden-image-data" />
                            <input type="file" class="cropit-image-input">
                            <div class="cropit-preview"></div>

                            <div class="row mgt">
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-block rotate-ccw"><i class="fa fa-rotate-left"></i></button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-block rotate-cw"><i class="fa fa-rotate-right"></i></button>
                                </div>
                                <div class="col-md-8">
                                    <i class="fa fa-image f-f-img-md"></i>
                                    <input type="range" class="cropit-image-zoom-input">
                                    <i class="fa fa-image f-f-img-lg"></i>
                                </div>
                            </div>

                        </div>

                    </div>

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

        $('.image-editor').cropit({

        });

        $('.rotate-cw').click(function() {
            $('.image-editor').cropit('rotateCW');
        });
        $('.rotate-ccw').click(function() {
            $('.image-editor').cropit('rotateCCW');
        });

        $('.export').click(function() {
            var imageData = $('.image-editor').cropit('export');
            window.open(imageData);
        });

    </script>

@endsection