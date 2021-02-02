@extends('layouts.main-layout')

@section('content')

  <h1><a href="{{ route('drink-index')}}">Torna alla Homepage</a></h1>

  <div class="box">

    <p>id: {{ $drink -> id}}</p>
    <p>Name: {{ $drink -> name}}</p>
    <p>Gradation: {{ $drink -> gradation}}°</p>
    <p>Price: {{ $drink -> price }} $</p>

  </div>

@endsection
