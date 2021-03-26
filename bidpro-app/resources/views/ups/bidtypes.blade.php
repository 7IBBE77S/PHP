@extends("layout.master")

@section("content")
<h1 class="">Math Calculations</h1>


<div class="table-responsive">
    <section class="table-container">
        <div class="flex-table header">
       
            <div class="flex-row d-flex justify-content-center align-items-center">
              First Number
            </div>
            <div class="flex-row d-flex justify-content-center align-items-center">
               Operator
            </div>
            <div class="flex-row d-flex justify-content-center align-items-center">
                Second Number
            </div>
          
            <div class="flex-row d-flex justify-content-center align-items-center">
              <a href="/ups/pilots" 
              class="add">Add</a>  
              </div>
          </div>
      @foreach ($calcs as $calc)
      <div class="flex-table table-row">
     
          
      
        <div class="flex-row d-flex justify-content-center align-items-center">
          {{ $calc['firstNumber'] }}
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
            {{ $calc['operator'] }}
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
            {{ $calc['secondNumber'] }}
        </div>
        
        <div class="flex-row ">
          <a href="/ups/bidtypes/edit/{{ $calc['id'] }}" 
          class="btn btn-block btn-primary">EDIT</a>  
            <a href="/ups/bidtypes/delete/{{ $calc['id'] }}" 
            class="btn btn-block btn-danger">DELETE</a>  
            
        </div>
        
        
      
        
     
        
      </div>
   
      @endforeach
    </section>   
</div>

  

@endsection