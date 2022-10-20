<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request) {
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $products = DB::table('produtos')->where('NomeProduto', 'LIKE', '%'.$search_text.'%')->paginate(20);
            $products->appends($request->all());
            return view('search', ['products'=>$products]);
           } else {
            return view('search');
           }
       }
}
