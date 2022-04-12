@extends('home-page.index')
@section('content')
<section class="shopping-cart">

    <div class="container">
        <div class="col-md-12">
            <h2>You cart items</h2>
            <table>
                <tr >
                    <th></th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Remove</th>
                </tr>
                @foreach($cart as $item)
                    <tr>
                        <td><img class="cartimg"src="{{$item->attributes->img}}" alt="product"></td>
                        <td>{{$item->name}}</td>
                        <td><strong>${{$item->price}}</strong></td>
                        <td><input type="number" name="quantity" min="1" max="500" value="{{$item->quantity}}" disabled></td>
                        <td><strong>${{$item->price * $item->quantity}}</strong></td>
                        <td><span class="red">
                                <a href="{{route('cart-delete', $item->id)}}">
                                        {{-- <i class="fa fa-trash" </i> --}}
                                        <i class="fas fa-minus red-color text-center remove"aria-hidden="true" title="remove"></i>
                                </a>
                             </span></td>
                    </tr>
                @endforeach
            </table>
            <div class="col-sm-6 col-md-6">
                <a href="{{route('index')}}" class="button red">CONTINUE SHOPPING</a>
            </div>

            <div class="col-sm-4 col-md-4">
                <div class="shipping-outer">
                    <h2>Cart totals</h2>
                    <ul>
                        <?php
                            $total = Cart::getTotal();
                        ?>
                        <li>Cart Totals : <strong>$ {{ $total }}</strong></li>
                    </ul>
                    <div class="text-center">
                        <a href="{{route('checkout.index')}}" class="redbutton">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ csrf_field() }}

</section>


@endsection
