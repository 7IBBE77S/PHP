<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Product;



/*** 
   If you encounter a "Trying to get property 
   'orderCartId' of non-object" Error please flush the session (session::flush();) or add something to the cart.
***/

class ShopController extends Controller
{
    //
    public function getIndex()
    {
        
        return view('shop/shop');
         
    }
    public function getSpiceRubs()
    {
       // session::flush();
       $products = Product::where('categoryId', 1)
       ->get();
        
      
        return view('shop/spicerubs', compact('products'));
    }
    public function getCookbooks()
    {
       
        $products = Product::where('categoryId', 2)
        ->get();
        //session::flush();

       
        return view('shop/cookbooks', compact('products'));
    }
    
  
    public function getBakingPlanks()
    {
        //session::flush();
       
        $products = Product::where('categoryId', 3)
        ->get();
        
      
        return view('shop/bakingplanks', compact('products'));
    }
    public function getBBQPlanks()
    {


        //session::flush();
       
        $products = Product::where('categoryId', 4)
        ->get();
        
      
        return view('shop/bbqplanks', compact('products'));
    }
    public function getNutDriver()
    {


        //session::flush();
       
        $products = Product::where('categoryId', 5)
        ->get();
        
      
        return view('shop/nutdriver', compact('products'));
    }

/*
    /\*******CART*******\/

*/
public function postCart(Request $request)
{
    // dd($request->all());
    $this -> validate($request, [
        'qty' => 'required|integer|min:1',


]);
   
    
    
   
    // $product = Product::find($request->input("hiddenId"));
    $product = DB::table('products')->where('productId', $request->hiddenId)->first();
        // dd($product->productId);

    $user = session::get('uniqueIdentifier');
  
    if($user){
        // dd($user);
        $identifier = DB::table('order_carts')->where('uniqueIdentifier', $user)->first();
        // dd($identifier);
        $cart = DB::table('order_items')
                    ->where('uniqueIdentifier', $user)
                    ->select('productId')
                    ->join('order_carts', 'order_carts.orderCartId', 'order_items.orderCartId')
                    ->where('productId', $request->hiddenId);

        // dd($cart);

        if($cart->count() == 0){
            // dd($identifier->orderCartId);
            DB::table('order_items')->insert([
                'productId' => $product->productId,
                'orderCartId' => $identifier->orderCartId,
                'qty' => $request->qty,
            ]);

            return redirect()->back()->with('success', 'Added To Cart -');
        } elseif ($cart->count() != 0) {
            $crt = $cart->first();
            $this -> dboi = DB::table('order_items')
          
            ->where('productId', $crt->productId)
            ->where('orderCartId', $identifier->orderCartId)
            ->increment('qty', $request->qty);
            // dd($sam);
            // dd($sam->qty);
            // dd($request->qty);
            // dd($quantity);
    
            
            return redirect()->back()->with('success', 'Product updated -');

        }

       

    }

    $rand_session_code = rand(00000, 99999);
    session::put('uniqueIdentifier', $rand_session_code);

    // dd(session::get('uniqueIdentifier'));
    $orderCart = DB::table('order_carts')->insertGetId([
        'websiteId' => '1',
        'uniqueIdentifier' => $rand_session_code,
        'status' => '1'
    ]);

    // dd($orderCart);

    DB::table('order_items')->insert([
        'productId' => $product->productId,
        'orderCartId' => $orderCart,
        'qty' => $request->qty,
    ]);

    return redirect()->back()->with('success', 'Added To Cart -');



 }
}