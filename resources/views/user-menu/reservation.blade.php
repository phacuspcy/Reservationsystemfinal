@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebar')

@section('title', 'วิชาเรียนที่เปิด')

@section('content')

    <div>

        <br>
        <h2 style="text-align: center">เลือกวิชาที่ต้องการจอง</h2>
        <br>
        <select class="form-group form-control-sm" id="menu">
            <option value="{{ url('Basketball') }}">080303501 BASKETBALL</option>
            <option value="{{ url('Volley') }}">080303502 VOLLEYBALL</option>
            <option value="{{ url('Badminton') }}">080303503 BADMINTON</option>
            <option value="{{ url('Dancing') }}">080303504 DANCING</option>
            <option value="{{ url('Tabletennis') }}">080303505 TABLETENNIS</option>
        </select>
        <a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="goBtn">ยืนยัน</a>

    </div>


    <script>
        var goBtn = document.getElementById("goBtn");
        var menu = document.getElementById("menu");

        goBtn.onclick = function() {
            window.location = menu.value;
        }
    </script>

@endsection
