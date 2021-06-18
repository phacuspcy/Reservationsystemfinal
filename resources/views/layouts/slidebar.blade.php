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
        {{-- <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a href="{{ url('subjects') }}" aria-expanded="false"><span class="hide-menu">รายวิชาเรียนที่เปิด</span></a>
                        </li>
                        <li> <a href="{{ url('reservation') }}" aria-expanded="false"><span class="hide-menu">จองวิชาเรียน</span></a>
                        </li>
                        <li> <a href="{{ url('cancelreservation') }}" aria-expanded="false"><span class="hide-menu">ยกเลิกการจองวิชาเรียน</span></a>
                        </li>
                        <li> <a href="{{ url('history') }}" aria-expanded="false"><span class="hide-menu">ประวัติการจองวิชาเรียน</span></a>
                        </li>
                        <li> <a href="{{ url('stat-reservation') }}" aria-expanded="false"><span class="hide-menu">สถิติการจองวิชาเรียน</span></a>
                        </li>
                        <li> <a href="{{ url('stat-grade') }}" aria-expanded="false"><span class="hide-menu">สถิติการได้เกรด</span></a>
                        </li>
                        <li> <a href="{{ url('login') }}" aria-expanded="false"><span class="hide-menu">ออกจากระบบ</span></a>
                        </li>
                    </ul>      
                </nav>
                <!-- End Sidebar -->
            </div>
            <!-- End Sidebar scroll-->
        </aside> --}}
        <!-- End left-slidebar -->  
        <aside class="left-sidebar" > 
            
            <nav id="sidebar">
				
	 
                <ul class="list-unstyled components mb-5">
                  <li>
                    <a href="{{ url('subjects') }}"><span class="mr-3"></span> รายวิชาเรียนที่เปิด</a>
                  </li>
                  <li>
                      <a href="{{ url('reservation') }}"><span class="mr-3"></span> จองวิชาเรียน</a>
                  </li>
                  <li>
                    <a href="{{ url('history') }}"><span class="mr-3"></span> ประวัติการจองวิชาเรียน</a>
                  </li>
                  <li>
                    <a href="{{ url('cancelreservation') }}"><span class="mr-3"></span> ยกเลิกการจองวิชาเรียน</a>
                  </li>
                  <li>
                    <a href="{{ url('stat-reservation') }}"><span class="mr-3"></span> สถิติการจองวิชาเรียน</a>
                  </li>
                  <li>
                    <a href="{{ url('stat-grade') }}"><span class="mr-3"></span> สถิติการได้เกรด</a>
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