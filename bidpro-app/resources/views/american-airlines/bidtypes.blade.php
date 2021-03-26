@extends("layout.master")

@section("content")
<h1>American Airlines bidtypes goes here</h1>


<div class="table-responsive">
    <section class="table-container">
      <div class="flex-table header">
       
        <div class="flex-row d-flex justify-content-center align-items-center">
          Fleet
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
          Seat
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
          Domicile
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
          Status
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
          Imported
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
            Add
          </div>
      </div>
      @foreach ($bidTypes as $bidType)
      <div class="flex-table table-row">
     
          
      
        <div class="flex-row d-flex justify-content-center align-items-center">
          {{ $bidType['fleet'] }}
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
            {{ $bidType['seat'] }}
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
            {{ $bidType['domicile'] }}
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
            {{ $bidType['status'] == 0 ? 'CURRENT'  : 'IMPORTING' }}
        </div>
        <div class="flex-row d-flex justify-content-center align-items-center">
            {{ $bidType['imported'] }}
        </div>
        <div class="flex-row ">
         <a href="/american-airlines/bidtype/import/{{ $bidType['id'] }}{{ $bidType['status'] == 1  ? '/cancel' : ''}}" 
         class="btn btn-block {{ $bidType['status'] == 1 ? 'btn-danger'  : 'btn-primary'}}">
         {{ $bidType['status'] == 1 ? 'CANCEL' :  'IMPORT'}}
         </a>
         @if ($bidType['status'] == 0)
         <a href="/american-airlines/bidtypes/delete/{{ $bidType['id'] }}" 
         class="btn btn-block btn-danger">Delete</a>  
         @endif
        </div>
        
      </div>
      @endforeach
    </section>
  </div>
  

@endsection