@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <h2 class="text-center mt-4">Oops! That page can't be found.</h2>

  @if (! have_posts())
    <div class="content-404 my-20 text-center text-xl">
      <x-alert type="warning">
        {!! __('Nothing was found at this location. Try searching, or Go Back to Home.', 'sage') !!}
      </x-alert>
    </div>

    <div class="search-404 mt-20 text-center">
      {!! get_search_form(false) !!}
    </div>

    <div class="goBack my-20 mx-auto bg-beige w-fit py-3 px-6 rounded-full">
      <a href="/">Go Back To Home</a>
    </div>
  @endif
@endsection
