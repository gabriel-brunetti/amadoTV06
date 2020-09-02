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
    <h3>Atualizar Produto</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/admin/produtos/{{ $produto->id}}" method="POST">
        {{-- METODO PUT PARA ATUALIZAR DOS NO SERVIDOR --}}
        @method('put')
        @csrf
        {{-- NOME --}}
        <div class="form-group row">
          <label for="nome" class="col-sm-2 col-form-label">Nome</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="{{$produto->nome}}">
          </div>
        </div>
        {{-- DESCRICAO --}}
        <div class="form-group row">
          <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descricao" value="{{$produto->descricao}}">
          </div>
        </div>
        {{-- QUANTIDADE --}}
        <div class="form-group row">
          <label for="quantidade'" class="col-sm-2 col-form-label">Quantidade</label>
          <div class="col-sm-10">
            <input type="number" min="0" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade" value="{{$produto->quantidade}}">
          </div>
        </div>
        {{-- PRECO --}}
        <div class="form-group row">
          <label for="preco" class="col-sm-2 col-form-label">Preço</label>
          <div class="col-sm-10">
            <input type="number" max="999.99" min="0" step="0.01" class="form-control" name="preco" id="preco" placeholder="Preço" value="{{$produto->preco}}">
          </div>
        </div>
        {{-- BOTAO --}}
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Atualizar</button>
          </div>
        </div>
    </form>

    

</body>
</html>