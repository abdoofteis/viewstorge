@extends('layouts.main')

@section('content')
 <div class=" container ">
    <div clas="content">
    <form action="{{route('update_img',['id'=>$img->id])}}" method="post" enctype="multipart/form-data" style="display: inline;" id="edit-img">
      @method('PATCH')
                    @csrf 
     <div class="row form-group">
     <label class="col-2 col-form-label"> title</label>
     <div class=" col-10">
     <input type ="text" name ="title" value= "{{$img->title}}">
      </div>
     </div>
     
     <!-- <br> -->
     <div class="row form-group">
     <label class="col-2 col-form-label">name</label>
     <div class=" col-10">
     <input type ="text" name="name" value="{{$img->name}}">
     </div>
     </div>
     <!-- <br> -->
     <div class="row form-group">
     <label class="col-2 col-form-label">storge </label>
     <div class=" col-10">
     <input type="file" class="img" name="img" >
</div>
     </div>

     <div class="row form-group">
     <input type="submit" class="btn btn-primary offset-2" value="upload">
     </div>
     </form>
    </div>
</div>


<div class="viwe">
</div>

@endsection