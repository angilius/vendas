<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchcliController extends Controller
{
    function searchcli(Request $request) {
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $clients = DB::table('clientes')->where('NomeCliente', 'LIKE', '%'.$search_text.'%')->paginate(20);
            $clients->appends($request->all());
            return view('searchcli', ['clients'=>$clients]);
           } else {
            return view('searchcli');
           }
       }
}
