$(document).ready(function(){
    var query = location.search.slice(1);
    var url   =  "http://localhost:8000/api/usuarios?" + query;
    listar(url)
});
function listar(url) {

        $.ajax({
        url: url,
        type: "GET",
        })
        .done(function( resp ) {
            response = resp.data;
            primPagina = resp.last_page;
            if(!response.length){
                mensagem = 'Nenhum usuário cadastrado no momento!';
                $('#mensagem').append(mensagem);
            }else{
                $.each(response, function(index, value){
                    montaTabela(value);
                })
            }
        });
}
    
function montaTabela (value){
    let html;
    html +=  "<tr>";
    html +=  "<td>" + value.id + "</td>";
    html +=  "<td>" + value.nome + "</td>";
    html +=  "<td>" + value.sobrenome + "</td>";
    html +=  "<td>" + value.email + "</td>";
    html +=  "<td>" + value.celular + "</td>";
    html +=  "<td>" + value.cep + "</td>";
    html +=  "<td><a href='usuarios/editar?id=" + value.id + "' onclick='edit(" + value.id + ")' class='btn btn-info'>Editar</a></td>";
    html +=  "<td><a style='color: #FFF' onclick='destroy(`" + value.id + "`, `" + value.nome + "`)' class='btn btn-danger'>Excluir</a></td>";                        
    html +=  "<tr>";
    
    $('#listaConteudo').append(html)
}


function atualizar(id){
    const nome       = $('#nome').val();
    const sobrenome  = $('#sobrenome').val();
    const email      = $('#email').val();
    const nascimento = $('#nascimento').val();
    const telefone   = $('#telefone').val();
    const celular    = $('#celular').val();
    const cep        = $('#cep').val();
    const logradouro = $('#logradouro').val();
    const cidade     = $('#cidade').val();
    const bairro     = $('#bairro').val();
    const numero     = $('#numero').val();
    const uf         = $('#uf').val();

    $(document).ready(function(){
        $.ajax({
            url: `http://localhost:8000/api/usuarios/${id}?nome=${nome}&sobrenome=${sobrenome}&email=${email}&nascimento=${nascimento}&telefone=${telefone}&celular=${celular}&cep=${cep}&logradouro=${logradouro}&cidade=${cidade}&bairro=${bairro}&numero=${numero}&uf=${uf}`,
            type: "PUT",
        })
        .done(function( resp ) {
            console.log( resp);
            notificaticacao('Controle de usuário',`Usuário ${nome} foi atualizado com sucesso!`);
        });
        window.location.reload();
        window.location.href = "http://localhost:8000/home/usuarios";
    })
}


function excluir(id, nome){
    $(document).ready(function(){
        $.ajax({
            url: "http://localhost:8000/api/usuarios/" + id,
            type: "DELETE",
        })
        .done(function( resp ) {
            location.reload();
            console.log( resp);
            notificaticacao('Controle de usuário',`Usuário ${nome} foi excluído com sucesso!`);
        });
    })
}

function notificaticacao(titulo, mensagem) {
    if (!("Notification" in window)) {
        alert('Desculpe, seu navegador não suporta receber notificações!')
    }
    if(Notification.permission !== "granted") {
        Notification.requestPermission();
    }

    var notification = new Notification(titulo, {
    body: mensagem,
    });

}
function viacep(){
    cep = $('#cep').val();
		$.ajax({
			url: 'https://viacep.com.br/ws/' + cep + '/json/unicode/',
            dataType: 'json',
			success: function(resposta){
                console.log(resposta);
				$("#logradouro").val(resposta.logradouro);
				$("#complemento").val(resposta.complemento);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
                $("#uf").val(resposta.uf);
                $( "#numero" ).focus();
			}
		});

}
function cadastrar() {
    const nome       = $('#nome').val();
    const sobrenome  = $('#sobrenome').val();
    const email      = $('#email').val();
    const nascimento = $('#nascimento').val();
    const telefone   = $('#telefone').val();
    const celular    = $('#celular').val();
    const cep        = $('#cep').val();
    const logradouro = $('#logradouro').val();
    const cidade     = $('#cidade').val();
    const bairro     = $('#bairro').val();
    const numero     = $('#numero').val();
    const uf         = $('#uf').val();

    $(document).ready(function(){
        $.ajax({
            url: `http://localhost:8000/api/usuarios?nome=${nome}&sobrenome=${sobrenome}&email=${email}&nascimento=${nascimento}&telefone=${telefone}&celular=${celular}&cep=${cep}&logradouro=${logradouro}&cidade=${cidade}&bairro=${bairro}&numero=${numero}&uf=${uf}`,
            type: "POST",
        })
        .done(function( resp ) {
            console.log( nascimento);
            notificaticacao('Controle de usuário',`Usuário ${nome} foi adicionado com sucesso!`);
        });
        
        
        location.href = "http://localhost:8000/home/usuarios";
    })
}

