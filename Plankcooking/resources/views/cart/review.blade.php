@extends("layout.master")

@section("content")
<main class="container-fluid" id="cart">
    <div class="b-h">
      <p class="">Enter Billing & Shipping Information ></p>
      <p class="">Step 3 of 4</p>
    </div>
    <div class="m-form-review">
        @foreach ($orders as $order)
        <form method="POST" action="{{ route('cart.purchase-post') }}">
            <input type="hidden" name="hiddenId" value="{{ $order['orderCartId'] }}"/>
        <div class="flexy">
          <div class="b-i-review">
            <div class="f-s-h-review">
              <h6>Billing Address</h6>
            </div>
            <div class="marg-c">
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Name: </div>
                <div class="m-f-col3">{{ $order['billingFirstName'] }} {{ $order['billingLastName'] }}</div>
              </div>
             
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address:</div>
                <div class="m-f-col3">{{ $order['billingAddress1'] }} {{ $order['billingCity'] }}, {{ $order['billingState'] }} {{ $order['billingPostalCode']  }}</div>
              </div>
  
              @if( $order['billingAddress2'] != null )
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address 2:</div>
                <div class="m-f-col3">{{ $order['billingAddress2'] }}</div>
              </div>
  @else
 <br>
          @endif
        
        
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Phone:</div>
                <div class="m-f-col3">{{ $order['billingPhone']  }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Email:</div>
                <div class="m-f-col3">{{ $order['billingEmail']  }}</div>
              </div>
            </div>
          </div>
  
          <div class="ship-i">
            <div class="f-s-h-review">
              <h6>Shipping Address</h6>
            </div>
            <div class="marg-c">
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Name:</div>
                <div class="m-f-col3">{{ $order['shippingFirstName'] }} {{ $order['shippingLastName'] }}</div>
              </div>
          
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address:</div>
                <div class="m-f-col3">{{ $order['shippingAddress1'] }} {{ $order['shippingCity'] }}, {{ $order['shippingState'] }} {{ $order['shippingPostalCode'] }}</div>
              </div>
  
              @if( $order['shippingAddress2'] != null )
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address 2:</div>
                <div class="m-f-col3">{{ $order['shippingAddress2'] }}</div>
              </div>
  @else
 <br>
          @endif
             
           
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Phone:</div>
                <div class="m-f-col3">{{ $order['shippingPhone'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Email:</div>
                <div class="m-f-col3">{{ $order['shippingEmail'] }}</div>
              </div>
            </div>
          </div>
          
        </div>
        <section id="cart-t" class="check-t">
          <table class="">
            <tr class="t-t">
              <th class="item1">Shipping to you</th>
              <th class="item">price</th>
              <th class="item">Quantity</th>
              <th class="item">Total</th>
            </tr>
  
            @foreach( $orderItems as $orderItem)
            <tr>
              <td class="item1"> {{ $orderItem->product->name }}</td>
              <td class="item1"> ${{ $orderItem->product->price }}</td>
              <td class="item">
                {{ $orderItem->qty }}
              </td>
              <td class="item">
                ${{ $orderItem->product->price * $orderItem->qty }}<br>
            
              </td>
            </tr>
  @endforeach
            <tr>
                
              <td class="subt" colspan="4">
                Subtotal: ${{ $total }}
                <br />
                
                *Shipping & Handling:
              
             
                <select name="shippingType" id="shippingType">
                  <option value="1"> U.S.P.S. Parcel (3 - 8 days)</option>
                
                  <option value="2">U.S.P.S. Priority (2 - 4 days)</option>
                </select>

                
                
                
                    @if ($order['shippingType'] === 1)
                
               ${{ $order['shippingCost'] = $total * 0.05}}
                  @endif
                  @if ($order['shippingType'] === 2)
           ${{ $order['shippingCost'] = $total * 0.10}}
                  @endif 
                <input type="hidden" name="shippingCost" id="shippingCost" 
                value="{{ $order['shippingCost'] }}" 
                />
              
              
              
    
               
                  
    
               
                <br />
                Total: ${{ $order['orderTotal'] = $total + $order['shippingCost'] }} 
                <input type="hidden" name="orderTotal" id="orderTotal" 
                value="{{  $order['orderTotal'] }}" 
                />

              </td>
              {{-- <input type="hidden" name="finalTotal" id="finalTotal" value="" /> --}}
            </tr>
          </table>
          <p>
            <i>*Shipping durations are estimates and not a guarantee</i>
          </p>
        </section>
  
        <div class="pay-i">
          <div class="f-s-h-review">
            <h6>Payment Information</h6>
          </div>
          <label for="creditCardType">Card Type</label>
          <select name="creditCardType" id="creditCardType">
            <option value="visa">Visa</option>
            <option value="m-c">MasterCard</option>
            <option value="disc">Discover</option>
            <option value="a-e">American Express</option>
          </select>
          <br />
          <label for="cardNumber">Card Number: </label>
          <input
            type="text"
            name="cardNumber"
            id="cardNumber"
            placeholder="Card Number"
          />
  
          <label> Expiration: </label>
          <select id="expiryMonth">
            <option selected>Month</option>
            <option value="january">01</option>
            <option value="february">02</option>
            <option value="march">03</option>
            <option value="april">04</option>
            <option value="may">05</option>
            <option value="june">06</option>
            <option value="july">07</option>
            <option value="august">08</option>
            <option value="september">09</option>
            <option value="october">10</option>
            <option value="novemeber">11</option>
            <option value="december">12</option>
          </select>
          <select id="expiryYear">
            <option selected>Year</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
          </select>
        </div>
  
        <div class="sec-o-b d-flex justify-content-end align-items-center cart-f">
          <a href="{{ route('checkout') }}" class="back-button">
            <img
              src="/images/cart/back.png"
              class="pr-2"
              alt=""
              width="94"
              height="27"
          /></a>
          {{ csrf_field() }}
  
          <input
            class="check-o-b"
            type="image"
            src="/images/cart/purchase.png"
            width="94"
            height="27"
          />
        </div>
      </form>
      @endforeach
    </div>
  </main>
  
  @endsection