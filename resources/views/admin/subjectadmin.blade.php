@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')

@section('title','index')

@section('content')
                               
<div class="table100 ver1 m-b-110">
	<table data-vertable="ver1">
	  <thead>
		<tr class="row100 head">
		  <th class="column100 column1" data-column="column1">รหัสวิชา</th>
		  <th class="column100 column2" data-column="column2">ชื่อวิชา</th>
		  <th class="column100 column3" data-column="column3">ตอนเรียน</th>
		  <th class="column100 column3" data-column="column3">จำนวนนักศึกษาที่รองรับ</th>
		  
		  
		</tr>
	  </thead>
	  <tbody>
		<tr class="row100">
		  <td class="column100 " data-column="column1">080303503</td>
		  <td class="column100 column2" data-column="column2">080303501 BASKETBALL 1(0-1)</td>
		  <td class="column100 column3" data-column="column3">1</td>
		  <td class="column100 column4" data-column="column4">50</td>
  
		  
		</tr>
	  </tbody>
	</table>
  </div>

  <br>
        <a href="{{ url('editsubjectadmin') }}"  class="btn btn-success">แก้ไขรายวิชาเรียนที่เปิด</a>
    
     
    
@endsection