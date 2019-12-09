@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <DIV style="text-align:center;font-family: 'Times New Roman'; font-weight:bold">
            <h2>CÔNG ĐOÀN XÂY DỰNG VIỆT NAM</h2>
            <hr>
            <div>
                <img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/logovuong_x7frmn.gif" style="width: 150px; height: 150px">
                <br><br>
                <H4 style="font-weight:bold">HỘI THI AN TOÀN VỆ SINH VIÊN GIỎI</H4>
                <H4 style="font-weight:bold">TOÀN QUỐC NGÀNH XÂY DỰNG</H4>
        </div>
            <BR><br><br>
            <a href="/package"><button type="button" class="btn btn-danger" style="width: 300px; height: 120px; font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    font-size: 30px; border-radius: 20px; margin-right: 40px">TẠO CÂU HỎI</button></a>
            <a href="/play"><button type="button" class="btn btn-success" style="width: 300px; height: 120px; font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    font-size: 30px;border-radius: 20px">PLAY</button></a>
            </DIV>

        </div>
    </div>
</div>
@endsection
