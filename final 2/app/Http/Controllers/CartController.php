<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index(){
        
        $cart = Cart::getContent();
        return view('cart', 
        ['cart' => $cart]);

    }

    public function store(Request $request){
        $this -> validate($request, [

            
            'quantity' => 'required|integer|min:1'

            
            
    ]);
        Cart::add(array(
            'id' => $request->product_name,
           'name' => $request->product_name,
           'price' => $request->price,
           'quantity' => $request->quantity,
            'attributes' => array(
            'img' => $request->image,
            )

            
        ));
        
        
        session()->flash('success', 'The item has been added to cart');

        return back();
    }



    public function delete($id){

        Cart::remove($id);

        session()->flash('success', 'The item has been removed from the cart');

        return back();
    }
}
