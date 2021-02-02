@extends('layouts.main-layout')

@section('content')

  <p>id: {{ $drink -> id}}</p>
  <p>Name: {{ $drink -> name}}</p>
  <p>Gradation: {{ $drink -> gradation}}°</p>
  <p>Price: {{ $drink -> price }} $</p>

@endsection
