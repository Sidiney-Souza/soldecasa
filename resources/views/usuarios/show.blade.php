<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Detalhes do usuário</h1>
        Id: {{$usuario->id}}<br>
        Nome:{{$usuario->nome}}<br>
        idade: {{$usuario->idade}}<br>
        email: {{$usuario->email}}<br>
        contato: {{$usuario->contato}}<br>
        senha: {{$usuario->senha}}<br>
        Data do cadastro: {{$usuario->created_at}}<br>
        hora de atualização: {{$usuario->update_at}}<br>
        <br><br>
        <a href='{{route('usuario.index')}}'>Voltar</a>
    </body>
</html>
