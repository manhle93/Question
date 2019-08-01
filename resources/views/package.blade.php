@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card-header label">DANH SÁCH CÁC GÓI CÂU HỎI</div>
                <show-package :gois="{{$gois}}"></show-package>
            </div>
        </div>
    </div>
</div>
@endsection
