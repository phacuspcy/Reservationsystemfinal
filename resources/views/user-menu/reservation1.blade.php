@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebar')

@section('title', 'การจองวิชาเรียน')

@section('content')

    <div class="table100 ver1 m-b-110">
        <table data-vertable="ver1" class="center">
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
                    <td class="column100 " data-column="column1">วันจันทร์</td>
                    <td class="column100 column2" data-column="column2">AM</td>
                    <td class="column100 column3" data-column="column3">--</td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">8:00 AM</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">5:00 PM</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">วันอังคาร</td>
                    <td class="column100 column2" data-column="column2">--</td>
                    <td class="column100 column3" data-column="column3">5:00 PM</td>
                    <td class="column100 column4" data-column="column4">5:00 PM</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">9:00 AM</td>
                    <td class="column100 column7" data-column="column7">--</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">วันพุธ</td>
                    <td class="column100 column2" data-column="column2">9:00 AM</td>
                    <td class="column100 column3" data-column="column3">--</td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">2:00 PM</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">วันพฤหัสบดี</td>
                    <td class="column100 column2" data-column="column2">--</td>
                    <td class="column100 column3" data-column="column3">5:00 PM</td>
                    <td class="column100 column4" data-column="column4">5:00 PM</td>
                    <td class="column100 column5" data-column="column5">--</td>
                    <td class="column100 column6" data-column="column6">9:00 AM</td>
                    <td class="column100 column7" data-column="column7">--</td>

                </tr>

                <tr class="row100">
                    <td class="column100" data-column="column1">วันศุกร์</td>
                    <td class="column100 column2" data-column="column2">8:00 AM</td>
                    <td class="column100 column3" data-column="column3">--</td>
                    <td class="column100 column4" data-column="column4">--</td>
                    <td class="column100 column5" data-column="column5">8:00 AM</td>
                    <td class="column100 column6" data-column="column6">--</td>
                    <td class="column100 column7" data-column="column7">5:00 PM</td>

                </tr>




            </tbody>
        </table>


    </div>

    <br><br> <a>วัน :</a>
    <select class="form-group form-control-sm">
        <option>วันจันทร์</option>
        <option>วันอังคาร</option>
        <option>วันพุธ</option>
        <option>วันพฤหัสบดี</option>
        <option>วันศุกร์</option>
    </select>

    <br> <a>เวลา :</a>
    <select class="form-group form-control-sm">
        <option>08:00 - 10:00</option>
        <option>10:00 - 12:00</option>
        <option>13:00 - 15:00</option>
        <option>16:00 - 18:00</option>
        <option>18:00 - 20:00</option>
    </select>

    <br> <a>คณะ :</a>
    <select class="form-group form-control-sm">
        <option>04 คณะวิทยาศาสตร์ประยุกต์</option>
    </select>

    <br> <a>หลักสูตร :</a>
    <select class="form-group form-control-sm">
        <option>59040644 CS หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</option>
    </select>

    <br> <a>ชั้นปี :</a>
    <select class="form-group form-control-sm">
        <option>1</option>
    </select>

    <br> <a>ประเภทนักศึกษา :</a>
    <select class="form-group form-control-sm">
        <option>R ปกติรอบเช้า</option>
    </select>

    <br> <a>รอบการเรียน :</a>
    <select class="form-group form-control-sm">
        <option>R รอบเช้า</option>
    </select>

    <br> <a>ห้องเรียน :</a>
    <select class="form-group form-control-sm">
        <option>A</option>
    </select>

    <br> <a>จำนวนนักศึกษาที่ต้องการจอง :</a>
    <input>
    </select>



@endsection
