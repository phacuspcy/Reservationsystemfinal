@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebar')

@section('title','สถิติการจองวิชาเรียน')

@section('content')
                               

  <head>
    <span>ปีการศึกษา : &nbsp;&nbsp;</span>
    <select class="form-group form-control-sm" style="width: 80px">
      <option>2563</option>
    </select>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['BASKETBALL',     1],
          ['VOLLEYBALL',      1],
          ['BADMINTON',  1],
          ['DANCING', 1],
          ['TABLETENNIS',    1]
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
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>

    
@endsection