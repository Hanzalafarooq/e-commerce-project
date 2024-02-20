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
                <th>Size</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="table-primary" >
                    @foreach ($size as $key => $item)
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$item->size_name}}</td>
                    <td><a href="{{route('size.edit', ['id' => $item->id])}}" class="btn btn-primary">Edit</a></td>
                   <td> <a href="{{route('delete.size', ['id' => $item->id])}}" type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection
