@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.home.content')
    @include('partials.home.newsletter')
  @endwhile
@endsection
