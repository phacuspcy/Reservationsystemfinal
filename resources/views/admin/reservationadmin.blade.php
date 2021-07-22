@extends('layouts.template')
@extends('layouts.header')
@extends('layouts.slidebaradmin')


@section('title', 'index')

@section('content')
    <h3>แก้ไขรายการจองวิชาเรียน</h3>
    <br>
    <div class="table100 ver1 m-b-110">
        <table data-vertable="ver1">
            <thead>
                <tr class="row100 head">
                    <th class="column100 column1" data-column="column1">วันที่ทำการจองวิชา</th>
                    <th class="column100 column1" data-column="column1">ผู้ที่ทำการจอง</th>
                    <th class="column100 column2" data-column="column2">วิชา</th>
                    <th class="column100 column3" data-column="column3">หลักสูตร</th>
                    <th class="column100 column3" data-column="column3"></th>


                </tr>
            </thead>
            <tbody>
                <tr class="row100">
                    <td class="column100 " data-column="column1">1 / 1 / 2563</td>
                    <td class="column100 column2" data-column="column2">Prayut</td>
                    <td class="column100 column3" data-column="column3">080303501 BASKETBALL 1(0-1)</td>
                    <td class="column100 column4" data-column="column4">เมี๊ยว</td>
                    <td class="column100 column4" data-column="column4"><a href="#" class="btn btn-danger"
                            class="open-button" onclick="openForm()">ยกเลิกการจอง</a></td>


                </tr>
            </tbody>


        </table>

    </div>

    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <table style="background: #36304a">




                <tr>
                    <th style="text-align: right">ตอนเรียน :</th>
                    <th style="text-align: left">
                        <span>S.1 M 08:00 - 10:00</span>
                        {{-- <select class="form-group form-control-sm">
             <option>08:00 - 10:00</option>
             <option>10:00 - 12:00</option>
             <option>13:00 - 15:00</option>
             <option>16:00 - 18:00</option>
             <option>18:00 - 20:00</option>
           </select> --}}
                    </th>
                </tr>


                <tr>
                    <th style="text-align: right">คณะ :</th>
                    <th style="text-align: left">
                        <span>04 คณะวิทยาศาสตร์ประยุกต์</span>
                        {{-- <select class="form-group form-control-sm">
             <option>04 คณะวิทยาศาสตร์ประยุกต์</option>
           </select> --}}
                    </th>
                </tr>

                <tr>
                    <th style="text-align: right">ภาควิชา :</th>
                    <th style="text-align: left">
                        <span>วิทยาการคอมพิวเตอร์และสารสนเทศ (CS)</span>
                        {{-- <select class="form-group form-control-sm">
             <option>04 คณะวิทยาศาสตร์ประยุกต์</option>
           </select> --}}
                    </th>
                </tr>

                <tr>
                    <th style="text-align: right">หลักสูตร :</th>
                    <th style="text-align: left">
                        <span>59040644 CS หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</span>
                        {{-- <select class="form-group form-control-sm">
             <option>59040644 CS หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</option>
           </select> --}}
                    </th>
                </tr>

                <tr>
                    <th style="text-align: right">ชั้นปี :</th>
                    <th style="text-align: left">
                        <span>2</span>
                        {{-- <select class="form-group form-control-sm">
             <option>1</option>
           </select> --}}
                    </th>
                </tr>

                <tr>
                    <th style="text-align: right">ประเภทนักศึกษา :</th>
                    <th style="text-align: left">
                        <span>R ปกติรอบเช้า</span>
                        {{-- <select class="form-group form-control-sm">
             <option>R ปกติรอบเช้า</option>
           </select> --}}
                    </th>
                </tr>

                <tr>
                    <th style="text-align: right">รอบการเรียน :</th>
                    <th style="text-align: left">
                        <span>R รอบเช้า</span>
                        {{-- <select class="form-group form-control-sm">
             <option>R รอบเช้า</option>
           </select> --}}

                    </th>
                </tr>

                <tr>
                    <th style="text-align: right">ห้องเรียน :</th>
                    <th style="text-align: left">
                        <span>A</span>
                        {{-- <select class="form-group form-control-sm">
             <option>A</option>
           </select> --}}
                    </th>
                </tr>


                <tr>
                    <th style="text-align: right">จำนวนนักศึกษาที่ต้องการจอง :</th>
                    <th style="text-align: left">
                        <span>40</span>
                        {{-- <input type="text" class="center" placeholder="40"> --}}
                    </th>
                </tr>


            </table>
            <br>
            <a style="margin-right: 50px" class="btn btn-danger">ยกเลิกการจอง</a>
            <a class="btn btn-warning" onclick="closeForm()">ปิด</a>
            <br><br>
        </form>

    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

@endsection
