<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1/css/bootstrap.min.css') }}">
    <title>Visualizar produtos</title>
</head>
<body>
<table border="2">
    <tr>
        <td>Produto</td>
        <td>Código</td>
        <td>Preço</td>
    </tr>
    <tr>
        <td><?php  echo $produto->NomeProduto; ?></td>
        <td><?php  echo $produto->CodBarras;  ?></td>
        <td><?php  echo $produto->ValorUnitario;  ?></td>
    </tr>   
</table>   
</body>
</html>