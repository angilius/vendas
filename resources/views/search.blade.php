<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Search</title>
<script>
function edit() { 
var input = document.querySelector(".edit");
var texto = input.value;
//alert(texto);   
window.location.href = "http://127.0.0.1:8000/editar-produto/"+texto; 
}
function del() { 
var input = document.querySelector(".edit");
var texto = input.value;
//alert(texto);   
window.location.href = "http://127.0.0.1:8000/excluir-produto/"+texto; 
}
</script>
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MENU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/search">Busca de produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Cadastro de produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cadastrar-cliente">Cadastro de clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/searchcli">Busca de clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cadastrar-pedido">Cadastro de pedido</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/searchpedido">Busca de pedido</a>
      </li>
    </ul>
  </div>
</nav>    
<br><br>
<div class="container">
 <div class="row">
  <div class="col-md-6" style="margin-top:40px">
   <h4>Busca de produtos</h4>
   <form action="{{ route('web.search') }}" method="GET">
    <div class="form-group">
     <label for="">Pesquise o produto</label>
     <input type="text" class="form-control" name="query" placeholder="Busque aqui...">
    </div>
    <div class="form-group">
     <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
   </form><br><br><br><br>
   @if(isset($products))
   <table class="table table-hover">
 <thead>
  <tr>
  <th>Id</th>
   <th>Nome</th>
   <th>Código de barras</th>
   <th>Preço</th>
  </tr>
 </thead>
 <tbody><form>
  <input type="button" value="Editar" onclick="edit()">
  <input type="button" value="Exluir" onclick="del()">
  @if(count($products) > 0)
    @foreach($products as $product)
     <tr>
     <td><input type="radio" name="idp" class="edit" value="{{ $product->id }}">{{ $product->id }}</td>
      <td>{{ $product->NomeProduto }}</td>
      <td>{{ $product->CodBarras }}</td>
      <td>{{ $product->ValorUnitario }}</td>
     </tr>
    @endforeach
     @else

      <tr><td>Nada encontrado!</td></tr>
     @endif
</form>
 </tbody>
</table>

<div class="pagination-block">
  {{ $products->links('layouts.paginationlinks') }}
</div>

  @endif
  </div>
  </div>
</div>    
</body>
</html>