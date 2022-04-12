@extends('home-page.index')

@section('content')


<section class="new-arrivals">
  
    <div class="container">
        <div class="tittle text-center ">
            <h2 ><span class="geek">GEEK</span></h2>
            <p>Learn. <span class="LTS ">Think.</span> Speak</p>
        </div>
        <div class="row animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
            <div class="col-md-4">
          
                <div class="pro-text">
               
                    <div class="pro-img"> <img src="{{asset('product/product-1.jpg')}}" alt="2"  />
                   
                        <div class="hover-img">
                            <ul>

                                <li><a href="#" data-toggle="modal" data-target="#shortpolo" ><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                
                    </div>
             <a href="#">Men's Short Sleeve Polo</a> <a href="#" class="addtocart" data-toggle="modal" data-target="#shortpolo">+ Add to cart</a>
                    <div class="price">$25</div>
                </div>
         
            </div>
            <div class="col-md-4">
       
                <div class="pro-text">
               
                    <div class="pro-img"> <img src="{{asset('product/product-2.jpg')}}" alt="2" />
                        
                        <div class="hover-img">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#longpolo" ><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                  
                    </div>
                  <a href="#">Men's Long Sleeve Polo</a> <a href="#" class="addtocart" data-toggle="modal" data-target="#longpolo">+ Add to cart</a>
                    <div class="price">$25</div>
                </div>
              
            </div>
            <div class="col-md-4">
           
                <div class="pro-text">
                    
                    <div class="pro-img"> <img src="{{asset('product/product-3.jpg')}}" alt="2" />
            
                        <div class="hover-img">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#coffemug" ><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <a href="#">Travel Mug</a> <a href="#" class="addtocart" data-toggle="modal" data-target="#travelmug">+ Add to cart</a>
                    <div class="price">$25</div>
                </div>
            
            </div>
            <div class="col-md-4">
        
                <div class="pro-text">
               
                    <div class="pro-img"> <img src="{{asset('product/product-4.jpg')}}" alt="2" />
                   
                        <div class="hover-img">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#travelmug"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
           
                    </div>
               <a href="#">Coffee Mug</a> <a href="#" class="addtocart" data-toggle="modal" data-target="#coffemug">+ Add to cart</a>
                    <div class="price">$25</div>
                </div>
             
            </div>
            <div class="col-md-4">

                <div class="pro-text">
           
                    <div class="pro-img"> <img src="{{asset('product/product-1.jpg')}}" alt="2" />
               
                        <div class="hover-img">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#shortpolowomen" ><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                   
                    </div>
             <a href="#">Women's Short Sleeve Polo</a> <a href="#" class="addtocart" data-toggle="modal" data-target="#shortpolowomen">+ Add to cart</a>
                    <div class="price">$25</div>
                </div>
    
            </div>
            <div class="col-md-4">
                <div class="pro-text">
                    <div class="pro-img"> <img src="{{asset('product/product-2.jpg')}}" alt="2" />
            
                        <div class="hover-img">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#longpolowomen" ><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
        
                    </div>
           <a href="#">Women's Long Sleeve Polo</a> <a href="#" class="addtocart" data-toggle="modal" data-target="#longpolowomen">+ Add to cart</a>
                    <div class="price">$25</div>
                </div>
     
            </div>


        </div>
    </div>
    {{ csrf_field() }}
</section>




@endsection
