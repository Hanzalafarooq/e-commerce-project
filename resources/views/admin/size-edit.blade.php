@extends('admin.bmain')
@section('main-section')

{{--  --}}
<div class="csss">
        <form action="{{url('siupdate/'.$size->id)}}" method="POST" >
            @csrf
          <h1>Edit Form</h1>
          <div class="formcontainer">
          <hr/>
          <div class="container">
            <label for="uname"><strong> Enter Size</strong></label>
            <input type="text"  name="name" value="{{$size->size_name}}" >

            <button type="submit">Submit</button>
          </div>
        </div>




@endsection
