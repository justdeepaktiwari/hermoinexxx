@extends('admin.index')

@section('title', 'Partner Management')

@section('action-btn')
  <div class="pull-right">
    <a class="btn btn-sm rounded-0 btn-outline-success btn-sm rounded-0" href="{{ route('users.create') }}"> Create New Partner</a>
  </div>
@endsection

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px" class="text-center">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success text-danger">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td class="d-flex justify-content-evenly">
       <a class="btn btn-sm rounded-0 btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-sm rounded-0 btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-sm rounded-0 btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}
@endsection