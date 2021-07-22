@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebar')

@section('title', 'index')

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
        </div>


    @endsection
