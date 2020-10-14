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
    <tr>
      <th>{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->role}}
      <form action=""method="post"style="display: inline;" id="edit-user">
      @method('PATCH')
                    @csrf
      <select name="role" onchange="rate({{ $users->id }}, this.value)">
                                <option value="editor">editor</option>
                                <option value="vister">vister</option>
                                <option value="admin">admin</option>
                      
                                </select>
                                <a href="{{route('edit-user',['id'=>$users->id])}}"><button type="submit" class="btn btn-dark ml-3" ></button>
      </form>
     </td>
      <td>{{$users->email}}</td>
    </tr>
   
  </tbody>
</table>
@endsection
                            