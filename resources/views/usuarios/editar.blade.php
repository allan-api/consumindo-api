@extends('layout')

@section('head')
<?php
$user =$usuario['data'];
?>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/usuarios/usuarios.js') }}" type="text/javascript" async="true" defer></script>
@section('cabecalho')
    Editar usuário
@endsection

@section('conteudo')
<script>
    
</script>
<form method="post">
    @csrf
    <div class="form-group">
        <label for="nome" class="">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{$user['nome']}}" required>
    </div>
    <div class="form-group">
        <label for="sobrenome" class="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="{{$user['sobrenome']}}" required>
    </div>
    <div class="form-group">
        <label for="email" class="">E-mail</label>
        <input type="text" class="form-control" name="email" id="email" value="{{$user['email']}}" required>
    </div>
    <div class="form-group">
        <label for="nascimento" class="">Nascimento</label>
        <input type="date" class="form-control" name="nascimento" id="nascimento" value="{{$user['nascimento']}}" required>
    </div>
    <div class="form-group">
        <label for="celular" class="">celular</label>
        <input type="text" class="form-control" placeholder="(99) 99999-9999" name="celular" id="celular" value="{{$user['celular']}}" required mask="(99) 99999-9999" maxlength="11">
    </div>
    <div class="form-group">
        <label for="telefone" class="">telefone</label>
        <input type="text" class="form-control" placeholder="(99) 9999-9999" name="telefone" id="telefone" value="{{$user['telefone']}}" mask="(99) 99999-9999" maxlength="10">
    </div>
    <div class="form-group">
        <label for="cep" class="">Cep</label>
        <div class="d-flex flex-row">
            <input type="text" class="form-control" name="cep" id="cep" value="{{$user['cep']}}" required>
            <input type="button" class="btn btn-warning" value="Buscar" onclick="viacep()">
        </div>
    </div>
    <div class="form-group">
        <label for="logradouro" class="">Logradouro</label>
        <input type="text" class="form-control" name="logradouro" value="{{$user['logradouro']}}" id="logradouro" required>
    </div>
    <div class="form-group">
        <label for="cidade" class="">Cidade</label>
        <input type="text" class="form-control" name="cidade" value="{{$user['cidade']}}" id="cidade" required>
    </div>
    <div class="form-group">
        <label for="bairro" class="">Bairro</label>
        <input type="text" class="form-control" name="bairro" value="{{$user['bairro']}}" id="bairro" required>
    </div>
    <div class="form-group">
        <label for="numero" class="">Numero</label>
        <input type="number" class="form-control" name="numero"  value="{{$user['numero']}}"id="numero" required>
    </div>
    <div class="form-group">
        <label for="nome" class="">UF</label>
        <select class="form-control" id="uf">
			<option <?php if($user['uf'] == "AC"){?> selected <?php }?>value="AC">Acre</option>
			<option <?php if($user['uf'] == "AL"){?> selected <?php }?>value="AL">Alagoas</option>
			<option <?php if($user['uf'] == "AP"){?> selected <?php }?>value="AP">Amapá</option>
			<option <?php if($user['uf'] == "AM"){?> selected <?php }?>value="AM">Amazonas</option>
			<option <?php if($user['uf'] == "BA"){?> selected <?php }?>value="BA">Bahia</option>
			<option <?php if($user['uf'] == "CE"){?> selected <?php }?>value="CE">Ceará</option>
			<option <?php if($user['uf'] == "DF"){?> selected <?php }?>value="DF">Distrito Federal</option>
			<option <?php if($user['uf'] == "ES"){?> selected <?php }?>value="ES">Espírito Santo</option>
			<option <?php if($user['uf'] == "GO"){?> selected <?php }?>value="GO">Goiás</option>
			<option <?php if($user['uf'] == "MA"){?> selected <?php }?>value="MA">Maranhão</option>
			<option <?php if($user['uf'] == "MT"){?> selected <?php }?>value="MT">Mato Grosso</option>
			<option <?php if($user['uf'] == "MS"){?> selected <?php }?>value="MS">Mato Grosso do Sul</option>
			<option <?php if($user['uf'] == "MG"){?> selected <?php }?>value="MG">Minas Gerais</option>
			<option <?php if($user['uf'] == "PA"){?> selected <?php }?>value="PA">Pará</option>
			<option <?php if($user['uf'] == "PB"){?> selected <?php }?>value="PB">Paraíba</option>
			<option <?php if($user['uf'] == "PR"){?> selected <?php }?>value="PR">Paraná</option>
			<option <?php if($user['uf'] == "PE"){?> selected <?php }?>value="PE">Pernambuco</option>
			<option <?php if($user['uf'] == "PI"){?> selected <?php }?>value="PI">Piauí</option>
			<option <?php if($user['uf'] == "RJ"){?> selected <?php }?>value="RJ">Rio de Janeiro</option>
			<option <?php if($user['uf'] == "RN"){?> selected <?php }?>value="RN">Rio Grande do Norte</option>
			<option <?php if($user['uf'] == "RS"){?> selected <?php }?>value="RS">Rio Grande do Sul</option>
			<option <?php if($user['uf'] == "RO"){?> selected <?php }?>value="RO">Rondônia</option>
			<option <?php if($user['uf'] == "RR"){?> selected <?php }?>value="RR">Roraima</option>
            <option <?php if($user['uf'] == "SC"){?> selected <?php }?>value="SC">Santa Catarina</option>
			<option <?php if($user['uf'] == "SP"){?> selected <?php }?>value="SP">São Paulo</option>
			<option <?php if($user['uf'] == "SE"){?> selected <?php }?>value="SE">Sergipe</option>
			<option <?php if($user['uf'] == "TO"){?> selected <?php }?>value="TO">Tocantins</option>
		</select>
    </div>
    
    

    <button class="btn btn-primary" onclick="atualizar({{$user['id']}})">Adicionar</button>
</form>
@endsection


