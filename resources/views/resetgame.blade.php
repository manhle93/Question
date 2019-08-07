{{--<link rel="stylesheet" href="{{ asset('css/dist/vue-multiselect.min.css') }}">--}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div id="app">
<game-reset :packages="{{$package}}" :turn="{{$turn}}" :totalpoint="{{$totalpoint}}"></game-reset>
</div>
<script src="{{asset('js/app.js')}}"></script>
