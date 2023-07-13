@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <div class="bg-white shadow-md rounded px-8 py-6">
    @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
  </div>
</div>
@endsection