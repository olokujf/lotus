@extends('layouts.app')

@section('content')

    <div class="card" style="text-align: center;">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            Bem vindo a área do administrador!
        </div>
    </div>

@endsection