@extends("layout.master")

@section("content")
<main class="container-fluid" id="cart">
    <section>
      @if (session('success'))
      <div class="col-sm-12">
          <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <p>{{ session('success') }}
               
          </div>
      </div>
      @endif
      <div class="cart-t">
        <div class="cart-t-print">
          @if ($orderItems)
          
            <p><span>SHOPPING CART: </span>Your shopping cart contains {{ $orderItems->count() }} items.</p>

          @else
          
            <p><span>SHOPPING CART: </span>Your shopping cart contains 0 items.</p>
              
          @endif
        </div>
        <div class="cart-t-buttons">
          <a href="{{ route('checkout') }}" class="pl-1 pb-2">
            <img src="/images/cart/checkout.png" alt="" />
          </a>
          <a href="{{ route('shop') }}" class="pl-2 pb-2">
            <img src="/images/cart/continue.png" alt=""
          /></a>
        </div>
      </div>
    </section>
  
    <section id="cart-t" class="">
      <div class="m-t">
        <table class="">
          <tr class="t-t">
            <th class="item1">Shipping to you</th>
            <th class="item">price</th>
            <th class="item">Quantity</th>
            <th class="item">Total</th>
          </tr>
          {{-- @foreach ($orderItems as $orderItem) --}}
          @if ($orderItems)
          
            @foreach( $orderItems as $orderItem)
            <tr>
              <td class="item1"> {{ $orderItem->product->name }}</td>
              <td class="item1"> ${{ $orderItem->product->price }}</td>
              <td class="item">
                <form method="POST" action="{{ route('cart.updatecart-post') }}">
                  <input
                    type="text"
                    name="qty"
                    id="qty"
                    class="qty-input"
                    value="{{ $orderItem->qty }}"
                    placeholder="0"
                  />

                  <input type="hidden" name="hiddenId" value="{{ $orderItem->orderItemsId }}" />
                  @if ($orderItem->qty >= 1)
                  <input 
                  type="image"
                  src="/images/cart/Update_Button.png"
                
                  class="update-btn" 
                  value="Update"/>
                  @else 
                  <div></div>
                  @endif
                 
                  {{ csrf_field() }}
                </form>
              </td>
              <td class="item">
                ${{ $orderItem->product->price * $orderItem->qty }}<br>
                <form method="POST" class="f-cole" action="{{ route('cart.removefromcart-post') }}" style="padding-top: 10px">
                  <input
                    type="image"
                    src="/images/cart/Remove_Button.png"
                    height="19px"
                    width="67px"
                    class="remove-btn"
                  />            

                  <input type="hidden" name="hiddenId" value="{{ $orderItem->orderItemsId }}" />
                  {{ csrf_field() }}
                </form>
              </td>
            </tr>
      
            @endforeach
            <tr>
              <td class="subt" colspan="4">Subtotal: ${{ $total }}</td>
            </tr>
          @else
          <tr>
            <td class="item1"> </td>
            <td class="item1"> $</td>
            <td class="item">
              <form method="POST" action="{{ route('cart.updatecart-post') }}">

              
                <input
                  type="text"
                  name="qty"
                  id="qty"
                  class="qty-input"
                  value=""
                  placeholder="0"
                />

                <input type="hidden" name="hiddenId" value="" />

                <input type="submit" value="Submit">
                {{ csrf_field() }}
              </form>
            </td>
            <td class="item">
              <br>
              <form method="POST" class="f-cole" action="{{ route('cart.removefromcart-post') }}" style="padding-top: 10px">
                <input
                  type="image"
                  src="/images/cart/Remove_Button.png"
                  height="19px"
                  width="67px"
                  class="remove-btn"
                />            

                <input type="hidden" name="hiddenId" value="" />
                {{ csrf_field() }}
              </form>
            </td>
          </tr>
    
          <tr>
            <td class="subt" colspan="4">Subtotal: $0)</td>
          </tr>
           
              
          @endif
          <tr class="b-t-r">
            <td class="" colspan="4">
              <div class="d-flex justify-content-end align-items-center cart-f">
                <a href="{{ route('shop') }}" class="p-1">
                  <img
                    width="147"
                    src="/images/cart/continue.png"
                    alt=""
                    class=""
                /></a>
                <a href="{{ route('checkout') }}" class="p-1">
                  <img src="/images/cart/checkout.png" alt="" />
                </a>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </section>
  </main>
 
@endsection
