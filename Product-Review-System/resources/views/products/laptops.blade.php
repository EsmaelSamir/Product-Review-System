<!DOCTYPE html>
<html lang="en">
@extends("layouts.head")
@section('title')
    laptos
@endsection
@section('main_css')
    @php
        $time=time();
    @endphp
    <link rel="stylesheet" href="{{asset("css/home.css")}}?v={{$time}}">
    <link rel="stylesheet" href="{{asset("css/products.css")}}?v={{$time}}">
@endsection
<body>

    @extends('home.header')
    @section('laptops')
        active
    @endsection

    @include('home.landing_laptop')
    
    @include('home.recent_reviews')


    @include('home.top_rated')
    
    
    @include('home.footer')


</body>

</html>