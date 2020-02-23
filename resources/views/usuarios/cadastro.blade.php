@extends('layout')

@section('head')
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/usuarios/usuarios.js') }}" type="text/javascript" async="true" defer></script>

@section('cabecalho')
    Cadastrar usuário
@endsection

@section('conteudo')
<script>
    
</script>
<form method="get">
    @csrf
    <div class="form-group">
        <label for="nome" class="">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="form-group">
        <label for="sobrenome" class="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" required>
    </div>
    <div class="form-group">
        <label for="email" class="">E-mail</label>
        <input type="text" class="form-control" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="nascimento" class="">Nascimento</label>
        <input type="date" class="form-control" name="nascimento" id="nascimento" required>
    </div>
    <div class="form-group">
        <label for="celular" class="">celular</label>
        <input type="number" class="form-control" placeholder="(99) 99999-9999" name="celular" id="celular" required mask="(99) 99999-9999" maxlength="11">
    </div>
    <div class="form-group">
        <label for="telefone" class="">telefone</label>
        <input type="number" class="form-control" placeholder="(99) 9999-9999" name="telefone" id="telefone" mask="(99) 99999-9999" maxlength="10">
    </div>
    <div class="form-group">
        <label for="cep" class="">Cep</label>
        <div class="d-flex flex-row">
            <input type="text" class="form-control" name="cep" id="cep" required>
            <input type="button" class="btn btn-warning" value="Buscar" onclick="viacep()">
        </div>
    </div>
    <div class="form-group">
        <label for="logradouro" class="">Logradouro</label>
        <input type="text" class="form-control" name="logradouro" id="logradouro" required>
    </div>
    <div class="form-group">
        <label for="cidade" class="">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" required>
    </div>
    <div class="form-group">
        <label for="bairro" class="">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" required>
    </div>
    <div class="form-group">
        <label for="numero" class="">Numero</label>
        <input type="number" class="form-control" name="numero" id="numero" required>
    </div>
    <div class="form-group">
        <label for="nome" class="">UF</label>
        <select class="form-control" id="uf">
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>
    </div>
    
    

    <button class="btn btn-primary" onclick="cadastrar()">Adicionar</button>
</form>
@endsection


