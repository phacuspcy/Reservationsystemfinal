@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')

@section('title', 'index')

@section('content')
<body>
    <br>
    <h3>แก้ไขวิชาเรียน</h3><br><br>  
    <form class="form-inline">
        <div class="form-group">
            <label>รหัสวิชา : </label>
            <input type="text" class="form-control" id="subid" name="subid" required>
        </div>
    </form>
    <form class="form-inline">
        <div class="form-group">
            <label>ชื่อวิชา : </label>
            <input type="text" class="form-control" id="subname" name="subname" required>
        </div>
    </form>
    <form class="form-inline">
        <div class="form-group">
            <label>ตอนเรียน : </label>
            <input type="text" class="form-control" id="subsec" name="subsec" required>
        </div>
    </form>
    <form class="form-inline">
        <div class="form-group">
            <label>วัน : </label>
            <input type="text" class="form-control" id="subdate" name="subdate" required>
        </div>
    </form>
    <form class="form-inline">
        <div class="form-group">
            <label>เวลา : </label>
            <input type="text" class="form-control" id="subtime" name="subtime" required>
        </div>
    </form>
    <form class="form-inline">
        <div class="form-group">
            <label>จำนวนนักศึกษา : </label>
            <input type="text" class="form-control" id="subnum" name="subnum" required>
        </div>
    </form>
    <form><br>
        <button type="button" class="btn btn-info">บันทึก</button>
        <a href="{{ url('managesubject') }}"><button type="button" class="btn btn-danger">ยกเลิก</button></a>
    </form>
    
</body>

@endsection
