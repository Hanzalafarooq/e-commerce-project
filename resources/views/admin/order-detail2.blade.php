@extends('admin.bmain')
@section('main-section')
<div class="card-body p-0">
    <div><h2><u>Order Details:</u></h2></div>
    <div class="table-responsive">
      <table class="table m-0">
        <thead>
        <tr>
          {{-- <th>Order ID</th> --}}
          <th>Name</th>
          <th>Quantity</th>
          <th>Price</th>
          {{-- <th>Subtotal</th> --}}
        </tr>
        </thead>
        <tbody>
            <tr>
            {{-- @foreach ($order as $orderss) --}}

            {{-- <td><a href=""></a></td> --}}
            {{-- @endforeach --}}
            @foreach ($order as $orders )

            <td>{{$orders->product->title}}</td>
            <td>{{$orders->quantity}}</td>
            <td>${{$orders->price}}</td>
            {{-- <td>${{$orders->subtotal}}</td> --}}
        </tr>
        @endforeach

        </tbody>
      </table>
    </div>
    <div class="col-lg-4 col-md-7 col-12">
        <div class="right">


            <ul>

                <li>Cart Subtotal<span> : ${{ $orders->subtotal }}</span></li>
                {{-- <li>Shipping<span>Free</span></li> --}}

                {{-- <li>You Save<span> {{ session('discount') }}</span></li> --}}

                {{-- <li class="last">You Pay<span> ${{ Cart::getTotal() }}</span></li> --}}
                {{-- @if(session('discount')) --}}
                {{-- <li>You Save<span> {{ session('discount') }}</span></li> --}}
                <li class="last">You Pay<span>: ${{ $orders->subtotal  }}</span></li>

        </ul>

  </div>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
  </div>

@endsection
