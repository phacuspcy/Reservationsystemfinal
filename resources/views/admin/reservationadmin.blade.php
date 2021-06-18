@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')

@section('title','index')

@section('content')
                               
<div class="table100 ver1 m-b-110">
    <table data-vertable="ver1">
      <thead>
        <tr class="row100 head">
          <th class="column100 column1" data-column="column1">วันที่ทำการจองวิชา</th>
          <th class="column100 column1" data-column="column1">ผู้ที่ทำการจอง</th>
          <th class="column100 column2" data-column="column2">วิชา</th>
          <th class="column100 column3" data-column="column3">หลักสูตร</th>
          <th class="column100 column3" data-column="column3"></th>
          
          
        </tr>
      </thead>
      <tbody>
        <tr class="row100">
          <td class="column100 " data-column="column1">1 / 1 / 2563</td>
          <td class="column100 column2" data-column="column2">Prayut</td>
          <td class="column100 column3" data-column="column3">080303501 BASKETBALL 1(0-1)</td>
          <td class="column100 column4" data-column="column4">เมี๊ยว</td>
          <td class="column100 column4" data-column="column4"><a href="#" class="btn btn-danger" class="open-button" onclick="openForm()">ยกเลิกการจอง</a></td>
  
          
        </tr>
      </tbody>
    </table>
    
  </div>
    
     
    
@endsection