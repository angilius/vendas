<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1/css/bootstrap.min.css') }}">
    <title>Editar Cliente</title>
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
<form action="/editar-cliente/{{ $cliente->id }}" method="POST">
    @csrf
    <table>       
<tr>
    <td><label>Nome:</label></td>
    <td><input type="text" class="form-control" name="NomeCliente" value="{{ $cliente->NomeCliente }}"></td>
</tr>
<tr>
    <td><label>CPF:</label></td>
    <td><input type="text" class="form-control" name="CPF" value="{{ $cliente->CPF }}"></td>
</tr>
<tr>
    <td><label>EMAIL:</label></td>
    <td><input type="text" class="form-control" name="email" value="{{ $cliente->email }}"></td>
</tr>
<tr>
    <td><button class="btn btn-primary">Salvar</button></td>
</tr>   
</table>    
</form><br><br>
</body>
</html>