{{-- resources/views/page-front.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="front-page-content">
  @while(have_posts()) @php the_post() @endphp
     <article @php post_class() @endphp>
        <h2>{{ the_title() }}</h2>
        <div class="entry-content">
            {!! the_content() !!}
        </div>
      </article>
  @endwhile
</div>
@endsection