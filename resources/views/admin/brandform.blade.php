@extends('admin.bmain')
@section('main-section')


<div class="csss">

        <form action="{{route('brands.store')}}" method="POST" >
            @csrf
          <h1>Register Form</h1>
          <div class="formcontainer">
          <hr/>
          <div class="container">
            <label for="uname"><strong>Please Enter your Brand</strong></label>
            <input type="text" placeholder="Enter Name" name="name" >

            <button type="submit">Submit</button>
          </div>
        </div>




@endsection


