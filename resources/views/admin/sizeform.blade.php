@extends('admin.bmain')
@section('main-section')
{{-- {{route('size.save')}} --}}
<div class="csss">
        <form action="{{route('size.save')}} " method="POST" >
            @csrf
          <h1>Register Form</h1>
          <div class="formcontainer">
          <hr/>
          <div class="container">
            <label for="uname"><strong> Enter Size</strong></label>
            <input type="text" placeholder="Enter Name" name="name" >

            <button type="submit">Submit</button>
          </div>
        </div>

@endsection
