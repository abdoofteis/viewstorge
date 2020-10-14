@extends('layouts.main')


@section('content')
<div class="container">
<div class="row ">
  @foreach($image as $img)
  <div class="col-lg-4 col-md-6 col-sm-12"> 
<div class="card  md-5 " style="width: 18rem;">
  <img src="{{ asset(Storage::url($img->img)) }}" class="card-img-top" alt="..." height="250px">
  <div class="card-body">
    <h5 class="card-title">{{$img->title}}</h5>
    <p class="card-text">{{$img->name}}</p>
  </div>
 </div>
 
 @if(Auth::user()->role == 'admin'||Auth::user()->role=='editor')
 <form action="{{ route('destroy',['id'=>$img->id]) }}" method="post" style="display: inline; padding-right: 100px;">
 <input type="submit" value="delet" class="btn btn-danger">
                                  @csrf
                                @method('DELETE')
                                </form>
     <a href="{{ route('edit_img',['id'=>$img->id]) }}" ><input type="submit" value="Edit" class="btn btn-primary ml-5"></a>

      @endif  
      <!-- <form action="{{ route('edit_img',['id'=>$img->id]) }}" method="post" style="display: inline; padding-right: 100px;">    -->
      <!-- <form> -->
 </div>
 @endforeach
</div>
</div>

@endsection