@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')

@section('title','index')

@section('content')
                               
<body>

    /*---------------------อัพโหลดแล้วภาพจะขึ้น------------------------*/
    
    <h1>อัพโหลดรูปภาพสถิติการได้เกรด</h1>
    <br><br>
    <form action="/editgrade">
      <label for="img">เลือกรูปภาพ :</label>
      <input type="file" id="img" name="img"  accept="image/*">
      <input type="submit" class="btn btn-primary btn-lg active">
      

    </form>

    
    </body>
    
     
    
@endsection