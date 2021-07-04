<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>template - @yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link href="assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="header fix-sidebar">
    
    <div id="main-wrapper"> 
        
        <aside class="left-sidebar" > 
            
            <nav id="sidebar">
				
	 
                <ul class="list-unstyled components mb-5">
                  <li>
                    <a href="{{ url('editsubject') }}"><span class="mr-3"></span> แก้ไขรายวิชาเรียนที่เปิด</a>
                  </li>
                  <li>
                      <a href="{{ url('editreservation') }}"><span class="mr-3"></span> แก้ไขรายการจองวิชาเรียน</a>
                  </li>
                  <li>
                    <a href="{{ url('editstat') }}"><span class="mr-3"></span> แก้ไขสถิติการจองวิชาเรียน</a>
                  </li>
                  <li>
                    <a href="{{ url('editgrade') }}"><span class="mr-3"></span> แก้ไขสถิติการได้เกรด</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}"><span class="mr-3"></span> ออกจากระบบ</a>
                  </li>
                </ul>
        
                </nav>

            
        </aside>
        
    </div>
    
</body>
</html>