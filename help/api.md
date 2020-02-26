## 
## Documentação da API
Sua funcionalidade está voltada para Cadastro de usuário, com endpoints para editar, cadastrar, inserir e excluir o usuário.

Para acessar a parte de listagens dos usuários, basta acessarmos nesse link http://localhost:8000/api/usuarios, a listagem está paginada para 5 usuários, além do Json do usuário com seus dados, temos também parametros de paginação para a próxima página, página atual, página anterior e etc. contando com links para tais para uma melhor manipulação dos dados.

## 
## Parametros de entrada e tipos.


`nome        => texto;`
`sobrenome   => texto;`
`email       => texto;`
`nascimento; => data;`
`telefone    => texto;`
`celular     => texto;`
`cep         => texto;`
`logradouro  => texto;`
`cidade      => texto;`
`bairro      => texto;`
`numero;     => inteiro;`
`uf          => texto;`


## 
## Ednpoints, métodos aceitos 

Listar (GET):

Utilizamos o método GET, para isso, basta acessarmos `http://localhost:8000/api/usuarios`.


## 
Listar um usuário em específico (GET):

Para listarmos um usuário em específico, utilizamos o método GET, e basta acessarmos a mesma rota que usamos para listar, porém com uma diferença, passando o id do usuário que queremos, ex: `http://localhost:8000/api/usuarios/1`, aqui pegamos o usuário cujo id seja 1.


## 
Inserir (POST):

Para enviarmos dados, utilizamos o método POST e passamos por parametros, basta seguir esse modelo: `http://localhost:8000/api/usuarios/${id}?nome=${nome}&sobrenome=${sobrenome}&email=${email}&nascimento=${nascimento}&telefone=${telefone}&celular=${celular}&cep=${cep}&logradouro=${logradouro}&cidade=${cidade}&bairro=${bairro}&numero=${numero}&uf=${uf}`

Ps: onde tem o cifrão, seguido por chaves, trocamos pelo valor que queremos enviar; ex: `nome=allan`.


## 
Editar (PUT):
Para editarmos, precisamos do id do usuário, em seguida, passarmos o id e os paramos que queremos editar.

Exemplo:
Vou mudar no usuario de id 2, seu  novo nome receberá "joão" e sobrenome  "silva".
`http://localhost:8000/api/usuarios/1?nome=joao&sobrenome=silva`


## 
Excluir (DELETE):

Excluir é muito simples, utilizamos o método DELETE, mas tome cuidado pois ele não desativa o usuário, ele realmente exclui, em baixo excluirmos passando o id.

`http://localhost:8000/api/usuarios/1`

## 
## Resposta

O formato de resposta dele é em Json, não há necessidade de autenticação.
