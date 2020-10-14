@extends('layouts.main')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  @if($user->role != 'admin')
    <tr>
      <th>{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>Otto</td>
      <td>{{$user->email}}</td>
      <td><a style="width: 100%;" href="{{route('up')}}"><li>Delete</li></a></td>
    </tr>
    @endif
@endforeach
  </tbody>
</table>
@endsection