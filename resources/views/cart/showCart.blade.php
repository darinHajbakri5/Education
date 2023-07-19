@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $cart->course->translate(app()->getLocale())->title }}</h1>
    <h3> {{$cart->course->translate(app()->getLocale())->text }}</h3>
    <p>{{$cart->course->translate(app()->getLocale())->description}}</p>
    <a href="{{ route('viewCart') }}" class="btn btn-secondary">{{__('cart/showCart.back')}}</a>
</div>
@endsection
