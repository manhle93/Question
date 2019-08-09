@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <DIV style="text-align:center">
            <h2>CÔNG ĐOÀN XÂY DỰNG VIỆT NAM</h2>
            <hr>
            <div>
                <img src="anh/logovuong.gif" style="width: 200px; height: 200px">
        </div>
            <BR>
            <a href="/package"><button type="button" class="btn btn-danger" style="width: 400px; height: 100px; font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;">TẠO CÂU HỎI</button></a>
            <a href="/play"><button type="button" class="btn btn-success" style="width: 400px; height: 100px; font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;">PLAY</button></a>
            </DIV>

        </div>
    </div>
</div>
@endsection
