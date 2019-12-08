@extends('layouts.app')

@section('title') Contact Page @endsection

@section('content')
    <h1>Contact page</h1>
    @if( count($people) )
      <ul>
      @foreach($people as $person)
        <li>{{$person}}</li>
      @endforeach
    </ul>
    @endif
@endsection
