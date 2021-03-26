@extends("layout.master")

@section("content")


    <h1 class="font1 mr-2">American Airlines Pilots</h1>
   
  
    <hr />
    <div class=" wrapper  fadeInRight">
  
      <a href="/american-airlines/pilots/add" class="btn btnstyle1 addpilot2 ">
        <i class="fas fa-user-plus addG"></i> Add New Pilot 
       </a>
      
    <section class="table-container">
    
    
        <div class="row">
            @foreach ($pilots as $pilot)
          <div class="col-xl-4">
             
           
            <a
             href="/american-airlines/pilots/delete/{{ $pilot['id'] }}" 
            class="btn delete">
          <i class="fas fa-trash-alt "></i>
        </a>
        

          
          
          
            <a
             href="/american-airlines/pilots/edit/{{ $pilot['id'] }}" 
            class="btn update">
          <i class="f fa fa-pencil "></i>
        </a>
        

       
         
    
       

        
            <div class="contact-box">
          
           
             <div class="row " href="/alaska-airlines/pilots/profile">
              
                <div class="col-4">
                  
                  <div class="text-center">
                    
                    {{-- <img
                      alt="image"
                      class="rounded-circle img-fluid"
                      src="http://webapplayers.com/inspinia_admin-v2.9.3/img/a2.jpg"
                    /> --}}
                    <div class=" font2 ">
                      <strong>Seat:</strong>
                    
                      {{ $pilot['seat'] }}
                    </div>
                  
                       
                           
                  </div>
                </div>
                
                <div class="col-8 ">
                  <h3 >
                    <strong class="font1 text-break"
                      > {{ $pilot['firstName'] }}
                      {{ $pilot['lastName'] }}
                    
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
                  {{ $pilot['domicile'] }}
                </div>
                <div class="font2">
                  <strong >Fleet:</strong>
                  {{ $pilot['fleet'] }}
                </div>
                <div class="font2 text-break" >
                  <strong >Email:</strong>
                  {{ $pilot['email'] }}
                </div>
                <hr />
                </div>
                </div>
              </div>
           
            </div>
          </div>
        
         @endforeach
        </div>
      </div>
    </section>

  
@endsection