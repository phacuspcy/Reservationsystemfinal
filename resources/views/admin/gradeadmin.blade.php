@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')

@section('title','index')

@section('content')
                               
<body>

    /*---------------------อัพโหลดแล้วภาพจะขึ้น------------------------*/
    
    <h3>แก้ไขสถิติการได้เกรด</h3>
    <br><br>
    <form action="/editgrade">
      <label for="img">เลือกรูปภาพสถิติการได้เกรด</label>
      <input type="file" id="img" name="img"  accept="image/*">
      <br>
      <input type="submit" value="ยืนยัน" class="btn btn-primary btn-lg active">
      

    </form>

    
    </body>
    
     
    
@endsection