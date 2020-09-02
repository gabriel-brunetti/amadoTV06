<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css')}}" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <script defer src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js')}}" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <script src="{{url('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body class="col-10 offset-1 py-5">
        <p>{{$produto->nome}}</p>
        <p>{{$produto->descricao}}</p>
        <p>{{$produto->marca}}</p>
        <p>{{$produto->preco}}</p>
        <p>{{$produto->quantidade}}</p>

        {{-- resolvendo com For (NAO RECOMENDADO) --}}
        {{-- @for ($i = 0; $i < count($produto->imagemProdutos); $i++)
            <img src="{{asset($produto->imagemProdutos[$i]->caminhoDaImagem)}}" alt="">        
        @endfor --}}

        {{-- resolvendo com ForEach (RECOMENDADO) --}}
        @foreach ($produto->imagemProdutos as $imagem)
            <img src="{{asset($imagem->caminhoDaImagem)}}" alt="">
        @endforeach  
        
        <form action="/admin/produtos/{{$produto->id}}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="btn badge badge-danger">Deletar</button>
        </form>
</body>
</html>