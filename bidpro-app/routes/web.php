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


Route::get("/", [
    "uses"=>"HomeController@getHome",
    "as"=>"home"
    ]);
    
Route::group(["prefix" => "american-airlines"], function () {


    
    Route::get("bidtypes",[
        "uses"=>"AmericanAirlinesController@getBidTypes",
        "as"=>"aa.bidtypes"
    ]);

    Route::get("bidtypes/delete/{id}", [
        "uses"=>"AmericanAirlinesController@getBidTypesDelete",
        "as"=>"aa.bidtypes.delete"
    ]);
    Route::post("bidtypes/delete/yes", [
        "uses"=>"AmericanAirlinesController@postBidTypesDelete",
        "as"=>"aa.bidtypes.delete.yes"
    ]);
    Route::get("bidtype/import/{id}", [
        "uses"=>"AmericanAirlinesController@getBidTypeImport",
        "as"=>"aa.bidtype.import"
    ]);
    Route::get("bidtype/import/{id}/cancel", [
        "uses"=>"AmericanAirlinesController@getBidTypeImportCancel",
        "as"=>"aa.bidtype.import"
    ]);

    Route::get("pilots",[
        "uses"=>"AmericanAirlinesController@getPilots",
        "as"=>"aa.pilots"
    ]);
    Route::get("pilots/add",[
        "uses"=>"AmericanAirlinesController@getPilotsAdd",
        "as"=>"aa.pilots.add"
    ]);
    Route::post("pilots",[
        "uses"=>"AmericanAirlinesController@postPilots",
        "as"=>"aa.pilots-post"
    ]);
  
    Route::get("pilots/delete/{id}", [
        "uses"=>"AmericanAirlinesController@getPilotsDelete",
        "as"=>"aa.pilots.delete"
    ]);
    Route::post("pilots/delete/yes", [
        "uses"=>"AmericanAirlinesController@postPilotsDelete",
        "as"=>"aa.pilots.delete.yes"
    ]);
    Route::get("pilots/edit/{id}", [
        "uses"=>"AmericanAirlinesController@getPilotsEdit",
        "as"=>"aa.pilots.edit"
    ]);
    Route::post("pilots/edit/run", [
        "uses"=>"AmericanAirlinesController@postPilotsEdit",
        "as"=>"aa.pilots.edit.run"
    ]);
    
});

Route::group(["prefix" => "alaska-airlines"], function () {
    Route::get("bidtypes",[
        "uses"=>"AlaskaAirlinesController@getBidTypes",
        "as"=>"ak.bidtypes"
    ]);

    Route::get("pilots",[
        "uses"=>"AlaskaAirlinesController@getPilots",
        "as"=>"ak.pilots"
    ]);
});

Route::group(["prefix" => "jetsuite"], function () {
    Route::get("bidtypes",[
        "uses"=>"JetSuiteController@getBidTypes",
        "as"=>"js.bidtypes"
    ]);

    Route::get("pilots",[
        "uses"=>"JetSuiteController@getPilots",
        "as"=>"js.pilots"
    ]);
});

Route::group(["prefix" => "ups"], function () {
    Route::get("bidtypes",[
        "uses"=>"UPSController@getBidTypes",
        "as"=>"u.bidtypes"
    ]);

    Route::get("pilots",[
        "uses"=>"UPSController@getPilots",
        "as"=>"u.pilots"
    ]);
   
    Route::post("pilots",[
        "uses"=>"UPSController@postPilots",
        "as"=>"u.pilots-post"
    ]);
   
        
  
    Route::get("bidtypes/delete/{id}", [
        "uses"=>"UPSController@getBidTypesDelete",
        "as"=>"u.bidtypes.delete"
    ]);
    Route::post("bidtypes/delete/yes", [
        "uses"=>"UPSController@postBidTypesDelete",
        "as"=>"u.bidtypes.delete.yes"
    ]);
    Route::get("bidtypes/edit/{id}", [
        "uses"=>"UPSController@getBidTypesEdit",
        "as"=>"u.bidtypes.edit"
    ]);
    Route::post("bidtypes/edit/run", [
        "uses"=>"UPSController@postBidTypesEdit",
        "as"=>"u.bidtypes.edit.run"
    ]);
  
});





Auth::routes();


