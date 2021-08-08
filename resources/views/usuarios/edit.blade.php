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
        <h1>Alteralção do usuario{{$usuario->nome}}</h1>
        <form method="post" action="{{route('usuario.store', ['usuario'=>$usuario])}}" >
            @csrf
            @method('PATCH)
            Nome:
            <input type="text" name="nome" value="{{$usuario->nome}}"><br>
            Idade:
            <input type="number" name="idade" value="{{$usuario->idade}}"><br>
            E-mail:
            <input type="text" name="email" value="{{$usuario->email}}"><br>
            Contato:
            <input type="text" name="contato"value="{{$usuario->contato}}"><br>
            Senha:
            <input type="password" name="senha" value="{{$usuario->senha}}"><br>
            <input type="submit" name="Guardar"><br>
        </form>
            
    </body>
</html>
