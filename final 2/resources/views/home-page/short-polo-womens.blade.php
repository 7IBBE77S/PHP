<div class="modal fade bwidth" id="shortpolowomen" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        
                            <div class="col-sm-6 col-md-6">
                         
                                <div id="home-slider3" class="carousel fadein carousel-fade" data-ride="carousel">
                              
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="caption">
                                                <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="caption">
                                                <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="caption">
                                                <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="caption">
                                                <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon">
                                            </div>
                                        </div>
                                        <ul class="carousel-indicators">
                                            <li data-target="#home-slider3" data-slide-to="0" class="active"> <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon"></li>
                                            <li data-target="#home-slider3" data-slide-to="1" class=""> <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon"></li>
                                            <li data-target="#home-slider3" data-slide-to="2" class=""> <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon"></li>
                                            <li data-target="#home-slider3" data-slide-to="3" class=""> <img src="{{asset('product/product-1.jpg')}}" alt="qoute-icon"></li>
                                        </ul>
                                    </div>
                               
                                </div>
                         
                            </div>
                 
                            <div class="col-sm-6 col-md-6">
                           
                                <div class="pro-text product-detail">
                               
                                    <a href="#">
                                        <h4>Women's Short Sleeve Polo</h4>


                                    </a>

                                    <p class="price-detail">$25</p>
                                    <p>Short Sleeve Polo (Women's)</p>
                                    <ul class="short-ul">
                                        {{-- <li>filler text</li>
                                        <li>filler text</li>
                                        <li>filler text</li> --}}
                                    </ul>

                                    <form action="{{route('cart.store')}}" method="POST">
                                        @csrf
                                        <div class="numbers-row">
                                            <input type="hidden" name="price" value="25">
                                            <input name="quantity" id="french-hens" value="1" type="number">
                                            {{-- <div class="inc button">+</div>
                                            <div class="dec button">-</div> --}}
                                        </div>
                                        <input type="hidden" name="product_name" value="Women's Short Sleeve Polo">

                                        <input type="hidden" name="image" value="product/product-1.jpg">

                                        <button type="submit" class="addtocart2">Add to cart</button>
                                    </form>


                                    <div class="share">
                                        <ul>
                                            <li>Share:</li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
  
</div>
{{ csrf_field() }}
