@extends('bmain')
@section('main-section')

{{-- url('submiteditregister/'.$class->id --}}
<div class="csss">
        <form action="{{url('coupdate/'.$color->id)}}" method="POST" >
            @csrf
          <h1>Edit Form</h1>
          <div class="formcontainer">
          <hr/>
          <div class="container">
            <label for="uname"><strong> Enter your color</strong></label>
            <input type="text"  name="name" value="{{$color->color_name}}" >

            <button type="submit">Submit</button>
          </div>
        </div>




@endsection
