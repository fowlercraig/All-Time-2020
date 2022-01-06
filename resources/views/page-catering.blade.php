@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="container">
      @include('partials.page-header')
      @includeFirst(['partials.content-page', 'partials.content'])
      <div class="form-input form-textarea form-multiselect form-select form-checkbox hidden"></div>
    </div>
  @endwhile
@endsection

