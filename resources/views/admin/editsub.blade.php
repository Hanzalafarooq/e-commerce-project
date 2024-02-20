@extends('admin.bmain')
@section('main-section')

{{-- url('submiteditregister/'.$class->id --}}
<div class="csss">
        <form action="{{url('supdate/'.$subcategory->id)}}" method="POST" >
            @csrf
          <h1>Edit Form</h1>
          <div class="formcontainer">
          <hr/>
          <div class="container">
            <label for="uname"><strong> Enter your sub-category</strong></label>
            <input type="text"  name="name" value="{{$subcategory->sub_category}}" >

            <button type="submit">Submit</button>
          </div>
        </div>




@endsection
