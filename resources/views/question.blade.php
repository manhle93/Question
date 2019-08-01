@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card-header label">NHẬP CÂU HỎI</div>
                <add-question :id="{{$id}}"></add-question>
            </div>
        </div>
    </div>
</div>
@endsection