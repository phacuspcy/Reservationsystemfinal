@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')


@section('title', 'index')

@section('content')

    <head>
        <h3>แก้ไขสถิติการจองวิชาเรียน</h3>
        <br>
        <span>ปีการศึกษา : &nbsp;&nbsp;</span>

        <select id="select" class="form-group form-control-sm" style="width: 80px">
            <option>2563</option>
            <option>2564</option>
        </select>


        <br>
        <div class="container">
            <br>
            <table style="background: #36304a">

                <tr>
                    <th style="text-align: right">BASKETBALL :</th>
                    <th style="column-width: 100px">
                        <input type="text" class="center">
                    </th>
                    <th style="text-align: right">VOLLEYBALLL :</th>
                    <th style="column-width: 100px">
                        <input type="text" class="center">
                    </th>
                    <th style="text-align: right">BADMINTON :</th>
                    <th style="column-width: 100px">
                        <input type="text" class="center">
                    </th>
                    <br>


                </tr>

                <tr>
                    <th style="text-align: right">DANCING :</th>
                    <th style="column-width: 100px">
                        <input type="text" class="center">
                    </th>
                    <th style="text-align: right">TABLETENNIS :</th>
                    <th style="column-width: 100px">
                        <input type="text" class="center">
                    </th>

                    <br>


                </tr>


            </table>


            <br>
            <a style="margin-right: 50px" class="btn btn-success">ตกลง</a>
            <a class="btn btn-danger" href="{{ url('editstat') }}">ยกเลิก</a>
            <br><br>
        </div>
        <br>

    <body>
        <div id="piechart_3d" style="width: 1280px; height: 700px;"></div>
    </body>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Select Subject'],
                ['BASKETBALL', 1],
                ['VOLLEYBALL', 1],
                ['BADMINTON', 1],
                ['DANCING', 1],
                ['TABLETENNIS', 1]
            ]);

            var options = {

                title: 'สถิติการจองวิชาเรียน',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

    </head>

@endsection
