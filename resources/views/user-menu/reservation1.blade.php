@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebar')

@section('title', 'การจองวิชาเรียน')

@section('content')

    <div class="table100 ver1 m-b-110">
        <h3>080303501 BASKETBALL</h3><br>
        <table data-vertable="ver1">
            <thead>
                <tr class="row100 head">
                    <th class="column100 column1" data-column="column1">วัน&nbsp;&nbsp;&nbsp;/<br>เวลา</th>
                    <th class="column100 column2" data-column="column2">08:00 - 10:00</th>
                    <th class="column100 column3" data-column="column3">10:00 - 12:00</th>
                    <th class="column100 column4" data-column="column4">12:00 - 13:00</th>
                    <th class="column100 column5" data-column="column5">13:00 - 15:00</th>
                    <th class="column100 column6" data-column="column6">16:00 - 18:00</th>
                    <th class="column100 column7" data-column="column7">18:00 - 20:00</th>

                </tr>
            </thead>
            <tbody>
                <tr class="row100">
                    <td class="column100 " data-column="column1">Monday</td>
                    <td class="column100 column2" data-column="column2">
                        sec.1 <br>
                        CS ปี2,MA ปี2
                    </td>
                    <td class="column100 column3" data-column="column3">--</td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">--</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">Tuesday</td>
                    <td class="column100 column2" data-column="column2">--</td>
                    <td class="column100 column3" data-column="column3">
                        sec.2 <br>
                        AS ปี2
                    </td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">--</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">Wendesday</td>
                    <td class="column100 column2" data-column="column2">--</td>
                    <td class="column100 column3" data-column="column3">--</td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">--</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">Thursday</td>
                    <td class="column100 column2" data-column="column2">--</td>
                    <td class="column100 column3" data-column="column3">--</td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">--</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">Friday</td>
                    <td class="column100 column2" data-column="column2">--</td>
                    <td class="column100 column3" data-column="column3">--</td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">--</td>

                </tr>




            </tbody>
        </table>


    </div>



    <br><br>

    <div class="container">
        <br>
        <table style="background: #36304a">
            <tr>
                <th style="text-align: right">ตอนเรียน</th>
                <th style="column-width: 250px">
                    <select class="form-group form-control-sm">
                        <option>S.1 M 08:00 - 10:00</option>
                        <option>S.2 T 10:00 - 12:00</option>
                    </select>
                </th>
            </tr>


            <tr>
                <th style="text-align: right">คณะ :</th>
                <th style="column-width: 250px">
                    <select class="form-group form-control-sm">
                        <option>04 คณะวิทยาศาสตร์ประยุกต์</option>
                    </select>
                </th>
            </tr>

            <tr>
                <th style="text-align: right">ภาควิชา :</th>
                <th style="column-width: 250px">
                    <select class="form-group form-control-sm">
                        <option>วิทยาการคอมพิวเตอร์และสารสนเทศ (CS)</option>
                    </select>
                </th>
            </tr>

            <tr>

            <tr>
                <th style="text-align: right">หลักสูตร :</th>
                <th>
                    <select class="form-group form-control-sm">
                        <option>59040644 CS หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</option>
                    </select>
                </th>
            </tr>

            <tr>
                <th style="text-align: right">ชั้นปี :</th>
                <th style="column-width: 50px">
                    <select class="form-group form-control-sm">
                        <option>1</option>
                    </select>
                </th>
            </tr>

            <tr>
                <th style="text-align: right">ประเภทนักศึกษา :</th>
                <th style="column-width: 150px">
                    <select class="form-group form-control-sm">
                        <option>R ปกติรอบเช้า</option>
                    </select>
                </th>
            </tr>

            <tr>
                <th style="text-align: right">รอบการเรียน :</th>
                <th style="column-width: 150px">
                    <select class="form-group form-control-sm">
                        <option>R รอบเช้า</option>
                    </select>
                </th>
            </tr>

            <tr>
                <th style="text-align: right">ห้องเรียน :</th>
                <th style="column-width: 50px">
                    <select class="form-group form-control-sm">
                        <option>A</option>
                    </select>
                </th>
            </tr>


            <tr>
                <th style="text-align: right">จำนวนนักศึกษาที่ต้องการจอง :</th>
                <th style="column-width: 100px">
                    <input type="text" class="center">
                </th>
            </tr>


        </table>


        <br>
        <a style="margin-right: 50px" class="btn btn-primary" href="{{ url('subjects') }}">ยืนยัน</a>
        <a class="btn btn-danger" href="{{ url('reservation') }}">ยกเลิก</a>
        <br><br>
    </div>



@endsection
