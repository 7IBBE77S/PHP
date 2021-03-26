@extends("layout.master")

@section("content")
<main class="container-fluid">
    <div class="m-c">
      <div class="m-r">
        <div class="m-col1">
          <div>
            <img src="/images/shop/shop.png" alt="" />
          </div>
          <div class="outside-link">
            <a class="" href="{{ route('shop.spicerubs') }}">SPICE RUBS</a>
            <a class="" href="{{ route('shop.cookbooks') }}">COOKBOOKS</a>
            <a class="" href="{{ route('shop.bakingplanks') }}">BAKING PLANKS</a>
            <a class="" href="{{ route('shop.bbqplanks') }}">BBQ PLANKS</a>
            <a class="" href="{{ route('shop.nutdriver') }}">NUT DRIVER</a>
          </div>
        </div>
        <div class="m-col">
          <div class="row h-btn">
            <div class="dropdown shop-btn x-pad">
              <button
                class="btn btn-secondary dropdown-toggle btn-shop"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Shop
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('shop.spicerubs') }}">SPICE RUBS</a>
                <a class="dropdown-item" href="{{ route('shop.cookbooks') }}">COOKBOOKS</a>
                <a class="dropdown-item" href="{{ route('shop.bakingplanks') }}"
                  >BAKING PLANKS</a
                >
                <a class="dropdown-item" href="{{ route('shop.bbqplanks') }}">BBQ PLANKS</a>
                <a class="dropdown-item" href="{{ route('shop.nutdriver') }}">NUT DRIVER</a>
              </div>
            </div>
          </div>
        </div>
        <div class="h-c">
          <div class="jh-p-bg">
            <img
              class="s-r-l"
              src="/images/shop/spice-rubs/header.png"
              alt=""
            />
          </div>
        </div>
        <div class="jhnpbg">
          <img
            class="jhsm"
            src="/images/shop/spice-rubs/header.png"
            alt="John Howie"
          />
        </div>
      </div>
  
      <div class="s-m-con">
        <div class="con-a">
          <p class="con-a-w">
            

Chef Howie created 3 Chefs In A Tub spice rubs and seasoning blends to bring professional flavor to home cooking. Very easy to use. Just season cook and serve. Made with all natural ingredients, dried herbs and mushrooms, spices, lemon, garlic, onion, brown sugar and kosher salt, no MSG or other chemical additives.


          </p>
        </div>
        <div class="t-danger">
          <ul>
                   
 
        @if (session('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
              <p>{{ session('success') }}
                <a class="view-cart addtocart-success" href="{{ route('cart') }}">View Cart</a></p>
                 
            </div>
        </div>
        @endif
        @if ($errors->any())
        {{-- <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div> --}}
        <span  class="addtocart-error">Please enter a Qty</span>
    @endif
          </ul>
        </div>
        @foreach ($products as $product)
   
         
   
     @if ($product['categoryId']  === 1)  
     <div class="shop-h">
        <div class="sec-t-s-i">
          <h4>  {{ $product['name'] }}</h4>
        </div>
     </div>
        <div class="con-s">
          <p class="con-a-w mt-2 float-left cookbooks">
            {{ $product['description'] }}
            
          </p>
          <div class="">
            <p class="con-a-w text-center">
              Price: ${{ $product['price'] }} {{ $product['priceDescription'] }} <br />
            </p>
  
            <form method="POST" class="f-cole" action="{{ route('shop.addtocart-post') }}">
              
              <div>
                <label for="qty">Quantity:</label>
                <input
                  type="text"
                  name="qty"
                  id="qty"
                  class="qty-input"
                  value="{{ Session::has('qty') ? Session::get('qty') : old('qty') }}"
                  placeholder="0"
                />
              </div>

              <div class="inline">
                <input type="image" src="/images/shop/add-to-cart.png" />
              </div>
              
              <input type="hidden" name="hiddenId" 
           
              value="{{ $product['productId'] }}"
              />
              {{ csrf_field() }}
            </form>
            
           
  
        
          
            <img src="   {{ $product['imagePath'] }}" alt="" />
          </div>
        </div>
  
        @endif
        @endforeach
      </div>
    </div>
  </main>
  @endsection