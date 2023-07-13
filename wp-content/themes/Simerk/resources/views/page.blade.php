@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <div class="bg-white shadow-md rounded-lg px-8 py-6">
    @while(have_posts()) @php(the_post())
    <header class="mb-4">
      <h1 class="text-3xl font-bold">{{ the_title() }}</h1>
    </header>
    <div class="prose">
      {{ the_content() }}
    </div>
    @endwhile
  </div>
</div>
@endsection