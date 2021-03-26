<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get("/", function () {
//     return view("home");
// })-> name("home");

Route::get("/", [
    "uses"=>"HomeController@getIndex",
    "as"=>"home"
    ]);
Route::get("/About", [
    "uses"=>"AboutController@getIndex",
    "as"=>"about"
    ]);
    //shop
Route::get("/Shop", [
    "uses"=>"ShopController@getIndex",
    "as"=>"shop"
    ]);
Route::post("/Shop",[
    "uses"=>"ShopController@postCart",
    "as"=>"shop.addtocart-post"
    ]);
    //spice rubs
Route::get("Shop/SpiceRubs", [
    "uses"=>"ShopController@getSpiceRubs",
    "as"=>"shop.spicerubs"
    ]);   
Route::get("/SpiceRubs", [
    "uses"=>"ShopController@getSpiceRubs",
    "as"=>"spicerubs"
    ]); 
    //cookbooks
Route::get("Shop/Cookbooks", [
    "uses"=>"ShopController@getCookbooks",
    "as"=>"shop.cookbooks"
    ]);   
Route::get("/Cookbooks", [
    "uses"=>"ShopController@getCookbooks",
    "as"=>"cookbooks"
    ]);   
//baking planks
Route::get("Shop/BakingPlanks", [
    "uses"=>"ShopController@getBakingPlanks",
    "as"=>"shop.bakingplanks"
    ]);   
Route::get("/BakingPlanks", [
    "uses"=>"ShopController@getBakingPlanks",
    "as"=>"bakingplanks"
    ]); 
//BBQPlanks
Route::get("Shop/BBQPlanks", [
    "uses"=>"ShopController@getBBQPlanks",
    "as"=>"shop.bbqplanks"
    ]);   
Route::get("/BBQPlanks", [
    "uses"=>"ShopController@getBBQPlanks",
    "as"=>"bbqplanks"
    ]); 
    //nut driver
Route::get("Shop/NutDriver", [
    "uses"=>"ShopController@getNutDriver",
    "as"=>"shop.nutdriver"
    ]);   
Route::get("/NutDriver", [
    "uses"=>"ShopController@getNutDriver",
    "as"=>"nutdriver"
    ]); 

    //other
Route::get("/Reviews", [
    "uses"=>"ReviewsController@getIndex",
    "as"=>"reviews"
    ]);


Route::get("Reviews/Testimonials", [
    "uses"=>"ReviewsController@getTestimonials",
    "as"=>"testimonials"
    ]);

Route::get("/Recipes", [
    "uses"=>"RecipesController@getIndex",
    "as"=>"recipes"
    ]);


Route::get("/Contact", [
    "uses"=>"ContactController@getIndex",
    "as"=>"contact"
    ]);

Route::get("/Cart", [
    "uses"=>"CartController@getIndex",
    "as"=>"cart"
    ]);
Route::get("/Cart/Checkout", [
    "uses"=>"CartController@getCheckout",
    "as"=>"checkout"
    ]);
Route::get("/Cart/Review", [
    "uses"=>"CartController@getReview",
    "as"=>"review"
    ]);
Route::get("/Cart/Receipt", [
    "uses"=>"CartController@getReceipt",
    "as"=>"receipt"
    ]);
Route::post("/Cart/remove",[
    "uses"=>"CartController@postRemove",
    "as"=>"cart.removefromcart-post"
    ]);
    
Route::post("/Cart/update",[
    "uses"=>"CartController@putUpdate",
    "as"=>"cart.updatecart-post"
    ]);

Route::post("/Cart/Checkout", [
    "uses"=>"CartController@postCheckout",
    "as"=>"cart.checkout-post"
    ]);
Route::post("/Cart/Review", [
    "uses"=>"CartController@postPurchase",
    "as"=>"cart.purchase-post"
    ]);
   
  