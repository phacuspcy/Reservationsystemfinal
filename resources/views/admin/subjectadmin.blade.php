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
<h3>แก้ไขรายวิชาเรียนที่เปิด</h3>
<br>



<div class="table100 ver1">
	<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add Row</button>

	<br><br>
	
	<table data-vertable="ver1">
	  <thead>
		<tr class="row100 head">
		  <th class="column100 column1" data-column="column1">รหัสวิชา</th>
		  <th class="column100 column2" data-column="column2">ชื่อวิชา</th>
		  <th class="column100 column3" data-column="column3">ตอนเรียน</th>
		  <th class="column100 column4" data-column="column4">วัน</th>
		  <th class="column100 column5" data-column="column5">เวลา</th>
		  <th class="column100 column6" data-column="column6">จำนวนนักศึกษาที่รองรับ</th>
		  <th class="column100 column7" data-column="column7">Action</th>  		  
		</tr>
	  </thead>
	  <tbody>
		<tr class="row100">
		  <td class="column100 " data-column="column1">080303503</td>
		  <td class="column100 column2" data-column="column2">BASKETBALL 1(0-1)</td>
		  <td class="column100 column3" data-column="column3">1</td>
		  <td class="column100 column4" data-column="column4">Monday</td>	  	  
		  <td class="column100 column5" data-column="column5">08:00 - 10:00</td>	
		  <td class="column100 column6" data-column="column6">50</td>
		  <td>
			<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
			<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
			<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
		  </td>

		  
		</tr>
	  </tbody>
	</table>
  </div>

    
     
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
						'<td class="column100 "><input type="text" class="form-control" name="sec" id="sec"></td>' +
						'<td class="column100 "><input type="text" class="form-control" name="date" id="date"></td>' +
						'<td class="column100 "><input type="text" class="form-control" name="time" id="time"></td>' +
						'<td class="column100 "><input type="text" class="form-control" name="people" id="people"></td>' +
						
						'<td>' + actions + '</td>' +
					'</tr>';
					$("table").append(row);		
					$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
					$('[data-toggle="tooltip"]').tooltip();
				});
				// Add row on add button click
				$(document).on("click", ".add", function(){
					var empty = false;
					var input = $(this).parents("tr").find('input[type="text"]');
					input.each(function(){
						if(!$(this).val()){
							$(this).addClass("error");
							empty = true;
						} else{
							$(this).removeClass("error");
						}
					});
					$(this).parents("tr").find(".error").first().focus();
					if(!empty){
						input.each(function(){
							$(this).parent("td").html($(this).val());
						});			
						$(this).parents("tr").find(".add, .edit").toggle();
						$(".add-new").removeAttr("disabled");
					}		
				});
				// Edit row on edit button click
				$(document).on("click", ".edit", function(){		
					$(this).parents("tr").find("td:not(:last-child)").each(function(){
						$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
					});		
					$(this).parents("tr").find(".add, .edit").toggle();
					$(".add-new").attr("disabled", "disabled");
				});
				// Delete row on delete button click
				$(document).on("click", ".delete", function(){
					$(this).parents("tr").remove();
					$(".add-new").removeAttr("disabled");
				});
			});
			</script>
    
@endsection

