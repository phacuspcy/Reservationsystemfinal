@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')


@section('title', 'index')

@section('content')
<h3>แก้ไขรายวิชาเรียนที่เปิด</h3>
<br>
<div class="table100 ver1 m-b-110">
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
		  <td class="column100 " data-column="column1"><select id = "subject" onchange="myFunction()"><option type="text" value = "">กรุณาเลือกวิชา</option><option type="text" value="BASKETBALL 1(0-1)" >080303501</option><option type="text" value="VOLLEYBALL 1(0-1)">080303502</option></select></td>
		  <td class="column100 column2" data-column="column2"><a id="select"></a></td>
		  {{-- <td class="column100 column2" data-column="column2"><input type="text" value="BASKETBALL 1(0-1)" ></td> --}}
		  <td class="column100 column3" data-column="column3"><input type="text" value="1" ></td>
		  <td class="column100 column4" data-column="column4"><input type="text" value="50" ></td>
  
		  
		</tr>
	  </tbody>
	</table>
  </div>

  <br>
    <a style="margin-right: 50px"  class="btn btn-success">ตกลง</a>
    <a href="{{ url('editsubject') }}"  class="btn btn-d	anger">ยกเลิก</a>
    
	<script>
		function myFunction() {
		  var x = document.getElementById("subject").value;
		  document.getElementById("select").innerHTML =   x;
		}
		</script>

	
    
@endsection
    <h3>แก้ไขรายวิชาเรียนที่เปิด</h3>
    <br>
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
                    <td class="column100 " data-column="column1"><select id="subject" onchange="myFunction()">
                            <option type="text" value="">กรุณาเลือกวิชา</option>
                            <option type="text" value="BASKETBALL 1(0-1)">080303501</option>
                            <option type="text" value="VOLLEYBALL 1(0-1)">080303502</option>
                        </select></td>
                    <td class="column100 column2" data-column="column2"><a id="select"></a></td>
                    {{-- <td class="column100 column2" data-column="column2"><input type="text" value="BASKETBALL 1(0-1)" ></td> --}}
                    <td class="column100 column3" data-column="column3"><input type="text" value="1"></td>
                    <td class="column100 column4" data-column="column4"><input type="text" value="50"></td>


                </tr>
            </tbody>
        </table>
    </div>

    <br>
    <a style="margin-right: 50px" class="btn btn-success">ตกลง</a>
    <a href="{{ url('editsubject') }}" class="btn btn-danger">ยกเลิก</a>

    <script>
        function myFunction() {
            var x = document.getElementById("subject").value;
            document.getElementById("select").innerHTML = x;
        }
    </script>



@endsection
