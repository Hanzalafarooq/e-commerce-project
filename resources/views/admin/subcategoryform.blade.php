@extends('admin.bmain')
@section('main-section')

<div class="csss">
        <form action="{{route('subcat.store')}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Main Category</label>
                <select class="form-select form-select-lg" name="main_category" id="">

                    <option selected>Select one</option>
                    @foreach ($categorys as $clis)
                    <option  value={{$clis->id}}>{{$clis->name}}</option>
                    @endforeach
                </select>
            </div>

          <h1>Register Form</h1>
          <div class="formcontainer">
          <hr/>
          <div class="container">
            <label for="uname"><strong> Enter your Sub-Category Name</strong></label>
            <input type="text" placeholder="Enter Name" name="name" >

            <button type="submit">Submit</button>
          </div>
        </div>

@endsection
