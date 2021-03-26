@extends("layout.master")

@section("content")
<main class="container-fluid" id="cart">
    <div class="b-h">
      <p class="">Enter Billing & Shipping Information ></p>
      <p class="">Step 4 of 4</p>
    </div>
    <div class="m-form-review">
        @foreach ($orders as $order)
      <form action="/cart/complete" method="POST">
        <input type="hidden" value="" />
        <input type="hidden" value="" />
        <div class="flexy">
          <div class="b-i-review">
            <div class="f-s-h-review">
              <h6>Billing Address</h6>
            </div>
            <div class="marg-c">
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">First Name:</div>
                <div class="m-f-col3">{{ $order['billingFirstName'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Last Name:</div>
                <div class="m-f-col3">{{ $order['billingLastName'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address:</div>
                <div class="m-f-col3">{{ $order['billingAddress1'] }}</div>
              </div>
  
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address 2:</div>
                <div class="m-f-col3">{{ $order['billingAddress2'] }}</div>
              </div>
  
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">City:</div>
                <div class="m-f-col3">{{ $order['billingCity'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">State:</div>
                <div class="m-f-col3">{{ $order['billingState'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Zip/Postal:</div>
                <div class="m-f-col3">{{ $order['billingPostalCode'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Phone:</div>
                <div class="m-f-col3">{{ $order['billingPhone'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Email:</div>
                <div class="m-f-col3">{{ $order['billingEmail'] }}</div>
              </div>
            </div>
          </div>
  
          <div class="ship-i">
            <div class="f-s-h-review">
              <h6>Shipping Address</h6>
            </div>
            <div class="marg-c">
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">First Name:</div>
                <div class="m-f-col3">{{ $order['shippingFirstName'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Last Name:</div>
                <div class="m-f-col3">{{ $order['shippingLastName'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address:</div>
                <div class="m-f-col3">{{ $order['shippingAddress1'] }}</div>
              </div>
  
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Address 2:</div>
                <div class="m-f-col3">{{ $order['shippingAddress2'] }}</div>
              </div>
  
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">City:</div>
                <div class="m-f-col3">{{ $order['shippingCity'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">State:</div>
                <div class="m-f-col3">{{ $order['shippingState'] }}</div>
              </div>
              <div class="m-form-row-review">
                <div class="m-f-col1 mr-1">Zip /Postal:</div>
                <div class="m-f-col3">{{ $order['shippingPostalCode'] }}</div>
              </div>
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
                  Tax: $0.00
                <br />
                <div class="d-inline">   *Shipping & Handling:
                  @if ($order['shippingType'] === 1)
                
                U.S.P.S. Parcel (3 - 8 days) ${{ $order['shippingCost'] = $total * 0.05}}
                  @endif
                  @if ($order['shippingType'] === 2)
                
                 U.S.P.S. Priority (2 - 4 days) ${{ $order['shippingCost'] = $total * 0.10}}
                  @endif
                 {{-- 10.95 --}}
                </div>
                  <br />
                  Total: ${{ $total +  $order['shippingCost']}}
                  {{-- {{ $finalTotal }} --}}
                </td>
                
               
              </tr>
            </table>
            <p>
              <i>*Shipping durations are estimates and not a guarantee</i>
            </p>
          </section>
          <div class="pay-i">
            <div class="f-s-h-review">
              <h6>Comments or Additional Information</h6>
            </div>
          </div>
    
          <div class="sec-o-b">
            <div class="b-c-b text-center">
              
              <p>{{ $order['notes'] }}</p>
              
              <br />
            </div>
          </div>
        <div class="pay-i">
          <div class="f-s-h-review">
            <h6>Payment Information</h6>
          </div>
        </div>
  
        <div class="sec-o-b">
          <div class="b-c-b">
            <p>Confirmation Code:- 12334663 Card Number: -- XXXX-XXXX-</p>
            <br />
          </div>
        </div>
      </form>
      @endforeach
    </div>
  </main>
  @endsection