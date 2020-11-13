@extends('layouts.app')
@section('content')

@php $order = 'https://www.toasttab.com/alltime/v3' @endphp

@include('partials.section-one')
@include('partials.section-two')
@include('partials.section-dinner')
@include('partials.section-three')
@include('partials.section-four')
@include('partials.section-five')
@include('partials.section-six')

@endsection
