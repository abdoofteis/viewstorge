@extends('layouts.main')

@section('content')
 <div class=" container ">
    <div clas="content">
     <form action ="{{Route('upload')}}" method="post" enctype="multipart/form-data" >
     @csrf 
     <div class="row form-group">
     <label class="col-2 col-form-label"> title</label>
     <div class=" col-10">
     <input type ="text" name ="title" >
      </div>
     </div>
     
     <!-- <br> -->
     <div class="row form-group">
     <label class="col-2 col-form-label">text description</label>
     <div class=" col-10">
     <input type ="text" name ="name">
     </div>
     </div>
     <!-- <br> -->
     <div class="row form-group">
     <label class="col-2 col-form-label">uplode file </label>
     <div class=" col-10">
     <input type="file" class="img" name="img">
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