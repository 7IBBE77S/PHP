


@extends("layout.master")

@section("content")

@php($errorsFound = count($errors->all()))
 
    
<h1 class="font1 mr-2">Add Pilot</h1>
    @if ($errorsFound)
            
       
    <section class="alert alert-danger">
            <ul> 
                
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
               
                @endforeach
                Error! Enter a valid pilot.
            </ul>
    </section>
  
    @endif
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
@endif

  
   
  
    <hr />
    <div class=" wrapper  fadeInRight">
  
     
      <form class="text-center" method="POST" action="{{ route('aa.pilots-post') }}">
    <section class="table-container">
    
    
        <div class="row">
            
          <div class="col-xl-4">
             
           
      

       
         
    
       

        
            <div class="contact-box3">
          
           
             <div class="row">
              
                <div class="col-4">
                  
                  <div class="text-center">
                    
                    {{-- <img
                      alt="image"
                      class="rounded-circle img-fluid"
                      src="http://webapplayers.com/inspinia_admin-v2.9.3/img/a2.jpg"
                    /> --}}
                    <div class=" font2 ">
                     
                    
                      <div class="">
                       
                        <input type="text" class="form-control" id="seat" name="seat"
                        placeholder="CPT"
                        value="{{ Session::has('seat') ? Session::get('seat') : old('seat') }}" />
                    </div>
                    </div>
                       
                           
                  </div>
                </div>
                
                <div class="col-8 ">
                  <h3 >
                    <strong class="font1"
                      >       <div class="">
                 
                     
                        <input type="text" class="form-control" id="firstNameInput" name="firstNameInput"
                            placeholder="First Name"
                            value="{{ Session::has('firstName') ? Session::get('firstName') : old('firstNameInput') }}" />
                 
                   
                      
                       
                            <input type="text" class="form-control" id="lastNameInput" name="lastNameInput"
                                placeholder="Last Name"
                                value="{{ Session::has('lastName') ? Session::get('lastName') : old('lastNameInput') }}" />
                    </div>
                    
                      </strong
                  >
                      
                    
                   
                    
                  </h3>
                  <div class="mt-2 font ">
                    
                  
                    <!-- <div class="mb-2 row">
              
                     
                  </div> -->
                  
                  </div>
            
                  <div>
                    
                  <p class="mb-1 font2">
                    
                  </p>
              
                <div class="font2">
                 
                  <div class="">
                  
                    <input type="text" class="form-control" id="domicile" name="domicile" min="3" max="3"
                    placeholder="GEG"
                    value="{{ Session::has('domicile') ? Session::get('domicile') : old('domicile') }}" />
                </div>
                </div>
                </div>
                <div class="font2">
              
                  <div class="">
                  
                    <input type="text" class="form-control" id="fleet" name="fleet"
                    placeholder="737"
                    value="{{ Session::has('fleet') ? Session::get('fleet') : old('fleet') }}" />
                </div>
                </div>
                <div class="font2">
               
                  <div class="">
                 
                    <input type="text" class="form-control" id="email" name="email"
                    placeholder="example@example.com"
                    value="{{ Session::has('email') ? Session::get('email') : old('email') }}" />
                    
                </div>
                </div>
                <hr />
                </div>
                </div>
                <div class="form-group text-left ">
                    
                    <a href="{{ route('aa.pilots') }}" class="btn btnstyle3  addpilot">No</a>
                    <button title="Add Pilot"type="submit" class="btn btnstyle3 addpilot2 mr-3 " value="Add"> <i class="fas fa-user-plus mr-1 addG"></i>Add</button>
                   
                    
                </div>
             
              </div>
           
            </div>
            
          </div>
        

        </div>

      </div>
     
    </section>
   
    {{ csrf_field() }}
</form>
  
@endsection