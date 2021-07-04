@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')

@section('title','index')

@section('content')
                               
<body>

    /*---------------------อัพโหลดแล้วภาพจะขึ้น------------------------*/
    
    <h3>แก้ไขสถิติการได้เกรด</h3>
    <br><br>
    
      

      <input id="real_input" type="file">
      <div>
        <button id="custom_input">อัพโหลด</button>
        <span id='file_name'>ชื่อไฟล์.pdf</span>
      </div>
   

      {{-- <label for="img">เลือกรูปภาพสถิติการได้เกรด</label> 
      <input type="file" id="img" name="img"  accept="image/*"> --}}

      <br>
      <input type="submit" value="ยืนยัน" class="btn btn-primary btn-lg active">
      

 

    
    </body>
    
    <script>
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

    </script>
    
@endsection