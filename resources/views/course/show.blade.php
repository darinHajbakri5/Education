@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $course->title }}</h1>
    <h3> {{ $course->text }}</h3>
    <p>{{ $course->description }}</p>

<div></div>
    <a href="{{ route('home') }}" class="btn btn-secondary">{{__('course/show.back-t-courses')}} </a>



@endsection
