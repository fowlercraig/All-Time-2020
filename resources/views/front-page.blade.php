@extends('layouts.app')
@section('content')

@php $order = 'https://www.toasttab.com/alltime/v3' @endphp

<div x-data="{ news:false }">
  @include('partials.section-one')
  @include('partials.section-two')
  @include('partials.section-dinner')
  @include('partials.section-three')
  @include('partials.section-four')
  @include('partials.section-wine')
  @include('partials.section-five')
  @include('partials.section-six')
  @include('partials.newsletter')
</div>

@endsection
