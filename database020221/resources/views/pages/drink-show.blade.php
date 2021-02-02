@extends('layouts.main-layout')

@section('content')

  <a href="{{ route('drink-index')}}">Torna alla Homepage</a>

  <p>id: {{ $drink -> id}}</p>
  <p>Name: {{ $drink -> name}}</p>
  <p>Gradation: {{ $drink -> gradation}}°</p>
  <p>Price: {{ $drink -> price }} $</p>

@endsection
