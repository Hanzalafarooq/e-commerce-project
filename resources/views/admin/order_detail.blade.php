@extends('admin.bmain')
@section('main-section')
<div class="card-body p-0">
    <div><h2><u>Customer Data:</u></h2></div>
    <div class="table-responsive">
      <table class="table m-0">
        <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer</th>
          <th>Email</th>
          <th>Address</th>
          <th>state</th>
          <th>Country</th>
          <th>Phone</th>
          <th>Zip Code</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($orders as $orderss)

            <td><a href="{{url('/details')}}">{{$orderss->id}}</a></td>
            {{-- @endforeach --}}
            {{-- @foreach ($order as $orders ) --}}

            <td>{{$orderss->customer->name}}</td>
            <td>{{$orderss->customer->email}}</td>
            <td>{{$orderss->address . ', ' . $orderss->city}}</td>
            <td>{{$orderss->state}}</td>
            <td>{{$orderss->country}}</td>
            <td>{{$orderss->customer->phone}}</td>
            <td>{{$orderss->zipcode}}</td>
<td>  <a href="{{url('/details', $orderss->id)}}" class="btn btn-primary">
    Show Details
</a>
        </tr>
        @endforeach

        </tbody>
      </table>
    </div>

    <!-- /.table-responsive -->
  </div>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
  </div>

@endsection
