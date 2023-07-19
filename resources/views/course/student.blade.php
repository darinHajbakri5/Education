@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{__('course/student.student')}}</h1>
    <div class="card-body">
        @foreach ($students as $student)
            <p>
                <span class="student-name">{{ $student->name }}</span><br>
                <span class="underline"></span>
            </p>
        </div>
        @endforeach

    @endsection

