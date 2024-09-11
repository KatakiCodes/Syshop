<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CategoryController extends Controller
{
    //
    function index(Request $request)
    {
        $produtos = Produto::where('id_category',$request->id)->paginate(10);
        return view('product.index',compact('produtos'));
    }
}
