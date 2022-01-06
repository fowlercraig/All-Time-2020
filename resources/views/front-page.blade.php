@extends('layouts.home')
@section('content')

@query([
  'post_type' => 'page',
  'order'     => 'ASC',
  'orderby'   =>  'post__in',
  'post__in'  => get_field('sections'),
])

@posts
  @global($post)
  @set($slug,$post->post_name)
  @if( in_array($slug, array('about-us','marketplace','catering-panel'), true ) )
    @set($order,'md:order-last')
  @else
    @set($order,'')
  @endif
  <section id="section-{{ $slug }}">
    @includeFirst(['templates.template-' . get_field('template'), 'templates.template-fullwidth', ['order'=>$order]])
  </section>
@endposts

@endsection
