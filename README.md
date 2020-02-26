<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 
## Configurando a aplicação

Será necessário configurar o `.env` no projeto;

Defina em `DB_USERNAME=` o seu username do mysql; 

Defina em `DB_PASSWORD=` a sua senha do mysql; 

Utilize o comando `composer update` para atualizar as dependências;



## 
## Criando banco de dados "users"

Utilizaremos o banco MySQL, certifique-se de que o tenha, crie um banco de dados vazio com o nome `users`;

1. Acesse o console do DOS:
windows > executar > cmd

2. Digite o caminho aonde está instalado o mysql.exe
C:\> cd xampp\mysql\bin

3. Execute `mysql.exe -u root -p`
Entre com o password:

4. Depois Execute o comando `CREATE DATABASE users`



## 
## Criando as tabelas no banco de dados

No terminal, execute o comando `php artisan migrate` para criar as tabelas em seu banco;


## 
## Iniciando

Utilize o artisan como servidor com `php artisan serve --port=8000`;



Acesse o projeto em http://localhost:8000/home/usuarios pois já estamos com tudo pronto!

A paginação acontece a cada 5 usuários.

A API está no caminho  http://localhost:8000/api/usuarios pois já estamos com tudo pronto!



