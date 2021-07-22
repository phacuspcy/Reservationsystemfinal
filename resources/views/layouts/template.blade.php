<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>template - @yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
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
                        <li> <a href="{{ url('logout') }}" aria-expanded="false"><span class="hide-menu">ออกจากระบบ</span></a>
                        </li>
                    </ul>      
                </nav>
                <!-- End Sidebar -->
            </div>
            <!-- End Sidebar scroll-->
        </aside> --}}
        <!-- End left-slidebar -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class=" center">
                                        <div>
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card-body -->
                        </div>
                        <!-- End card -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Container fluid  -->

            <footer class="footer"> © 2021 FACULTY OF APPLIED ARTS KMUTNB </footer>
            <!-- End footer -->
        </div>
    </div>

</body>

</html>
