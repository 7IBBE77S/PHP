@extends('home-page.index')

@section('content')

    <section class="shopping-cart">

        <div class="container">

            <div class="tabContent" id="tabContent1">
                <div class="panel-body">
                    <div id="checkout-step-review" class="step a-item" style="">
                        <div class="order-review" id="checkout-review-load">
                            <div id="checkout-review-table-wrapper">
                                <table class="data-table linearize-table checkout-review-table" id="checkout-review-table">
                                    <thead>
                                    <tr class="first last">
                                        <th rowspan="1">Order Info</th>
                                        
                                    </tr>
                                    </thead>
                                    <tr class="first">
                                        <td style="" class="a-right" colspan="3">
                                            Subtotal
                                        </td>
                                        <td style="" class="a-right last">
                                            <?php
                                                $total = Cart::getTotal();
                                                $grand_total = $total + 10;
                                            ?>
                                            <span class="price">${{$total}}.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="" class="a-right" colspan="3">
                                            Shipping &amp; Handling (Flat Rate - Fixed)
                                        </td>
                                        <td style="" class="a-right last">
                                            <span class="price">$10.00</span>
                                        </td>
                                    </tr>
                                    <tr class="last">
                                        <td style="" class="a-right" colspan="3">
                                            <strong>Grand Total</strong>
                                        </td>
                                        <td style="" class="a-right last">
                                            <strong><span class="price">${{$grand_total}}.00</span></strong>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>

                    <h3>Shipping Information</h3>
                    <form action="{{route('checkout.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="price" value="{{$grand_total}}">
                        <div class="shipping-outer">
                            <div class="col-sm-6 col-md-6">
                                <div class="row">
                                    <div class="col-md-12 counttry">
                                        <div class="lable">First Name*</div>
                                        <input name="first_name" placeholder="First Name" type="text" >
                                        @error('first_name')
                                        <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="col-md-12 counttry">
                                    <div class="lable">Last Name*</div>
                                    <input name="last_name" placeholder="Last Name" type="text">
                                    @error('last_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="lable">Email*</div>
                                <input name="email" placeholder="Email" type="email">
                                @error('email')
                                <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="lable">Address*</div>
                                <input name="address" placeholder="Address" type="text">
                                @error('address')
                                <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                @enderror
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="lable">Country*</div>
                                <div class="size State">
                                    <div class="select-option">
                                        <input name="country" placeholder="country" type="text">
                                        @error('country')
                                        <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="lable">State/Province*</div>
                                <input name="state" placeholder="State" type="text">
                                @error('state')
                                <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="lable">City*</div>
                                <input name="city" placeholder="City" type="text">
                                @error('city')
                                <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="lable">Telephone</div>
                                <input name="telephone" placeholder="Telephone" type="text">
                                @error('telephone')
                                <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                @enderror
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="lable">Zip/Postal Code</div>
                                <input name="zip" placeholder="Zip/Postal Code" type="text">
                                @error('zip')
                                <span class="text-danger" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="lable">Additional Order Notes</div>
                                <textarea name="order_notes" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            {{ csrf_field() }}

                            <div class="col-sm-4 col-md-4">
                                <button type="submit" class="button2">Order Now</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


        </div>
        <!-- /.shopping-cart -->
    </section>

@endsection
