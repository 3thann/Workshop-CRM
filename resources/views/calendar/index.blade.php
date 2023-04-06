@extends('layout.app')

@section('content')

{{-- CALENDAR JS  --}}
<link rel="stylesheet" href="{{ asset('/css/@fullcalendar/core/main.css') }}">
<link rel="stylesheet" href="{{ asset('/css/@fullcalendar/daygrid/main.css') }}">
<link rel="stylesheet" href="{{ asset('/css/@fullcalendar/timegrid/main.css') }}">

<div id="calendar"> test</div>

<script src="{{ asset('js/calendar.js') }}"></script>


@endsection