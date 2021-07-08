@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('title','index')

@section('content')
                               
<body>

  
    <h3>แก้ไขสถิติการได้เกรด</h3>
    <br>
    
    <div class="table100 ver1 m-b-110">
      <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add Row</button>

      <br><br>
      <table data-vertable="ver1">
        <thead>
        <tr class="row100 head">
          <th class="column100 column1" data-column="column1">ปีการศึกษา</th>
          <th class="column100 column2" data-column="column2">ภาคเรียน</th>
          <th class="column100 column3" data-column="column3">สถิติการได้เกรด</th>
          <th class="column100 column3" data-column="column4">อัพโหลดไฟล์</th>
          <th class="column100 column3" data-column="column4">Action</th>
          
          
        </tr>
        </thead>
        <tbody>
        <tr class="row100">
          <td class="column100 " data-column="column1"><input type="text" value="2563" ></td>
          <td class="column100 column2" data-column="column2"><input type="text" value="1"></td>
          <td class="column100 column3" data-column="column3">ไฟล์ PDF</td>
          <td class="column100 column4" data-column="column4"><input type="file"><button></button></td>
          {{-- <td class="column100 column4" data-column="column4"><input id="real_input" type="file"><button id="custom_input">อัพโหลด</button><a id='file_name'><br>ชื่อไฟล์.pdf</span></td> --}}
          <td>
            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
          </td>
      
          
        </tr>
        </tbody>
      </table>
      </div>

      <br>
      <a style="margin-right: 50px"  class="btn btn-success">ตกลง</a>
      <a href="{{ url('editgrade') }}"  class="btn btn-danger">ยกเลิก</a>
   

      {{-- <label for="img">เลือกรูปภาพสถิติการได้เกรด</label> 
      <input type="file" id="img" name="img"  accept="image/*"> --}}

      {{-- <br>
      <input type="submit" value="ยืนยัน" class="btn btn-primary btn-lg active">
       --}}

 

    
    </body>


        {{-- <script>
        const inputButton = document.querySelector('#real_input');
    const customButton = document.querySelector('#custom_input');
    const fileName = document.querySelector('#file_name');

    customButton.addEventListener('click', () => {
    inputButton.click();
});

  inputButton.addEventListener('change', () => {
  if(inputButton.value) {

    fileName.innerHTML = inputButton.value.split(/(\\|\/)/g).pop();
    fileName.classList.add("active");
    customButton.style.width = '50px';
    customButton.innerHTML = '&#x21ba';

  } else {
    fileName.classList.remove('active');
    customButton.innerHTML = "อัพโหลด";
    customButton.style.width = '150px';
  }
});

    </script> --}}
 

<script>


  $(document).ready(function(){
    
    $('[data-toggle="tooltip"]').tooltip();
    var actions = $("table td:last-child").html();
    // Append table with add row form on add new button click
    $(".add-new").click(function(){
      
      $(this).attr("disabled", "disabled");
      var index = $("table tbody tr:last-child").index();
      var row = '<tr class="row100">' +
        '<td class="column100 "><input type="text" class="form-control" name="id" id="id"></td>' +
        '<td class="column100 "><input type="text" class="form-control" name="subject" id="subject"></td>' +
        '<td class="column100 ">ไฟล์ PDF</td>' +
        '<td class="column100 column4" data-column="column4"><input type="file"><button></button></td>' +
        '<td>' + actions + '</td>' +
      '</tr>';
      
      $("table").append(row);		
      $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
      $('[data-toggle="tooltip"]').tooltip();
      
    });


    // Delete row on delete button click
    $(document).on("click", ".delete", function(){
      $(this).parents("tr").remove();
      $(".add-new").removeAttr("disabled");
    });
  });
  </script>
    
@endsection