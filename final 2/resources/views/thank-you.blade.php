@extends('home-page.index')
@section('content')
    <section class="shopping-cart " >
   
        <div class="container ">
            <div class="col-md-12 ">
                <h2>Thank you for your order!</h2>
                <p>Here are your order details:</p>
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Total Amount</th>
                        <th>Order Number</th>
                        <th></th>
                    </tr>
                        <tr>
                            <td>{{ $order->first_name }}</td>
                            <td>{{$order->last_name}}</td>
                            <td><strong>${{ $order->price }}</strong></td>
                            <td><strong>{{$order->order_id}}</strong></td>

                        </tr>
                </table>

            </div>
        </div>
        {{ csrf_field() }}
    </section>
@endsection
