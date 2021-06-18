@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebar')

@section('title','การจองวิชาเรียน')

@section('content')
                               
<div class="table100 ver1 m-b-110">
	<h3>วิชาเรียนที่เปิด</h3><br>
	<table data-vertable="ver1">
	  <thead>
		<tr class="row100 head">
		  <th class="column100 column1" data-column="column1">รหัสวิชา</th>
		  <th class="column100 column2" data-column="column2">ชื่อวิชา</th>
		  <th class="column100 column3" data-column="column3">ตอนเรียน</th>
		  <th class="column100 column4" data-column="column4">วัน</th>
		  <th class="column100 column5" data-column="column5">เวลา</th>
		  <th class="column100 column6" data-column="column6">จำนวนนักศึกษาที่รองรับ</th>	  
		</tr>
	  </thead>
	  <tbody>
		<tr class="row100">
		  <td class="column100 " data-column="column1">080303503</td>
		  <td class="column100 column2" data-column="column2">BADMINTON</td>
		  <td class="column100 column3" data-column="column3">1</td>
		  <td class="column100 column4" data-column="column4">Monday</td>	  	  
		  <td class="column100 column5" data-column="column5">08:00 - 10:00</td>	  
		  <td class="column100 column6" data-column="column6">40</td>	  
		</tr>

		<tr class="row100">
			<td class="column100 " data-column="column1">080303502</td>
			<td class="column100 column2" data-column="column2">VOLLEYBALL</td>
			<td class="column100 column3" data-column="column3">
				1<br>
				2<br>
				3
			</td>
			<td class="column100 column4" data-column="column4">				
				Monday<br>
				Tuesday<br>
				Tuesday
			</td>	  	  
			<td class="column100 column5" data-column="column5">				
				08:00 - 10:00<br>
				10:00 - 12:00<br>
				13:00 - 15:00
			</td>	  
			<td class="column100 column6" data-column="column6">
				40<br>
				40<br>
				40
			</td>	    
		</tr>

		<tr class="row100">
			<td class="column100 " data-column="column1">080303501</td>
			<td class="column100 column2" data-column="column2">BASKETBALL</td>
			<td class="column100 column3" data-column="column3">1</td>
			<td class="column100 column4" data-column="column4">Monday</td>	  	  
			<td class="column100 column5" data-column="column5">08:00 - 10:00</td>	  
			<td class="column100 column6" data-column="column6">40</td>	    
		</tr>

		<tr class="row100">
			<td class="column100 " data-column="column1">080303504</td>
			<td class="column100 column2" data-column="column2">DANCING</td>
			<td class="column100 column3" data-column="column3">1</td>
			<td class="column100 column4" data-column="column4">Monday</td>	  	  
			<td class="column100 column5" data-column="column5">08:00 - 10:00</td>	  
			<td class="column100 column6" data-column="column6">50</td>	  	  
		</tr>

		<tr class="row100">
			<td class="column100 " data-column="column1">080303505</td>
			<td class="column100 column2" data-column="column2">TABLETENNIS</td>
			<td class="column100 column3" data-column="column3">1</td>
			<td class="column100 column4" data-column="column4">Monday</td>	  	  
			<td class="column100 column5" data-column="column5">08:00 - 10:00</td>	  
			<td class="column100 column6" data-column="column6">50</td>	  	  
		</tr>
	  </tbody>
	</table>
  </div>

	  
    
@endsection 