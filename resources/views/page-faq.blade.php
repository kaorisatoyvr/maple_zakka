{{-- resources/views/page-faq.blade.php --}}
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  <h1>{{ the_title() }}</h1>

     <div class="faq_content">
      @include('partials.content-page')
     </div>

      <div class="accordion-container">
        @for ($i = 1; $i <= 6; $i++)
          @php
            $title = get_field('accordion_title' . $i);
            $text = get_field('accordion_text' . $i);
          @endphp
          @if ($title && $text)
            <div class="accordion">
              {{ $title }} 
            </div>
            <div class="panel">
              {{ $text }}
            </div>
          @endif
        @endfor
      </div>
  @endwhile
@endsection