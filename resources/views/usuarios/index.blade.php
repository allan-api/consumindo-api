
@extends('layout')
@section('head')
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/usuarios/usuarios.js') }}" type="text/javascript" async="true" defer></script>

@section('cabecalho')
Usuários cadastrado
@endsection
@section('conteudo')
<a href="./usuarios/cadastro" class="btn btn-dark mb-2">Adicionar</a>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<div class="row">
    <div class="col-md-12" id="listaTable">

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Tel. Celular</th>
                    <th>CEP</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody id="listaConteudo">
                {{-- @foreach($usuarios as $row)
                    <tr>
                    <td>{{ $row->id}}</td>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->sobrenome }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->celular }}</td>
                    <td>{{ $row->cep }}</td>
                    <td><a href="usuarios/editar?id={{$row->id}}" class="btn btn-info">Editar</a></td>
                    <td><a style="color: #FFF" onclick="excluir('{{$row->id}}', '{{$row->nome}}')" class="btn btn-danger">Excluir</a></td>                        
                    <tr>
                @endforeach --}}
            </tbody>
            
            {{-- <div class="alert alert-primary" role="alert" id="mensagem"> --}}
            {{-- </div> --}}
                
        </table>
        <h4 style="margin-top:20px" id="mensagem"></h4>
    </div>
    {{-- <div class="container"> --}}
        <div class="row justify-content-md-center">
            {{  $usuarios->fragment('foo')->links() }}
        </div>
    {{-- </div> --}}
</div>

@endsection
