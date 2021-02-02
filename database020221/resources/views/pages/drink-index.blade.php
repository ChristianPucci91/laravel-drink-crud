@extends('layouts.main-layout')

@section('content')

  <h1>Drinks:</h1>

  @foreach ($drinks as $drink)

    <a href="{{ route('drink-show', $drink -> id )}}">
      <p>
        {{ $drink -> name }}
      </p>
    </a>

  @endforeach

@endsection
