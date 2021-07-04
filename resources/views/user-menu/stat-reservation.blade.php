@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebar')

@section('title','สถิติการจองวิชาเรียน')

@section('content')
                               

  <head>
    <h3>สถิติการจองวิชาเรียน</h3><br>

    <span>ปีการศึกษา : &nbsp;&nbsp;</span>
    {{-- <select id="select" class="form-group form-control-sm" style="width: 80px" onchange="myFunction()"> --}}
    <select id="select" class="form-group form-control-sm" style="width: 80px">

      <option>2563</option>
      <option>2564</option>
    </select>

    <br>
    {{-- <a id="year"></a>  --}}

      <body>
        <div id="piechart_3d" style="width: 1280px; height: 700px;"></div>
      </body>
    

      {{-- <script>
        function myFunction() {
        var x = document.getElementById("select").value;
        document.getElementById("year").innerHTML = "ํ Year : " + x;
      }
      </script> --}}


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Select Subject'],
          ['BASKETBALL',     1],
          ['VOLLEYBALL',      1],
          ['BADMINTON',  1],
          ['DANCING', 1],
          ['TABLETENNIS',    1]
        ]);

        var options = {
            
          title: 'สถิติการจองวิชาเรียน' ,
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>

    

    
@endsection