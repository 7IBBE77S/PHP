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
        <div class="row con-s-pg">
          <div class="sec-t-shop">
            <div class="shop-h">
              <div class="bordered">
                <h4>PLANKCOOKING</h4>
                <h4>PRODUCTS</h4>
              </div>
            </div>
  
            <div class="shop-pg-products">
              <div class="h-c-shop c-s-shop">
                <div class="pr-1">
                  <a href="{{ route('shop.spicerubs') }}">
                    <img
                      src="/images/spice-rubs.png"
                      class="h-p"
                      href="#"
                      alt="spice rubs"
                    />
                  </a>
                  <a href="{{ route('shop.bakingplanks') }}">
                    <img
                      src="/images/bakingplanks.png"
                      class="h-p"
                      alt="spice rubs"
                    />
                  </a>
                </div>
                <div class="">
                  <a href="{{ route('shop.cookbooks') }}">
                    <img
                      src="/images/cookbooks.png"
                      class="h-p"
                      alt="spice rubs"
                    />
                  </a>
                  <a href="{{ route('shop.bbqplanks') }}">
                    <img
                      src="/images/bbqplanks.png"
                      class="h-p"
                      alt="spice rubs"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection