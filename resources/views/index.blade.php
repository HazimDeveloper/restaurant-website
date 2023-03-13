@extends('layout.main')

@section('content')
@include('section.hero')
<main id="main">
    @include('section.about')
    @include('section.why-us')
    @include('section.stats')
    @include('section.menu')
    @include('section.testimonial')
    @include('section.events')
    @include('section.chef')
    @include('section.book')
    @include('section.gallery')
    @include('section.contact')

  </main><!-- End #main -->
@endsection