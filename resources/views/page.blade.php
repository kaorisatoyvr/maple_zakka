@extends('layouts.app')

@section('title', 'Your Page Title')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
