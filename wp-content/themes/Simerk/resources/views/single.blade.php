@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
  @while(have_posts()) @php(the_post())
  <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
    <div class="px-4 py-5 sm:px-6">
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    </div>
  </div>
  @endwhile
</div>
@endsection