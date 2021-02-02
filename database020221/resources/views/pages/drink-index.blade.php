@extends('layouts.main-layout')

@section('content')

  <h1>Drinks:</h1>

  @foreach ($drinks as $drink)

    <p>{{ $drink -> name }}</p>

  @endforeach

@endsection
