{{--
  Template Name: Default Template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts())
    {!! the_post() !!}
    @include('patterns.02-organisms.content.content-page')
  @endwhile
@endsection
