<html>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Georama:wght@300&display=swap');
</style>
    <head>
        <title>Sol de casa</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="nada.css">
    </head>
    <body class="entrar">
        
      
        <h1>Todos os usuários</h1>
        <br><a href="{{route('usuario.create')}}">Novo usuário</a><br><br>
        
        @if(session('msg'))
            {{session('msg')}}<br><br>
        @endif
        
        @foreach($usuario as $usuario)    
          
         Id: {{$usuario->id}},
         Nome: {{$usuario->nome}} - 
        <a href='{{route('usuario.show', ['usuario'=>$usuario])}}'>Detalhes</a>
        <br>
        <form method="post" action="{{route('usuario.destroy', ['usuario'=>$usuario])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar"><br>
        </form>
        
        @endforeach
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
