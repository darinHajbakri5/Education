@extends('layouts.app')

@section('content')
<div class="container">

            <h1>{{ __('layouts/app.courses') }}</h1>

    @unless($course->isEmpty())
     @foreach($course as $course)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $course->title }}</h5>
                <p class="card-text">{{ $course->text }}</p>
                <div class="d-flex justify-content align-items-start pt-4">
                @if (Auth::user()->role == 'teacher' && Auth::user()->id == $course->teacher_id)
                        <a href="{{ route('course.edit', $course) }}" class="btn btn-secondary edit-btn mr-2">{{ __('course/manage.edit') }}</a>
                        <a href="{{ route('course.show', ['course' => $course->id]) }}" class="btn btn-secondary mr-2">{{ __('course/index.view-course') }}</a>
                        <form method="POST" action="{{ route('destroy', $course) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger delete-btn ">{{ __('cart/indexCart.delete') }}</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>

        @endforeach
    </div>
    @else
        <div class="no-course-found">
            <p class="text-center">No Course Found</p>
        </div>
    @endunless

@endsection


<style>
    .no-course-found {
        color: red;
        font-size: 20px;
        font-weight: bold;
    }
    </style>

<style>
    .no-course {
        color: red;
        font-size: 20px;
        font-weight: bold;
        text-align: left;
    }
    </style>

<style>

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media (max-width: 800px) {
      .column {
        flex: 46%;
        max-width: 46%;
      }
    }

    .card {
      opacity: 0.8;
      filter: alpha(opacity=60);
    }
    .card-title {
      font-weight:bold;
      text-align: center;
    }
    .card-text {
      text-align: justify;
    }

    .modal-header {
      background-image: linear-gradient(#7FDBFF,white);
    }
    .modal-footer {
      background-image: linear-gradient(white,#7FDBFF);
    }
    #left-panel-link {
      position: relative;
      left: 5%;
      background-color: #555;
      color: white;
      font-size: 16px;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
    #right-panel-link {
      position: absolute;
      right: 10%;
      background-color: #555;
      color: white;
      font-size: 16px;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
    .sep {
      height: 25px;
    }
     </style>
