<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function show(){
        $items = \Cart::getContent();
        return view('cart.cart',compact('items'));
    }
    function add(Request $request)
    {
        $product = [
            'id'=>$request->id,
            'name'=>$request->name,
            'price' =>$request->price,
            'quantity' => $request->quantity
        ];
        \Cart::add($product);
        return redirect()->route('cart.show');
    }

    function update(Request $request)
    {
        $id = $request->id;
        $data = [
            'quantity'=>[
                'relative'=>false,
                'value' => $request->quantity
            ]
        ];
        \Cart::update($id, $data);
        return redirect()->route('cart.show');
    }
    function remove(Request $request)
    {
        $id = $request->id;
        \Cart::remove($id);
        return redirect()->route('cart.show');
    }
    function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.show');
    }
}
