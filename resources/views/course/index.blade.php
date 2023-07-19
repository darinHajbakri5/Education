@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="mb-4">{{__('layouts/app.courses')}}</h1>
    @unless($course->isEmpty())


    <div class="row">

        @foreach($course as $course)
        <div class="col-12 col-md-6 col-lg-4 mb-4"> <!-- Added 'mb-4' for spacing between rows -->
             <div class="card">
                <img class="card-img-top" src="http://www.orseu-concours.com/451-615-thickbox/selor-test-de-raisonnement-abstrait-niveau-a.jpg" alt="Company logo">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-title mt-0 "><a class="text-dark" href="#">{{ $course->text }}</p>
                    <div class="d-flex justify-content-between align-items-start pt-4">
                        <a href="{{ route('course.show', [ 'course' => $course->id]) }}" class="btn btn-secondary px-2 py-1">{{__('course/index.view-course')}} </a>
                        <form action="{{ route('addCart', [ 'course' => $course]) }}" method="POST" class="p-0">
                            @csrf
                            <input class="btn btn-secondary px-2 py-1" type="submit" value="{{ __('course/index.addcart') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    @else
    <tr class="border-gray-300">
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="no-course">{{ __('course/create.list') }}</p>
        </td>
    </tr>

    @endunless
</div>
@endsection



 <style>




/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 800px) {
  .column {
    flex: 46%;
    max-width: 46%;
  }
}


.card {

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
