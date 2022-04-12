<?php

namespace App\Http\Controllers;


use App\Order;
use App\OrderDetails;
use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    public function index(){
        $cart = Cart::getContent();
        if($cart->count() == 0){
            session()->flash('error', 'Please add product to cart first.');
            return back();
        }
        return view('checkout', ['cart' => $cart]);
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'telephone' => 'required',
            'zip' => 'required',
            
        ]);
        $order_id = 'ID' . uniqid();

        $order = Order::create([
            'order_id' => $order_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'zip' => $request->zip,
            'price' => $request->price,
            'order_notes' => $request->order_notes,
        ]);

        $items = Cart::getContent();
       
        foreach ($items as $item){
            OrderDetails::create([
                'order_id' => $order->id,
                'product_name' => $item->name,
                'product_image' => $item->attributes->img,
                'product_quantity' => $item->quantity,
            ]);
        }
        if($items->count() == 0){
            session()->flash('error', 'Please add product to cart first.');
            return back();
        }
        session()->flash('success', 'Order successfully created!');


        Cart::clear();

        return view('thank-you', ['order' => $order]);
    }
}
