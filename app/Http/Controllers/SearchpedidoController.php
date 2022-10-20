<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchpedidoController extends Controller
{
    function searchpedido(Request $request) {
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $orders = DB::table('pedidos')->where('NumeroPedido', 'LIKE', '%'.$search_text.'%')->paginate(20);
            $orders->appends($request->all());
            return view('searchpedido', ['orders'=>$orders]);
           } else {
            return view('searchpedido');
           }
       }
}
