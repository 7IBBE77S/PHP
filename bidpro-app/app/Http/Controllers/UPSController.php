<?php

namespace App\Http\Controllers;

use App\MathApp;
use Illuminate\Http\Request;

class UPSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getBidTypes() {
        $calcs = MathApp::all();
        return view("ups.bidtypes", compact('calcs'));
    }

public  function getBidTypesDelete($id) {
    $calc = MathApp::where("id", $id)->first();
    return view("ups.bidtypes-delete", compact("calc"));

}
public function postBidTypesDelete(Request $request) {

    $calc = MathApp::find($request->input("hiddenId"));
    $calc->delete();

    return redirect() -> route("u.bidtypes");
}


public function getPilots() {
    return view("ups.pilots");

}
public function postPilots(Request $request) {

    $this -> validate($request, [

            'firstNumInput'=> 'required|min:1',
            'secondNumInput'=> 'required|min:1',
            'firstNumInput'=> 'required|between:0,99.99',
            'secondNumInput'=> 'required|between:0,99.99',
            'firstNumInput'=> 'numeric',
            'secondNumInput'=> 'numeric|not_in:0'
    ]);


    //insert into DB
    $calc = new MathApp([
        'firstNumber'=>$request->input('firstNumInput'),
        'secondNumber'=>$request->input('secondNumInput'),
        'operator'=>$request->input('operator'),
      
    ]
);
    $calc->save();
  
    return redirect() -> back() -> with('firstNumber',
       $request -> input('firstNumInput'))
       -> with('secondNumber',
       $request -> input('secondNumInput'))
  
       -> with('operator',
       $request -> input('operator'))
       -> with('+',
       $request -> input('plus'))
       -> with('-',
       $request -> input('minus'))
       -> with('*',
       $request -> input('times'))
       -> with('/',
       $request -> input('divide'));

}
public function getBidTypesEdit($id) {
    $calc = MathApp::find($id);
    // if(!$calc) {
    //     return redirect()
    //     -> route('math-app-admin',)->with('errorE', 'There is nothing to edit. Error number: ' . $id);
    // }
    return view('ups.bidtypes-edit', compact('calc'));
}

public function postBidTypesEdit(Request $request) {

   $this -> validate($request, [

    'firstNumInput'=> 'required|min:1',
    'secondNumInput'=> 'required|min:1',
    'firstNumInput'=> 'required|between:0,99.99',
    'secondNumInput'=> 'required|between:0,99.99',
    'firstNumInput'=> 'numeric',
    'secondNumInput'=> 'numeric|not_in:0'
]);

   //Retrieve record from database 
    $calc = MathApp::find($request->input('hiddenId'));

  
    // if(!$calc) {
    //     return redirect()
    //     -> route('math-app-admin')->with('error', 'There is nothing to update.' . $request->input('firstNumber'));
    // }
    $calc['firstNumber'] = $request->input('firstNumInput');
    $calc['secondNumber'] = $request->input('secondNumInput');
    $calc['operator'] = $request->input('operator');

    $calc->save();

    return redirect() -> back() -> with('firstNumber',
    $request -> input('firstNumInput'))
    -> with('secondNumber',
    $request -> input('secondNumInput'))

    -> with('operator',
    $request -> input('operator'))
    -> with('+',
    $request -> input('plus'))
    -> with('-',
    $request -> input('minus'))
    -> with('*',
    $request -> input('times'))
    -> with('/',
    $request -> input('divide'));

}
}
