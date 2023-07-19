@extends('layouts.app')

@section('content')

<div class="container">

    <h1> {{__('cart/indexCart.mycourses')}}</h1>
    @unless($cart->isEmpty())
    @foreach($cart as $cart)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $cart->course->translate(app()->getLocale())->title }}</h5>
            <p class="card-text">{{ $cart->course->translate(app()->getLocale())->text}}</p>

            <div class="d-flex justify-content-between align-items-start pt-4">
                <div class="button-container">
                    <a href="{{ route('course.cart.show', $cart) }}" class="btn btn-secondary"> {{__('cart/indexCart.viewcourse')}}</a>
                    <form method="POST" action="{{route('destroy.cart', $cart->id)}}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" >{{__('cart/indexCart.delete')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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

.card-title {
    font-weight:bold;
    text-align: right;
    margin-bottom: 15px;
}

    .no-course-found {
        color: red;
        font-size: 20px;
        font-weight: bold;
    }

    .no-course {
        color: red;
        font-size: 20px;
        font-weight: bold;
        text-align: left;
    }





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
