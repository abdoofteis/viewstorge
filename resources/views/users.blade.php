@extends('layouts.main')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">E-mail</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  @if($user->role != 'admin')
    <tr>
      <th>{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->email}}</td>
      <td><a href="{{route('edit-user',['id'=>$user->id])}}"><button type="submit"><li id="file"><i class="fa fa-remove"></i> Edit User</li></button>
</td>

      <td>									<form action="{{ route('destroyuser',['id'=>$user->id]) }}" method="post" style="display: inline;" id="delet-user">
					                @method('DELETE')
                                    @csrf
									<button type="submit"><li id="file"><i class="fa fa-remove"></i> Delete User</li></button>
									</form>
      </td>
    

    </tr>
   
    @endif
@endforeach
  </tbody>
</table>
@endsection
