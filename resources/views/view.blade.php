@extends('layouts.main')


@section('content')
<div class="container">
<div class="row ">
  @foreach($image as $img)
  <div class="col-lg-4 col-md-6 col-sm-12"> 
<div class="card" style="width: 18rem;">
  <img src="{{ asset(Storage::url($img->img)) }}" class="card-img-top" alt="..." height="250px">
  <div class="card-body">
    <h5 class="card-title">{{$img->title}}</h5>
    <p class="card-text">{{$img->name}}</p>
  </div>
 </div>
 </div>

 @endforeach
</div>
</div>
@endsection