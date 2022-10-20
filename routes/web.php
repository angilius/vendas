<?php
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchcliController;
use App\Http\Controllers\SearchpedidoController;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/cadastrar-cliente', function () {
    return view('cliente');
});
Route::get('/cadastrar-pedido', function () {
    return view('pedido');
});
Route::post('/cadastrar-pedido', function (Request $request) {
    Pedido::create([
     'NumeroPedido'   => $request->NumeroPedido,
     'Quantidade'     => $request->Quantidade,
     'DtPedido'  => $request->DtPedido
     ]);
     echo "Cadastrado!";
});
Route::post('/cadastrar-produto', function (Request $request) {
    Produto::create([
     'NomeProduto'   => $request->NomeProduto,
     'CodBarras'     => $request->CodBarras,
     'ValorUnitario' => $request->ValorUnitario
     ]);
     echo "Cadastrado!";
});
Route::post('/cadastrar-cliente', function (Request $request) {
    Cliente::create([
     'NomeCliente'   => $request->NomeCliente,
     'CPF'           => $request->CPF,
     'email'         => $request->email
     ]);
     echo "Cadastrado!";
});
Route::get('/ver-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('ver', ['produto' => $produto]);
});

Route::get('/editar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});
Route::post('/editar-produto/{id}', function (Request $request, $id) {
    $produto = Produto::find($id);
    $produto->update([
     'NomeProduto'   => $request->NomeProduto,
     'CodBarras'     => $request->CodBarras,
     'ValorUnitario' => $request->ValorUnitario
     ]);
     echo "<script>alert(\"Editado com sucesso!\");window.location.href = \"/search\";</script>";
});
Route::get('/editar-cliente/{id}', function ($id) {
    $cliente = Cliente::find($id);
    return view('editarcliente', ['cliente' => $cliente]);
});
Route::post('/editar-cliente/{id}', function (Request $request, $id) {
    $cliente = Cliente::find($id);
    $cliente->update([
     'NomeCliente'   => $request->NomeCliente,
     'CPF'           => $request->CPF,
     'email'         => $request->email
     ]);
     echo "<script>alert(\"Editado com sucesso!\");window.location.href = \"/searchcli\";</script>";
});
Route::get('/editar-pedido/{id}', function ($id) {
    $pedido = Pedido::find($id);
    return view('editarpedido', ['pedido' => $pedido]);
});
Route::post('/editar-pedido/{id}', function (Request $request, $id) {
    $pedido = Pedido::find($id);
    $pedido->update([
     'NumeroPedido'   => $request->NumeroPedido,
     'Quantidade'     => $request->Quantidade,
     'DtPedido'       => $request->DtPedido
     ]);
     echo "<script>alert(\"Exlcuido com sucesso!\");window.location.href = \"/searchpedido\";</script>";
});
Route::get('/excluir-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    $produto->delete();
    echo "<script>alert(\"Exlcuido com sucesso!\");window.location.href = \"/search\";</script>";
});
Route::get('/excluir-cliente/{id}', function ($id) {
    $cliente = Cliente::find($id);
    $cliente->delete();
    echo "<script>alert(\"Exlcuido com sucesso!\");window.location.href = \"/searchcli\";</script>";
});
Route::get('/excluir-pedido/{id}', function ($id) {
    $pedido = Pedido::find($id);
    $pedido->delete();
    echo "<script>alert(\"Exlcuido com sucesso!\");window.location.href = \"/searchpedido\";</script>";
});
Route::get('/search', [SearchController::class, 'search'])->name('web.search');

Route::get('/searchcli', [SearchcliController::class, 'searchcli'])->name('web.searchcli');

Route::get('/searchpedido', [SearchpedidoController::class, 'searchpedido'])->name('web.searchpedido');