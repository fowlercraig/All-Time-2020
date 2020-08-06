@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.home.content')
    @include('partials.home.newsletter')
    @include('partials.content-modal')
    @include('partials.content-video')
  @endwhile
@endsection
