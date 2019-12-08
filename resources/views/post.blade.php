@extends('layouts.default')
@section('head')
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/Team-Boxed.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/Highlight-Phone.css')}}">
@endsection
@section('title') Phone by our team @endsection

@section('content')
    @extends('layouts.list')
@endsection
@extends('ads.iphone')
