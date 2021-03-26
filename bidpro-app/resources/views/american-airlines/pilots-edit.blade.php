@extends("layout.master")

@section("content")

@php($errorsFound = count($errors->all()))
 
    
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

  
    <h1 class="font1 mr-2">Update Pilot</h1>
   
  
    <hr />
    <div class=" wrapper  fadeInRight">
  
     
       <form class="" method="POST" action="{{ route("aa.pilots.edit.run") }}">
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
                       
                        <input type="text"
                                class="form-control"
                                id="seat"
                                name="seat"
                                placeholder="CPT" 
                                value="{{ $pilot['seat']}}"/>
                    </div>
                    </div>
                       
                           
                  </div>
                </div>
                
                <div class="col-8 ">
                  <h3 >
                    <strong class="font1"
                      >       <div class="">
                 
                        <input type="text"
                                class="form-control"
                                id="firstNameInput"
                                name="firstNameInput"
                                placeholder="First Name" 
                                value="{{ $pilot['firstName']}}"/>
                 
                   
                      
                        <input type="text"
                                class="form-control"
                                id="lastNameInput"
                                name="lastNameInput"
                                placeholder="Last Name" 
                                value="{{ $pilot['lastName']}}"/>
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
                  
                    <input type="text"
                            class="form-control"
                            id="domicile"
                            name="domicile"
                            placeholder="GEG" 
                            value="{{ $pilot['domicile']}}"/>
                </div>
                </div>
                </div>
                <div class="font2">
               
                  <div class="">
                  
                    <input type="text"
                            class="form-control"
                            id="fleet"
                            name="fleet"
                            placeholder="737" 
                            value="{{ $pilot['fleet']}}"/>
                </div>
                </div>
                <div class="font2">
       
                  <div class="">
                  
                    <input type="text"
                            class="form-control "
                            id="email"
                            name="email"
                            placeholder="example@example.com" 
                            value="{{ $pilot['email']}}"/>
                </div>
                </div>
                <hr />
                </div>
                </div>
                <div class="form-group text-left ">
                    
                    <a href="{{ route('aa.pilots') }}" class="btn btnstyle3  addpilot">Cancel</a>
                    <button type="submit" class="btn btnstyle3 addpilot mr-3 " value="Run">  <i class="f fa fa-pencil mr-1 addU"></i>Update</button>
                    
                </div>
                <input type="hidden" name="hiddenId" value="{{ $pilot['id'] }}" />
                {{ csrf_field() }}
              </div>
           
            </div>
            
          </div>
        

        </div>

      </div>
     
    </section>
   
  
</form>
  
@endsection