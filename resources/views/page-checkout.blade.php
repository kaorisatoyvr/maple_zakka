{{-- resources/views/page-about.blade.php --}}
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <h1>{{ the_title() }}</h1>
  
  <div class="checkout_content">
      @include('partials.content-page')
  </div>

  @endwhile
@endsection