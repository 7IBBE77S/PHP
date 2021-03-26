<?php

namespace App\Http\Controllers;

use App\BidType;
use App\Pilot;
use Illuminate\Http\Request;

class AmericanAirlinesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getBidTypes() {
        $bidTypes = BidType::all();
        return view("american-airlines.bidtypes", compact('bidTypes'));
    }

public  function getBidTypesDelete($id) {
    $bidType = BidType::where("id", $id)->first();
    return view("american-airlines.bidtypes-delete", compact("bidType"));

}
public function postBidTypesDelete(Request $request) {

    $bidType = BidType::find($request->input("hiddenId"));
    $bidType->delete();

    return redirect() -> route("aa.bidtypes");
}
public function getBidTypeImport($id){
    $bidType = BidType::find($id);
$bidType["status"] = 1;
$bidType->save();
    return redirect() ->route("aa.bidtypes");

}
public function getBidTypeImportCancel($id){
    $bidType = BidType::find($id);
    $bidType["status"] = 0;
    $bidType->save();
    return redirect() ->route("aa.bidtypes");

}

public function getPilots() {
    $pilots = Pilot::all();
    return view("american-airlines.pilots", compact('pilots'));
}
public  function getPilotsDelete($id) {
    $pilot = Pilot::where("id", $id)->first();
    if(!$pilot) {
        return redirect()->route("aa.pilots");
    }
    return view("american-airlines.pilots-delete", compact("pilot"));

}
public function postPilotsDelete(Request $request) {

    $pilot = Pilot::find($request->input("hiddenId"));
    $pilot->delete();
  
    return redirect()->route("aa.pilots");
}
public function getPilotsAdd() {
    $pilots = Pilot::all();
    
    return view("american-airlines.pilots-add", compact('pilots'));
}
public function postPilots(Request $request) {

    $this -> validate($request, [

            'firstNameInput'=> 'required|min:3',
            'lastNameInput'=> 'required|min:3',
            // 'firstNameInput'=> 'required|b',
            // 'lastNameInput'=> 'required|between:0,99.99',
            'firstNameInput'=> 'regex:/^[a-zA-Z ]+$/',
            'lastNameInput'=> 'regex:/^[a-zA-Z ]+$/',
            'email'=>'required|email',
            'seat'=>'required|min:3|max:3',
          
            'seat'=>'regex:/^[A-Z]+$/',
            
            'fleet'=>'required|min:3|max:3',
            'fleet'=>'required|numeric',
            'domicile'=>'required|min:3|max:3',
           
            'domicile'=>'regex:/^[A-Z]+$/',


    ],
    [
        
        'required'  => 'The :attribute field is required.',
        'unique'    => ':attribute is already used'
    ]);


    //insert into DB
    $pilot = new Pilot([
        'firstName'=>$request->input('firstNameInput'),
        'lastName'=>$request->input('lastNameInput'),
        'email'=>$request->input('email'),
        'seat'=>$request->input('seat'),
        'fleet'=>$request->input('fleet'),
        'domicile'=>$request->input('domicile'),
      
    ]
);
    $pilot->save();
    
    return redirect() -> route("aa.pilots");
    // return redirect() -> back() 
    //    -> with('firstName',
    //    $request -> input('firstNameInput'))
    //    -> with('lastName',
    //    $request -> input('lastNameInput'))
  
    //    -> with('email',
    //    $request -> input('email'))
    //    -> with('seat',
    //    $request -> input('seat'))
    //    -> with('fleet',
    //    $request -> input('fleet'))
    //    -> with('domicile',
    //    $request -> input('domicile'));
       

}
public function getPilotsEdit($id) {
    $pilot = Pilot::find($id);
    if(!$pilot) {
        return redirect()
        -> route("aa.pilots");
    }
  
     
     
    return view('american-airlines.pilots-edit', compact('pilot'));
}

public function postPilotsEdit(Request $request) {

   $this -> validate($request, [
    'firstNameInput'=> 'required|min:3',
    'lastNameInput'=> 'required|min:3',
    // 'firstNameInput'=> 'required|b',
    // 'lastNameInput'=> 'required|between:0,99.99',
    'firstNameInput'=> 'regex:/^[a-zA-Z ]+$/',
    'lastNameInput'=> 'regex:/^[a-zA-Z ]+$/',
    'email'=>'required|email',
    'seat'=>'required|min:2|max:3',
  
    'seat'=>'regex:/^[A-Z]+$/',
    'fleet'=>'required|min:3|max:3',
 
    'fleet'=>'required|numeric',
    'domicile'=>'required|min:3|max:3',
   
    'domicile'=>'regex:/^[A-Z]+$/',
]);

   //Retrieve record from database 
    $pilot = Pilot::find($request->input('hiddenId'));

  

    $pilot['firstName'] = $request->input('firstNameInput');
    $pilot['lastName'] = $request->input('lastNameInput');
    $pilot['email'] = $request->input('email');
    $pilot['seat'] = $request->input('seat');
    $pilot['fleet'] = $request->input('fleet');
    $pilot['domicile'] = $request->input('domicile');

    $pilot->save();

    return redirect() -> back() 
    
    -> with('firstName',
    $request -> input('firstNameInput'))
    -> with('lastName',
    $request -> input('lastNameInput'))

    -> with('email',
    $request -> input('email'))
    -> with('seat',
    $request -> input('seat'))
    -> with('fleet',
    $request -> input('fleet'))
    -> with('domicile',
    $request -> input('domicile'))
    ->with('alert-success', 'Pilot was updated successfully! ');
    ;
  

}
}
