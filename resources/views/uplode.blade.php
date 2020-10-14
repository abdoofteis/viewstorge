@extends('layouts.main')

@section('content')
 <div class=" container ">
    <div clas="content">
     <form action ="{{Route('upload')}}" method="post" enctype="multipart/form-data" >
     @csrf 
     <label> text title</label>
     <input type ="text" name ="title" >
     <br>
     <label>text description</label>
     <input type ="text" name ="name">
     <br>
     <label>uplode file </label>
     <input type="file" class="img" name="img">
     <input type="submit" class="btn" value="upload">
     </form>
    </div>
</div>


<div class="viwe">
</div>

@endsection