@extends("layout.master")

@section("content")
<main class="container-fluid" id="cart">
    <div class="b-h">
      <p class="">Enter Billing & Shipping Information ></p>
      <p class="">Step 2 of 4</p>
    </div>
  
    <div class="m-form">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      @if (session('success'))
      <div class="col-sm-12">
          <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <p>{{ session('success') }}               
          </div>
      </div>
      @endif
        @foreach ($orders as $order)
  
        <form method="POST" action="{{ route('cart.checkout-post') }}">
            <input type="hidden" name="hiddenId" value="{{ $order['orderCartId'] }}"/>
        {{-- <input type="hidden" value="{{ $orderItems['orderCartId'] }} }}" /> --}}
        <div class="flexy">
          <div class="b-i">
            <div class="f-s-h"><h6>Billing Address</h6></div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="firstName" class="">First Name: </label>
              </div>
              <div class="m-f-col3">
                <input
                  class=""
                  type="text"
                  name="billingFirstName"
                  id="billingFirstName"
                  value="{{ $order['billingFirstName'] }}"
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="">Last Name:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="billingLastName" id="billingLastName" 
                value="{{ $order['billingLastName'] }}" 
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="">Address:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="billingAddress1" id="billingAddress1" 
                value="{{ $order['billingAddress1'] }}" 
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="">Address 2:</label>
              </div>
              <div class="m-f-col3">
                <input
                  type="text"
                  name="billingAddress2"
                  id="billingAddress2"
                  placeholder="Optional"
                  value="{{ $order['billingAddress2'] }}"
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="billingCity">City:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="billingCity" id="billingCity" 
                value="{{ $order['billingCity'] }}" 
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="billingState">State: </label>
              </div>
              <div class="m-f-col3 s-o">
                <select name="billingState" id="billingState"  value="{{ $order['billingState'] ? Session::get('billingState') : old('billingState') }}">
                    
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="billingPostalCode">Zip/Postal:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="billingPostalCode" id="billingPostalCode" 
                value="{{ $order['billingPostalCode']  }}" 
  
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="billingPhone">Phone:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="billingPhone" id="billingPhone"  
                value="{{ $order['billingPhone'] }}" 
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="billingEmail">Email:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="billingEmail" id="billingEmail" 
                value="{{ $order['billingEmail'] }}" 
                />
              </div>
            </div>
          </div>
  
          <div class="ship-i">
            <div class="f-s-h">
              <h6>Shipping Address</h6>
  
              {{-- <a href="/cart/checkout-same">
                <img
                  src="/images/not-same.png"
                  height="20px"
                  width="auto"
                  alt=""
                />
              </a> --}}
                <input type="checkbox" onclick="SetBilling(this.checked);">
  
              <h6>Same as Billing Address</h6>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingFirstName" class="">First Name:</label>
              </div>
              <div class="m-f-col3">
                <input
                  class=""
                  type="text"
                  name="shippingFirstName"
                  id="shippingFirstName"
                  value="{{ $order['shippingFirstName'] }}"
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingLastName">Last Name:</label>
              </div>
              <div class="m-f-col3">
                <input
                  type="text"
                  name="shippingLastName"
                  id="shippingLastName"
                  value="{{ $order['shippingLastName'] }}"
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingAddress1">Address:</label>
              </div>
              <div class="m-f-col3">
                <input
                  type="text"
                  name="shippingAddress1"
                  id="shippingAddress1"
                  value="{{ $order['shippingAddress1'] }}"
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingAddress2">Address 2:</label>
              </div>
              <div class="m-f-col3">
                <input
                  type="text"
                  name="shippingAddress2"
                  id="shippingAddress2"
                  placeholder="Optional"
                  value="{{ $order['shippingAddress2'] }}"
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingCity">City: </label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="shippingCity" id="shippingCity" 
                value="{{ $order['shippingCity'] }}" 
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingState">State: </label>
              </div>
              <div class="m-f-col3 s-o">
                <select name="shippingState" id="shippingState" class="" value="{{  $order['shippingState'] }}">
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingPostalCode">Zip/Postal:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="shippingPostalCode" id="shippingPostalCode" 
                value="{{ $order['shippingPostalCode']  }} " 
              
                />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingPhone">Phone:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="shippingPhone" id="shippingPhone" placeholder="Optional"
                 value="{{ $order['shippingPhone'] }}" 
                 />
              </div>
            </div>
            <div class="m-form-row">
              <div class="m-f-col1">
                <label for="shippingEmail">Email:</label>
              </div>
              <div class="m-f-col3">
                <input type="text" name="shippingEmail" id="shippingEmail"  placeholder="Optional"
                value="{{ $order['shippingEmail'] }}" 
                />
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
                <td class="subt" colspan="4">Subtotal: ${{ $total }}</td>
              </tr>
          </table>
        </section>
  
        <div class="">
          <div class="f-s-h">
            <h6>Comments or Additional Information</h6>
          </div>
  
          <textarea
            name="notes"
            id="notes"
            cols="35"
            rows="3"
            value="{{ $order['notes'] }}"
          ></textarea>
        </div>
  
        <div class="sec-o-b d-flex justify-content-end align-items-center cart-f">
          <a href="{{ route('cart') }}" class="back-button pr-2">
            <img
              src="/images/cart/back.png"
              class=""
              alt=""
              width="94"
              height="27"
          /></a>
          {{-- <input type="hidden" name="hiddenId" 
           
          value="{{ $order['orderCartId'] }}"
          /> --}}
          {{ csrf_field() }}
          <input
            class="check-o-b"
            type="image"
            src="/images/cart/checkout2.png"
            width="94"
            height="27"
          />
        </div>
      </form>
                
      @endforeach
    </div>
  </main>
   
    <script type="text/javascript">  
  
        function SetBilling(checked) {  
                    if (checked) {  
                      document.getElementById('shippingFirstName').value = document.getElementById('billingFirstName').value;
                      document.getElementById('shippingLastName').value = document.getElementById('billingLastName').value;   
                      document.getElementById('shippingAddress1').value = document.getElementById('billingAddress1').value;   
                      document.getElementById('shippingAddress2').value = document.getElementById('billingAddress2').value;   
                      document.getElementById('shippingCity').value = document.getElementById('billingCity').value;  
                      document.getElementById('shippingState').value = document.getElementById('billingState').value;  
                      document.getElementById('shippingPostalCode').value = document.getElementById('billingPostalCode').value;   
                      document.getElementById('shippingPhone').value = document.getElementById('billingPhone').value; 
                      document.getElementById('shippingEmail').value = document.getElementById('billingEmail').value;
                  } else {  
                            document.getElementById('shippingFirstName').value = '';  
                            document.getElementById('shippingLastName').value = '';
                            document.getElementById('shippingAddress1').value = '';
                            document.getElementById('shippingAddress2').value = '';  
                            document.getElementById('shippingCity').value = '';
                            document.getElementById('shippingState').value = ''; 
                            document.getElementById('shippingPostalCode').value = '';
                            document.getElementById('shippingPhone').value = '';  
                            document.getElementById('shippingEmail').value = '';
                  }  
        }  
    
  </script>
@endsection