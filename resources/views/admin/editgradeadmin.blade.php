@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')

@section('title','index')

@section('content')
                               
<body>
  
    <h3>แก้ไขสถิติการได้เกรด</h3>
    <br>

    <div class="table100 ver1 m-b-110">
      <table data-vertable="ver1">
        <thead>
        <tr class="row100 head">
          <th class="column100 column1" data-column="column1">ปีการศึกษา</th>
          <th class="column100 column2" data-column="column2">ภาคเรียน</th>
          <th class="column100 column3" data-column="column3">สถิติการได้เกรด</th>
          
          
          
        </tr>
        </thead>
        <tbody>
        <tr class="row100">
          <td class="column100 " data-column="column1">2563</td>
          <td class="column100 column2" data-column="column2">1</td>
          <td class="column100 column3" data-column="column3">ไฟล์ PDF</td>

          
      
          
        </tr>
        </tbody>
      </table>
        <br>
      <a href="{{ url('editgrade') }}"  class="btn btn-warning">แก้ไข</a>

      </div>

   

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
    
@endsection