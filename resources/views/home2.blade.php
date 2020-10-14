@extends('layouts.main')

@section('content')
 <div class=" container ">
    <div clas="content">
    @if(Auth::user()->role == 'admin')
    <a style="width: 100%;" href="{{route('view')}}"><li>View</li></a>
    <a style="width: 100%;" href="{{route('up')}}"><li>Upload</li></a>
    <a style="width: 100%;" href="{{route('users')}}"><li>Users</li></a>
    <a style="width: 100%;" href="{{route('register')}}"><li>SignUp</li></a>
    @elseif(Auth::user()->role == 'editor')
    <a style="width: 100%;" href="{{route('view')}}"><li>View</li></a>
    <a style="width: 100%;" href="{{route('up')}}"><li>Upload</li></a>
    @else
    <a style="width: 100%;" href="{{route('view')}}"><li>View</li></a>
    @endif
    </div>
</div>


<div class="viwe">
</div>

@endsection