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
        <h1>Novo usuario</h1>
        <form method="post" action="{{route('usuario.store')}}" >
            @csrf
            Nome:
            <input type="text" name="nome"><br>
            Idade:
            <input type="number" name="idade"><br>
            E-mail:
            <input type="text" name="email"><br>
            Contato:
            <input type="text" name="contato"><br>
            Senha:
            <input type="password" name="senha"><br>
            <input type="submit" name="Guardar"><br>
        </form>
            
    </body>
</html>
