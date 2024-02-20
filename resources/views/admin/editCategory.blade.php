@extends('admin.bmain')
@section('main-section')

{{-- url('submiteditregister/'.$class->id --}}
<div class="csss">
        <form action="{{url('cupdate/'.$category->id)}}" method="POST" >
            @csrf
          <h1>Edit Form</h1>
          <div class="formcontainer">
          <hr/>
          <div class="container">
            <label for="uname"><strong> Enter your Category</strong></label>
            <input type="text"  name="name" value="{{$category->name}}" >

            <button type="submit">Submit</button>
          </div>
        </div>




@endsection
