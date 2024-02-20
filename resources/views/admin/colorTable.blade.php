@extends('admin.bmain')
@section('main-section')
  <main>
<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">

            <tr>
                <th>ID</th>
                <th>Color name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="table-primary" >
                    @foreach ($color as $key => $item)
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$item->color_name}}</td>
                    <td><a href="{{route('color.edit', ['id' => $item->id])}}" class="btn btn-primary">Edit</a></td>
                   <td> <a href="{{route('delete.color', ['id' => $item->id])}}" type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection
