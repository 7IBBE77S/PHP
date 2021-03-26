@extends("layout.master")

@section("content")


  
    <h1 class="font1 mr-2">Delete Pilot</h1>
   
    <p class="lead font-italic">Are you sure you would like to delete this pilot?</p>
    
    <hr />
    <div class=" wrapper  fadeInRight">
  
     
        <form method="POST" action="{{ route("aa.pilots.delete.yes") }}">
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
                      <strong>Seat:</strong>
                    
                      <div class="">
                       
                        {{ $pilot['seat']}}
                    </div>
                    </div>
                       
                           
                  </div>
                </div>
                
                <div class="col-8 ">
                  <h3 >
                    <strong class="font1 text-break"
                      >       <div class="">
                 
                        {{ $pilot['firstName']}}
                 
                   
                                {{ $pilot['lastName']}}
                    
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
                  <strong >Domicile:</strong>
                  <div class="">
                  
                    {{ $pilot['domicile'] }}
                </div>
                </div>
                </div>
                <div class="font2">
                  <strong >Fleet:</strong>
                  {{ $pilot['fleet']}}
                </div>
                <div class="font2 text-break">
                  <strong class="">Email:</strong>
                  {{ $pilot['email']}}
                </div>
                <hr />
                </div>
                </div>
              
                    
               

                    <a href="{{ route('aa.pilots') }}" class="btn btnstyle3  addpilot ">NO</a>
                    <button type="submit" class="btn  btnstyle3 deletepilot  mr-3" value="YES">  <i class="fas fa-trash-alt mr-1 addD"></i>YES</button>
                    
 
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