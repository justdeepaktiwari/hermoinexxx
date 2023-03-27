@extends('admin.index')

@section('title', 'Partner Management')

@section('action-btn')
  <div class="pull-right">
    <a class="btn btn-sm rounded-0 btn-outline-success btn-sm rounded-0" href="{{ route('models.create') }}"> Create New Partner</a>
  </div>
@endsection

@section('content')
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th width="280px" class="text-center">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td class="d-flex justify-content-evenly">
       <a class="btn btn-sm rounded-0 btn-info" href="{{ route('models.show',$user->id) }}">Show</a>
       <a class="btn btn-sm rounded-0 btn-primary" href="{{ route('models.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['models.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-sm rounded-0 btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}
@endsection

@section("js")
  @if ($message = Session::get('success'))
    <script>
      tata.success("Success!", '{{ $message }}')
    </script>
  @endif
@endsection